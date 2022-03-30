 <?php 

include '../../connection/connect.php';

switch ($_POST['form']) {
	case 'loadusers':
		
	break;

	case 'viewinfo':
		$sql = "SELECT * FROM tbl_loads WHERE SUBJ_ID = '".$_POST['id']."' AND userID = '".$_POST['id2']."' AND section = '".$_POST['sect']."'";
		$res = mysqli_query($connect, $sql);
		$row = mysqli_fetch_array($res);
		$name = "SELECT * FROM tbl_users WHERE userID = '".$row['userID']."'";
		$resname= mysqli_query($connect, $name);
		$rowname = mysqli_fetch_array($resname);
		$subj = "SELECT * FROM SUBJECT WHERE SUBJ_ID = '".$_POST['id']."'";
		$ressuj = mysqli_query($connect, $subj);
		$rowsubj = mysqli_fetch_array($ressuj);
		echo $rowname['fname']." ".$rowname['mname']." ".$rowname['lname']."|".$rowsubj['SUBJ_CODE']."|".$row['section'];
	break;

	case 'savegrade':
			$sql = "UPDATE tbl_studload SET 1G = '".$_POST['fG']."' ,2G = '".$_POST['SndG']."',3G = '".$_POST['thrdG']."' ,4G = '".$_POST['fthG']."' WHERE ST_SUBJID = '".$_POST['id']."'";
			$update = mysqli_query($connect,$sql);	

			echo $sql;
	break;


case 'managegrade':
					$sql = "SELECT A.USERID ,A.quaterly_final, B.quaterly_final, C.quaterly_final, D.quaterly_final, A.status, A.SUBJ_ID, A.INSTRUCTOR_ID FROM `tbl_studload_qt1` AS A LEFT JOIN `tbl_studload_qt2` AS B ON A.SUBJ_ID = B.SUBJ_ID LEFT JOIN `tbl_studload_qt3` AS C ON B.SUBJ_ID = C.SUBJ_ID LEFT JOIN `tbl_studload_qt4` AS D ON C.SUBJ_ID = D.SUBJ_ID WHERE A.SUBJ_ID = '".$_POST['id']."' AND A.INSTRUCTOR_ID = '".$_POST['id2']."' GROUP BY A.USERID";
					$res = mysqli_query($connect, $sql);
					while ($row = mysqli_fetch_array($res)) {
						if ($row[5] == 0) {
						$names = "SELECT * FROM tbl_users WHERE userID = '".$row[0]."'";
						$resnames = mysqli_query($connect, $names);
						$rownames = mysqli_fetch_array($resnames);

						$avg = $row[1] + $row[2] + $row[3] + $row[4];

						$total = $avg / 4;
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
							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>
							<td><?php echo $row[3]; ?></td>
							<td><?php echo $row[4]; ?></td>
							<td>
								<?php echo $total; ?>
							</td>
							<td style="text-align: center;"> 
								<?php
								if ($total == "") {
									echo '';
								} else if($total < 75) {
									echo '<span class="badge badge-danger">FAILED</span>';
								} else if($total > 74){
									echo '<span class="badge badge-success">PASSED</span>';
								}

							?></td>
							<td><a class="btn btn-info" href="index.php?url=managegrades&INSTRUCTOR_ID=<?php echo $row[7] ?>&SUBJ_ID=<?php echo $row[6] ?>&resubmit=1&UID=<?php echo $row[0] ?>"> Resubmit</a></td>
						</tr>
						<?php
						}
					}
	break;

	case 'viewclasslist':
			$sql = "SELECT * FROM `tbl_studload` WHERE request = '".$_POST['id']."' AND INSTRUCTOR_ID = '".$_POST['id2']."'";
			$res = mysqli_query($connect, $sql);

			while ($row = mysqli_fetch_array($res)) {

				$names = "SELECT * FROM tbl_users WHERE userID = '".$row['USERID']."'";
				$resnames = mysqli_query($connect, $names);
				$rownames = mysqli_fetch_array($resnames);

				$erecords = "SELECT * FROM tbl_erecords WHERE USERID = '".$row['USERID']."'";
				$resereocrds = mysqli_query($connect, $erecords);
				$rowerecords = mysqli_fetch_array($resereocrds);

				$dept = "SELECT * FROM `department` WHERE DEPT_ID = '".$rowerecords['DEPT_ID']."'";
				$resdpet = mysqli_query($connect, $dept);
				$rowddept = mysqli_fetch_array($resdpet);

				$yr = "SELECT * FROM `level` WHERE YR_ID = '".$rowerecords['YR_ID']."'";
				$resyr = mysqli_query($connect, $yr);
				$rowyr = mysqli_fetch_array($resyr);


				?>
				<tr>
					<td>
						<?php 
							echo $rownames['accountno'];
						?>
					</td>
					<td>
						<?php 
							echo $rownames['fname']." ".$rownames['mname']." ".$rownames['lname'];
						?>
					</td>
					<td>
						<?php 
						echo $rownames['birthdate']; 
						?>
					</td>
					<td>
						<?php echo $rowddept['DEPARTMENT_NAME']; ?>
					</td>
					<td>
						<?php echo $rowyr['LEVEL']; ?>
					</td>
				</tr>
				<?php
			}
	break;


	case 'loadclass':
			$sql = "SELECT * FROM tbl_loads";
			$res = mysqli_query($connect, $sql);
			while ($row = mysqli_fetch_array($res)) {
				
				$count = "SELECT COUNT(ST_SUBJID) FROM tbl_studload_qt1 WHERE SUBJ_ID = '".$row['SUBJ_ID']."'AND section = '".$row['section']."' AND status = 0 AND INSTRUCTOR_ID = '".$row['userID']."'";	
				$rescount = mysqli_query($connect, $count);
				$rowcount = mysqli_fetch_array($rescount);
				if ($rowcount[0] > 0) {
				?>
				<tr>
					<td style="text-align: center;"><?php
					$name = "SELECT CONCAT(fname,' ',mname,' ',lname) as name FROM tbl_users WHERE userID = '".$row['userID']."'";
					$nres = mysqli_query($connect, $name);
					$rname = mysqli_fetch_array($nres);
					echo ucwords($rname[0]);
					?>
					</td>
					<td style="text-align: center;"><?php
					$subject = "SELECT SUBJ_CODE FROM subject WHERE SUBJ_ID = '".$row['SUBJ_ID']."'";
					$resubj = mysqli_query($connect, $subject);
					$rsubj = mysqli_fetch_array($resubj);
					echo $rsubj[0];
					?>
					</td>
					<td>
						<?php echo $row['section']; ?>
					</td>
					<td style="text-align: center;">
					<?php 
					echo $rowcount[0];
					?></td>
					<td style="text-align: center;">
						<button class="btn btn-info" onclick="viewManageGrade('<?php echo $row['SUBJ_ID']; ?>','<?php echo $row['userID']; ?>','<?php echo $row['section']; ?>');"><i class="fas fa-search"></i> Review Grades</button></td>
					<td style="text-align: center;">
								<?php echo '<label class="bg-danger text-white rounded" style="color:green; padding: 10px; "> DECLINED </label>' ?>
							</td>
				</tr>
				<?php
				}
			}
	break;

	case 'loadroom':
			$sql = "SELECT * FROM room WHERE status = 1";
			$res = mysqli_query($connect, $sql);
			?>	
			<option value="">~ SELECT ~</option>
			<?php
			while ($row = mysqli_fetch_array($res)) {
					?>
						<option value="<?php echo $row['ROOM_ID']; ?>"><?php  echo $row['ROOM_NAME'];  ?></option>
					<?php
				}	
	break;

	case 'addschedule':

			$sql = "SELECT * FROM tbl_loads WHERE id = '".$_POST['id']."'";
			$res = mysqli_query($connect,$sql);
			$row = mysqli_fetch_array($res);

			$subject = "SELECT * FROM subject WHERE SUBJ_ID = '".$row['SUBJ_ID']."'";
			$resubj = mysqli_query($connect,$subject);
			$rowsuj = mysqli_fetch_array($resubj);

			echo $rowsuj['SUBJ_CODE']."|".$rowsuj['SUBJ_DESCRIPTION']."|".$rowsuj['YEARLEVEL']."|".$rowsuj['AY']."|".$row['id']."|".$row['room']."|".$row['section']."|".$row['days']."|".$row['time'];
	break;

	case 'approvedGrade':
			$sql = "UPDATE tbl_loads SET request = 'APPROVED' WHERE id = '".$_POST['id']."'";	
			$res = mysqli_query($connect, $sql);
			echo $res;
	break;


	case 'decline':
			$sql = "UPDATE tbl_loads SET request = 'DECLINED', remarks = '".$_POST['remarks']."' WHERE id = '".$_POST['id']."'";	
			$res = mysqli_query($connect, $sql);
			echo $res;
	break;
}

?>