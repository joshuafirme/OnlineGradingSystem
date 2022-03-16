<?php 
	include '../../connection/connect.php';


	switch ($_POST['form']) {
		case 'loadgradelevel':
				?>
				<option value="">~ Select ~</option>
				<?php		
				$sql = "SELECT * FROM level WHERE status = 1";
				$res = mysqli_query($connect, $sql);

				while ($row = mysqli_fetch_array($res)) {
				?>
				<option value="<?php echo $row['YR_ID'] ?>"><?php echo $row['LEVEL'] ?></option>
				<?php		
				}	
		break;

			case 'loaddepartment':
				$sql = "SELECT * FROM department WHERE status = 1";
				$res = mysqli_query($connect, $sql);
				?>
				<option value="">~ SELECT ~</option>
				<?php
				while ($row = mysqli_fetch_array($res)) {
					?>
					<option value="<?php echo $row['DEPT_ID']; ?>"><?php echo $row['DEPARTMENT_NAME']; ?></option>
					<?php
					}	
			break;

		case 'loadstudents':

				if ($_POST['AC_YR'] == '') {
					$AC_YR = '2020-2021';
				} else {
					$AC_YR = $_POST['AC_YR'];
				}


				$ext = "";
				if ($_POST['yearlevel']) {
					$ext .= "AND YR_ID = '".$_POST['yearlevel']."'";
				} else {
					$ext .= "";
				}

				$ext2 = "";
				if ($_POST['course']) {
					$ext2 .= "AND DEPT_ID = '".$_POST['course']."'";
				}else{
					$ext2 .= "";
				}  

				$sql = "SELECT ENROLLED_ID,USERID,DEPT_ID,AC_YR,YR_ID,DEPT_ID FROM `tbl_erecords` WHERE AC_YR = '".$AC_YR."' ".$ext." ".$ext2."";
				$res = mysqli_query($connect, $sql);



				while ($row = mysqli_fetch_array($res)) {

				$names = "SELECT * FROM tbl_users WHERE userID = '".$row['USERID']."'";
				$resnames = mysqli_query($connect, $names);
				$rownames = mysqli_fetch_array($resnames);

				?>
				<tr style="text-align: center;" >
					<td style="text-align: center;"><img style="width: 50px; height: 50px; border-radius: 50%;" src="assets/images/users/<?php echo $rownames['user_avatar']; ?>">
						<input type="hidden" class="form-control table-input" value="<?php echo $row['ST_SUBJID']; ?>" readonly>
					</td>
					<td >
						<?php 
							echo ucwords($rownames['lname'].", ".$rownames['fname']." ".$rownames['mname']).".";
						?>
					</td>
					<td><?php 
						$yr = "SELECT LEVEL FROM level WHERE YR_ID = '".$row['YR_ID']."'";
						$resyr = mysqli_query($connect,$yr);
						$rowyr = mysqli_fetch_array($resyr);
						echo $rowyr['LEVEL']; 
					?></td>
					<td><?php 
						$yr = "SELECT DEPARTMENT_NAME FROM department WHERE DEPT_ID = '".$row['DEPT_ID']."'";
						$resyr = mysqli_query($connect,$yr);
						$rowyr = mysqli_fetch_array($resyr);
						echo $rowyr['DEPARTMENT_NAME']; 
					?></td>
					<td>
						<?php 
/*								$getaverage = "SELECT COUNT(SUBJ_ID), SUM(FG), USERID FROM `tbl_studload` WHERE ENROLLED_ID = '".$row[0]."'";
								$resaverage = mysqli_query($connect, $getaverage);
								$rowaverage = mysqli_fetch_array($resaverage);
								$total = $rowaverage[1] / $rowaverage[0];
								echo $total;*/

								$sqlgrade = "SELECT A.USERID ,A.quaterly_final, B.quaterly_final, C.quaterly_final, D.quaterly_final FROM `tbl_studload_qt1` AS A LEFT JOIN `tbl_studload_qt2` AS B ON A.SUBJ_ID = B.SUBJ_ID LEFT JOIN `tbl_studload_qt3` AS C ON B.SUBJ_ID = C.SUBJ_ID LEFT JOIN `tbl_studload_qt4` AS D ON C.SUBJ_ID = D.SUBJ_ID WHERE A.ENROLLED_ID = '".$row['ENROLLED_ID']."' GROUP BY A.USERID";
								$resgrade = mysqli_query($connect, $sqlgrade);
								$rowgrade = mysqli_fetch_array($resgrade);
								$avg = $rowgrade[1] + $rowgrade[2] + $rowgrade[3] + $rowgrade[4];
								$total = $avg / 4;
								echo $total;

						?>
					</td>
				</tr>
				<?php
				}
		break;
	}
?>