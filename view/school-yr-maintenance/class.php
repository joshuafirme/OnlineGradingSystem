 <?php 

include '../../connection/connect.php';

switch ($_POST['form']) {
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
	case 'managegrade':
					$sql = "SELECT A.USERID ,A.quaterly_final, B.quaterly_final, C.quaterly_final, D.quaterly_final, A.status, A.ST_SUBJID FROM `tbl_studload_qt1` AS A LEFT JOIN `tbl_studload_qt2` AS B ON A.SUBJ_ID = B.SUBJ_ID LEFT JOIN `tbl_studload_qt3` AS C ON B.SUBJ_ID = C.SUBJ_ID LEFT JOIN `tbl_studload_qt4` AS D ON C.SUBJ_ID = D.SUBJ_ID WHERE A.SUBJ_ID = '".$_POST['id']."' AND A.INSTRUCTOR_ID = '".$_POST['id2']."' GROUP BY A.USERID";
					$res = mysqli_query($connect, $sql);
					while ($row = mysqli_fetch_array($res)) {

						if ($row[5] == 1) {

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
						</tr>
						<?php
						}
					}
	break;


	case 'school_yr_maintenance':
			$sql = "SELECT AC_YR, SEMESTER FROM tbl_erecords";
			$res = mysqli_query($connect, $sql);
			$arr_temp = [];
			while ($row = mysqli_fetch_array($res)) {

				$sem = $row['SEMESTER'] == 'First'  ? '1st' : '2nd';
				$to_push = $row['AC_YR'] . $sem;

				if (!in_array($to_push, $arr_temp)) {
				?>
				<tr>
					<td style="text-align: center;">
					<?php
						echo $row['AC_YR'] . " " . $sem . " " . ' Term';
					?>
					</td>
					<td style="text-align: center;"><a class="btn btn-info" href="index.php?url=school_yr_maintenance&sy=<?php echo $row['AC_YR'] ?>&term=<?php echo $sem ?>"> View</a></td>
				</tr>
				<?php
				array_push($arr_temp, $to_push);
				}
			}
	break;

	case 'loadInstructors':
		$sql = "SELECT * FROM tbl_loads WHERE academicyear = '".$_POST['sy']."' AND yearlevel = '".$_POST['term']."'";
	
		$res = mysqli_query($connect, $sql);
		

		while ($row = mysqli_fetch_array($res)) {
			
			$count = "SELECT COUNT(ST_SUBJID) FROM tbl_studload_qt1 WHERE SUBJ_ID = '".$row['SUBJ_ID']."' AND section = '".$row['section']."' AND INSTRUCTOR_ID = '".$row['userID']."'";	
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
			<!--	<td style="text-align: center;">
				<?php 
				//echo $rowcount[0];
				?></td>-->
				<td style="text-align: center;"><button class="btn btn-info" onclick="viewManageGrade('<?php echo $row['SUBJ_ID']; ?>','<?php echo $row['userID']; ?>','<?php echo $row['section']; ?>');"><i class="fas fa-search"></i> Review Grades</button></td>
			</tr>
			<?php
			}
		}
	break;
}

?>