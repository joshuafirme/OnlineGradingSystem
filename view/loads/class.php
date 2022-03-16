<?php 
 	/*11-17-2021 ADDED MIKE*/
 	include '../../connection/connect.php';
	include '../../auditlog/auditfunction.php';

	switch ($_POST['form']) {
		case 'loadsInfo':
				$sql = "SELECT SUBJ_ID, SUBJ_DESCRIPTION, UNIT, YEARLEVEL FROM subject WHERE SUBJ_ID = '".$_POST['subjid']."'";
				$res = mysqli_query($connect, $sql);
				$row = mysqli_fetch_array($res);

				$getyr = "SELECT LEVEL FROM level WHERE YR_ID = '".$row['YEARLEVEL']."'";
				$resyr = mysqli_query($connect, $getyr);
				$rowyr = mysqli_fetch_array($resyr);

				echo $row['SUBJ_ID']."|".$row['SUBJ_DESCRIPTION']."|".$row['UNIT']."|".$rowyr['LEVEL'];
		break;

		case 'listsubject':
			 $sql = "SELECT SUBJ_ID,room,days,time,id FROM tbl_loads WHERE userID = '".$_POST['userID']."' AND status = 1";
			 $res = mysqli_query($connect, $sql);
			 while ($row = mysqli_fetch_array($res)) {
				 $sq2 = "SELECT SUBJ_ID,SUBJ_CODE, SUBJ_DESCRIPTION, YEARLEVEL FROM subject WHERE SUBJ_ID = '".$row[0]."'";
				 $rcode = mysqli_query($connect, $sq2);
				 $rowcode = mysqli_fetch_array($rcode);
			 ?>
			 <tr style="text-align: center;">
			 	<td><?php echo $rowcode[0];?></td>
			 	<td><?php echo $rowcode[1];?></td>
			 	<td><?php echo $rowcode[2];?></td>
			 	<td>
			 	<?php 
 				 $level = "SELECT LEVEL FROM level WHERE YR_ID = '".$rowcode[3]."'";
				 $rlevel = mysqli_query($connect, $level);
				 $rowlevel = mysqli_fetch_array($rlevel);
				 echo $rowlevel[0];
			 	?>
			 	</td>
			 	<td style="text-align: center;"><?php 
			 	if ($row[1] == '') {
			 		echo '--';
			 	} else {
			 		echo $row[1];
			 	} ?></td>
			 	<td style="text-align: center;"><?php 
			 	if ($row[2] == '') {
			 		echo '--';
			 	} else {
			 		echo $row[2]."/".$row[3];
			 	} ?></td>
<!-- 			 	<td style="text-align: center;"><a href="">0</a></td>
			 	<td><?php echo $row['academicyear'] ?></td> -->
			 	<td>
			 		<button class="btn btn-success" onclick="editsubject('<?php echo $row['SUBJ_ID'] ?>','<?php echo $row['id'] ?>')"> <i class="fas fa-edit" ></i> Edit</button>
			 		<button class="btn btn-danger" onclick="deletesubject('<?php echo $row['id'] ?>')"> <i class="fas fa-trash-alt" ></i> Remove</button>
			 	</td>
			 </tr>
			 <?php
			 }
		break;

		case 'saveloads':
			$chck = "SELECT SUBJ_ID FROM tbl_loads WHERE SUBJ_ID = '".$_POST['subjcode']."' AND userID = '".$_POST['userID']."' AND status = 1";
			$reschk = mysqli_query($connect, $chck);
			if (mysqli_num_rows($reschk)) {
				echo 0;
			} else {
				$sql = "INSERT INTO tbl_loads SET SUBJ_ID = '".$_POST['subjcode']."', userID = '".$_POST['userID']."', status = 1";
				$res = mysqli_query($connect, $sql);
				echo $res;
			}
		break;

		case 'saveUpdateloads':
				$chck = "SELECT SUBJ_ID FROM tbl_loads WHERE SUBJ_ID = '".$_POST['subjcode']."' AND userID = '".$_POST['userID']."' AND status = 1";
				$reschk = mysqli_query($connect, $chck);
				if (mysqli_num_rows($reschk)) {
					echo 0;
				} else {
					$sql = "UPDATE tbl_loads SET SUBJ_ID = '".$_POST['subjcode']."' WHERE id = '".$_POST['id']."'";
					$res = mysqli_query($connect, $sql);
					echo $res;
				}


		break;

		case 'deletesubject':
                     $sql = "UPDATE tbl_loads SET status = '0' WHERE id = '".$_POST['id']."'";
                    $res = mysqli_query($connect, $sql);
                    echo $res;
		break;

		case 'loadsubject':
			$sql = "SELECT SUBJ_ID,SUBJ_CODE, SUBJ_DESCRIPTION, UNIT, YEARLEVEL FROM subject WHERE status = 1";
			$res = mysqli_query($connect, $sql);
			?>
			<option value="">~ SELECT ~</option>
			<?php
			while ($row = mysqli_fetch_array($res)) {
				?>
				<option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
				<?php
			}
		break;

		case 'getinfo':
			$sql = "SELECT SUBJ_DESCRIPTION, UNIT, YEARLEVEL FROM subject WHERE SUBJ_ID = '".$_POST['id']."'";
			$res = mysqli_query($connect, $sql);
			$row = mysqli_fetch_array($res);

			$getyr = "SELECT LEVEL FROM level WHERE YR_ID = '".$row[2]."'";
			$resyr = mysqli_query($connect, $getyr);
			$rowyr = mysqli_fetch_array($resyr);

			echo $row[0]."|".$row[1]."|".$rowyr[0];

		break;

		case 'loadinstructinfo':
			 $sql = "SELECT CONCAT(fname,' ',mname,' ',lname) as name FROM tbl_users WHERE userID = '".$_POST['id']."'";
			 $res = mysqli_query($connect, $sql);
			 $row = mysqli_fetch_array($res);

			 $sql2 = "SELECT specialization FROM tbl_instructor WHERE userID = '".$_POST['id']."'";
			 $res2 = mysqli_query($connect, $sql2);
			 $row2 = mysqli_fetch_array($res2);

			 echo ucwords($row[0])."|".ucwords($row2[0]);
		break;
	}

?>