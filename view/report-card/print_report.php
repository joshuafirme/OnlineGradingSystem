<?php
    include '../../connection/connect.php';
    require_once '../../vendor/autoload.php';
    include_once '../../helper/utils.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $utils = new Utils();


    $output = '';

$output .= $utils->printLayoutTemplate('Report Card');

//$output .= '
//<p style="text-align:left;">SY: '.$_GET['sy']. ' '. $_GET['term'] . ' Term' .'</p>';
//<p style="text-align:left;">Date: '. date("F j, Y", strtotime($date_start)) .' - '. date("F j, Y", strtotime($date_end)) .'</p>';
$sql = "SELECT * FROM tbl_studload_qt1 WHERE userID = '".$_GET['student_id']."' AND ENROLLED_ID = '".$_GET['eid']."'";
$res = mysqli_query($connect, $sql);

$output .='

<table width="100%" style="border-collapse:collapse; border: 1px solid;">                
    <thead>
        <tr>
        <th>Instructor</th>
        <th>Subject</th>
        <th>Grade</th>
        <th>Remarks</th>
       
    <tbody>';
    $total_sale = 0;
    if(isset($res)){

        while ($row = mysqli_fetch_array($res)) {
            $name = "SELECT CONCAT(fname,' ',mname,' ',lname) as name FROM tbl_users WHERE userID = '".$row['INSTRUCTOR_ID']."'";
            $nres = mysqli_query($connect, $name);
            $rname = mysqli_fetch_array($nres);

            $subject = "SELECT SUBJ_CODE FROM subject WHERE SUBJ_ID = '".$row['SUBJ_ID']."'";
						$resubj = mysqli_query($connect, $subject);
						$rsubj = mysqli_fetch_array($resubj);

            $sqlgrade = "SELECT A.USERID ,A.quaterly_final, B.quaterly_final, C.quaterly_final, D.quaterly_final FROM `tbl_studload_qt1` AS A LEFT JOIN `tbl_studload_qt2` AS B ON A.SUBJ_ID = B.SUBJ_ID LEFT JOIN `tbl_studload_qt3` AS C ON B.SUBJ_ID = C.SUBJ_ID LEFT JOIN `tbl_studload_qt4` AS D ON C.SUBJ_ID = D.SUBJ_ID WHERE A.SUBJ_ID = '".$row['SUBJ_ID']."' AND A.INSTRUCTOR_ID = '".$row['INSTRUCTOR_ID']."' GROUP BY A.USERID";
            $resgrade = mysqli_query($connect, $sqlgrade);
            $rowgrade = mysqli_fetch_array($resgrade);

         $avg = $rowgrade[1] + $rowgrade[2] + $rowgrade[3] + $rowgrade[4];

         $total = $avg / 4;
         if ($total == "") { 
            $remarks = '<b style="color:red;">INCOMPLETE</b>';
        } else if($total < 75) {
            $remarks = '<b style="color:red;">FAILED</b>';
        } else if($total > 74){
            $remarks = '<b style="color:green;">PASSED</b>';
        }
           $output .='
           <tr class="align-text">   

               <td>'.ucwords($rname[0]).'</td>
               <td>'.$rsubj[0].'</td>
               <td>'.$total.'</td>
               <td>'.$remarks.'</td>
           </tr>';
           
        }
    
    }
    else {
        $output .= "No data found.";
    }

$dompdf->loadHtml($output);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

exit(0);
?>