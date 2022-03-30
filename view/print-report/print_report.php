<?php
    include '../../connection/connect.php';
    require_once '../../vendor/autoload.php';
    include_once '../../helper/utils.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $utils = new Utils();


    $output = '';

$output .= $utils->printLayoutTemplate('Grades Report');

//$output .= '
//<p style="text-align:left;">SY: '.$_GET['sy']. ' '. $_GET['term'] . ' Term' .'</p>';
//<p style="text-align:left;">Date: '. date("F j, Y", strtotime($date_start)) .' - '. date("F j, Y", strtotime($date_end)) .'</p>';
$sql = "SELECT A.USERID ,A.quaterly_final, B.quaterly_final, C.quaterly_final, D.quaterly_final, A.status, A.ST_SUBJID FROM `tbl_studload_qt1` AS A LEFT JOIN `tbl_studload_qt2` AS B ON A.SUBJ_ID = B.SUBJ_ID LEFT JOIN `tbl_studload_qt3` AS C ON B.SUBJ_ID = C.SUBJ_ID LEFT JOIN `tbl_studload_qt4` AS D ON C.SUBJ_ID = D.SUBJ_ID WHERE A.SUBJ_ID = '".$_GET['id']."' AND A.INSTRUCTOR_ID = '".$_GET['id2']."' GROUP BY A.USERID";
$res = mysqli_query($connect, $sql);

$output .='

<table width="100%" style="border-collapse:collapse; border: 1px solid;">                
    <thead>
        <tr>
            <th>Student</th>
            <th>1st</th>
            <th>2nd</th>
            <th>3rd</th>
            <th>4th</th>
            <th>Final Avg</th>
            <th>Remarks</th>
       
    <tbody>';
    $total_sale = 0;
    if(isset($res)){

        while ($row = mysqli_fetch_array($res)) {
         //  extract($row);
         $names = "SELECT * FROM tbl_users WHERE userID = '".$row[0]."'";
						$resnames = mysqli_query($connect, $names);
						$rownames = mysqli_fetch_array($resnames);

						$avg = $row[1] + $row[2] + $row[3] + $row[4];

						$total = $avg / 4;
                        
                        $remarks = 'N/A';
                        if($total < 75) {
                            $remarks = '<span class="badge badge-danger">FAILED</span>';
                        } else if($total > 74){
                            $remarks = '<span class="badge badge-success">PASSED</span>';
                        }
           $output .='
           <tr class="align-text">   

               <td>'.ucwords($rownames['lname'].", ".$rownames['fname']." ".$rownames['mname']).'</td>
               <td>'.$row[1].'</td>
               <td>'.$row[2].'</td>
               <td>'.$row[3].'</td>
               <td>'.$row[4].'</td>
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