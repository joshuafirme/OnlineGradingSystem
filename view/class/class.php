<?php 

include '../../connection/connect.php';

switch ($_POST['form']) {
	case 'loaddays':
			$sql = "SELECT * FROM tbl_days";
			$res = mysqli_query($connect, $sql);		
			?>
			<option value="">~ SELECT ~</option>
			<?php
			while ($row = mysqli_fetch_array($res)) {
			?>
				<option value="<?php echo $row['days'] ?>"><?php echo $row['days'] ?></option>
			<?php	
			}
	break;

	case 'submitGrade':
			$sql = "UPDATE tbl_loads SET request = 'PENDING' WHERE id = '".$_POST['id']."'";	
			$res = mysqli_query($connect, $sql);
			echo $res;
	break;


	case 'savegrade':
			$sql = "UPDATE tbl_studload SET 1G = '".$_POST['fG']."' ,2G = '".$_POST['SndG']."',3G = '".$_POST['thrdG']."' ,4G = '".$_POST['fthG']."' WHERE ST_SUBJID = '".$_POST['id']."'";
			$update = mysqli_query($connect,$sql);	

			echo $sql;
	break;


	case 'managegrade':
			$sql = "SELECT * FROM `tbl_studload` WHERE SUBJ_ID = '".$_POST['id']."' AND INSTRUCTOR_ID = '".$_POST['id2']."'";
			$res = mysqli_query($connect, $sql);
			while ($row = mysqli_fetch_array($res)) {

				$names = "SELECT * FROM tbl_users WHERE userID = '".$row['USERID']."'";
				$resnames = mysqli_query($connect, $names);
				$rownames = mysqli_fetch_array($resnames);

				$avg = $row['1G'] + $row['2G'] + $row['3G'] + $row['4G'];

				$total = $avg / 4;
				?>
				<tr style="text-align: center;" >
					<td >
						<?php 
							echo $rownames['lname']." ".$rownames['fname']." ".$rownames['mname'];
						?>
						<input type="hidden" class="form-control table-input" value="<?php echo $row['ST_SUBJID']; ?>" readonly>
					</td>
					<td>
						<input type="number" max="3" class="form-control table-input" value="<?php echo $row['1G']; ?>" readonly>
					</td>
					<td>
						<input type="number" max="3" class="form-control table-input" value="<?php echo $row['2G']; ?>" readonly>
					</td>
					<td>
						<input type="number" max="3" class="form-control table-input" value="<?php echo $row['3G']; ?>" readonly>
					</td>
					<td>
						<input type="number" max="3" class="form-control table-input" value="<?php echo $row['4G']; ?>" readonly> 
					</td>
					<td>
						<?php echo $total; ?>
					</td>
					<td style="text-align: center;"> 
						<?php
						if ($total == "") {
							echo '';
						} else if($total < 75) {
							echo 'FAILED';
						} else if($total > 74){
							echo 'PASSED';
						}

					?></td>
				</tr>
				<?php
			}
	break;

	case 'viewclasslist':
			$sql = "SELECT * FROM `tbl_studload_qt1` WHERE SUBJ_ID = '".$_POST['id']."' AND INSTRUCTOR_ID = '".$_POST['id2']."'";
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
							echo $rownames['userID'];
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
			$sql = "SELECT * FROM tbl_loads WHERE status = 1";
			$res = mysqli_query($connect, $sql);
			while ($row = mysqli_fetch_array($res)) {
				?>
				<tr>
					<td style="text-align: center;"><?php echo $row['SUBJ_ID']; ?></td>
					<td style="text-align: center;"><?php
					$subject = "SELECT SUBJ_CODE FROM subject WHERE SUBJ_ID = '".$row['SUBJ_ID']."'";
					$resubj = mysqli_query($connect, $subject);
					$rsubj = mysqli_fetch_array($resubj);
					echo $rsubj[0];
					?>
					</td>
					<td style="text-align: center;"><?php
					$name = "SELECT CONCAT(fname,' ',mname,' ',lname) as name FROM tbl_users WHERE userID = '".$row['userID']."'";
					$nres = mysqli_query($connect, $name);
					$rname = mysqli_fetch_array($nres);
					echo ucwords($rname[0]);
					?>
					</td>
					<td style="text-align: center;"><?php 
					if ($row['days'] == '') {
						?>
						<a href="#" onclick="addschedule('<?php echo $row['id']; ?>');"> Add Schedule</a>
						<?php
					} else {
						?>
						<a href="#" onclick="addschedule('<?php echo $row['id']; ?>');"><?php echo ucwords($row['days']."/".$row['time']);  ?></a>
						<?php
					}
					?></td>
					<td><?php 
					$room = "SELECT ROOM_NAME FROM room WHERE ROOM_ID = '".$row['room']."'";
					$resroom = mysqli_query($connect, $room);
					$zxc = mysqli_fetch_array($resroom);
					echo ucwords($zxc['ROOM_NAME']); ?></td>
					<td>
						<?php echo $row['section']; ?>
					</td>
					<td style="text-align: center;"><a href="#class" onclick="viewclasslist('<?php echo $row['SUBJ_ID']; ?>','<?php echo $row['userID']; ?>');">
					<?php 
					$count = "SELECT COUNT(ST_SUBJID) FROM tbl_studload_qt1 WHERE SUBJ_ID = '".$row['SUBJ_ID']."' AND INSTRUCTOR_ID = '".$row['userID']."'";	
					$rescount = mysqli_query($connect, $count);
					$rowcount = mysqli_fetch_array($rescount);
					echo $rowcount[0];
					?>
					</a></td>
					<td>
						<button class="btn btn-danger" onclick="removeSchedule('<?php echo $row['id']; ?>')"><i class="fas fa-trash-alt"> Remove</i></button>
					</td>
<!-- 					<td><button class="btn btn-info" onclick="viewManageGrade('<?php echo $row['SUBJ_ID']; ?>','<?php echo $row['userID']; ?>');"><i class="fas fa-edit"></i> Manage Grade</button></td>
					<td style="text-align: center;">
					<?php 
					if ($row['request'] == '') {
					?>
    				 <button type="button" class="btn btn-warning" onclick="submitGrade('<?php echo $row['id']; ?>');"> <i class="fa fa-paper-plane"></i> Submit to principal</button>
					<?php
					} else {
						echo "<label class='fas fa-check bg-success rounded text-white'>Submitted</label>";
					}
						?>
					</td> -->
				</tr>
				<?php
			}
	break;

	case 'removeSchedule':
			$sql = "UPDATE tbl_loads SET status = 0 WHERE id = '".$_POST['id']."'";
			$res = mysqli_query($connect ,$sql);
			echo $res;
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

	case 'saveschedule':
			$sql = "UPDATE tbl_loads SET days = '".$_POST['days']."', time = '".$_POST['time']."', room = '".$_POST['room']."', section = '".$_POST['section']."',yearlevel = '".$_POST['yearlevel']."', academicyear = '".$_POST['academicyear']."' WHERE id = '".$_POST['id']."'";	
			$res = mysqli_query($connect, $sql);
			echo $res;
	break;
}

?>