<?php 
		include '../../connection/connect.php';


		switch ($_POST['form']) {

			case 'studload':
			$sql = "SELECT * FROM tbl_studload_qt1 WHERE USERID = '".$_POST['id']."' AND ENROLLED_ID = '".$_POST['eid']."' AND status = 1";
			$res = mysqli_query($connect, $sql);

			while ($row = mysqli_fetch_array($res)) {
					?>
					<tr>
						<td style="text-align: center;"><?php
						$name = "SELECT CONCAT(fname,' ',mname,' ',lname) as name FROM tbl_users WHERE userID = '".$row['INSTRUCTOR_ID']."'";
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
						<td><?php 
						$room = "SELECT ROOM_NAME FROM room WHERE ROOM_ID = '".$row['room']."'";
						$resroom = mysqli_query($connect, $room);
						$zxc = mysqli_fetch_array($resroom);
						echo ucwords($zxc['ROOM_NAME']); ?></td>
						<td style="text-align: center;"><?php 
						if ($row['days'] == '') {
							?>
							--
							<?php
						} else {
							echo ucwords($row['days']."/".$row['time']); 
						}
						?></td>
						<td style="text-align: center;"><?php 
							$yrlevel = "SELECT LEVEL FROM LEVEL WHERE YR_ID = '".$row['yearlevel']."'";
							$resyr = mysqli_query($connect, $yrlevel);
							$rowyr = mysqli_fetch_array($resyr);

							echo $rowyr[0];
						?></td>
						<td style="text-align: center;"><?php 
							$unit = "SELECT * FROM subject WHERE SUBJ_ID = '".$row['SUBJ_ID']."'";
							$runit = mysqli_query($connect, $unit);
							$rowunit = mysqli_fetch_array($runit);
							echo $rowunit['UNIT'];
							?>
						</td>
					</tr>
					<?php
				}
			break;

			case 'enrollsubj':
					/*include '../../email/email.php';*/

					$chck = "SELECT * FROM tbl_studload_qt1 WHERE USERID = '".$_POST['userID']."' AND SUBJ_ID = '".$_POST['subj']."' AND academicyear = '".$_POST['academicyear']."'";
					$reschck = mysqli_query($connect, $chck);

					if (mysqli_num_rows($reschck)) {
						echo 0;
					} else {
						$email = "SELECT email,fname,mname,lname FROM tbl_users WHERE userID = '".$_POST['instructor']."'";
						$resemail = mysqli_query($connect, $email);
						$row = mysqli_fetch_array($resemail);

						$sql = "INSERT INTO tbl_studload_qt1 SET SUBJ_ID = '".$_POST['subj']."', INSTRUCTOR_ID = '".$_POST['instructor']."', USERID = '".$_POST['userID']."', room = '".$_POST['room']."', section = '".$_POST['section']."',yearlevel = '".$_POST['yearlevel']."',academicyear = '".$_POST['academicyear']."',days = '".$_POST['days']."',time = '".$_POST['time']."',ENROLLED_ID = '".$_POST['eid']."', datecreated = NOW(), status = 1";
						$res = mysqli_query($connect, $sql);

						$sql2 = "INSERT INTO tbl_studload_qt2 SET SUBJ_ID = '".$_POST['subj']."', INSTRUCTOR_ID = '".$_POST['instructor']."', USERID = '".$_POST['userID']."', room = '".$_POST['room']."', section = '".$_POST['section']."',yearlevel = '".$_POST['yearlevel']."',academicyear = '".$_POST['academicyear']."',days = '".$_POST['days']."',time = '".$_POST['time']."',ENROLLED_ID = '".$_POST['eid']."', datecreated = NOW(), status = 1";
						$res2 = mysqli_query($connect, $sql2);

						$sql3 = "INSERT INTO tbl_studload_qt3 SET SUBJ_ID = '".$_POST['subj']."', INSTRUCTOR_ID = '".$_POST['instructor']."', USERID = '".$_POST['userID']."', room = '".$_POST['room']."', section = '".$_POST['section']."',yearlevel = '".$_POST['yearlevel']."',academicyear = '".$_POST['academicyear']."',days = '".$_POST['days']."',time = '".$_POST['time']."',ENROLLED_ID = '".$_POST['eid']."', datecreated = NOW(), status = 1";
						$res3 = mysqli_query($connect, $sql3);

						$sql4 = "INSERT INTO tbl_studload_qt4 SET SUBJ_ID = '".$_POST['subj']."', INSTRUCTOR_ID = '".$_POST['instructor']."', USERID = '".$_POST['userID']."', room = '".$_POST['room']."', section = '".$_POST['section']."',yearlevel = '".$_POST['yearlevel']."',academicyear = '".$_POST['academicyear']."',days = '".$_POST['days']."',time = '".$_POST['time']."',ENROLLED_ID = '".$_POST['eid']."', datecreated = NOW(), status = 1";
						$res4 = mysqli_query($connect, $sql4);


						$checkScore = "SELECT * FROM tbl_highestpossible_score WHERE SUBJ_ID = '".$_POST['subj']."', INSTRUCTOR_ID = '".$_POST['instructor']."', section = '".$_POST['section']."',yearlevel = '".$_POST['yearlevel']."',academicyear = '".$_POST['academicyear']."'";
						$resScore = mysqli_query($connect, $checkScore);

						if (mysqli_num_rows($resScore)) {

						}  else {
							$sql5 = "INSERT INTO tbl_highestpossible_score SET SUBJ_ID = '".$_POST['subj']."', INSTRUCTOR_ID = '".$_POST['instructor']."', section = '".$_POST['section']."',yearlevel = '".$_POST['yearlevel']."',academicyear = '".$_POST['academicyear']."'"; 
							$res5 = mysqli_query($connect, $sql5);

							$sql6 = "INSERT INTO tbl_highestpossible_score_2 SET SUBJ_ID = '".$_POST['subj']."', INSTRUCTOR_ID = '".$_POST['instructor']."', section = '".$_POST['section']."',yearlevel = '".$_POST['yearlevel']."',academicyear = '".$_POST['academicyear']."'"; 
							$res6 = mysqli_query($connect, $sql6);

							$sql7 = "INSERT INTO tbl_highestpossible_score_3 SET SUBJ_ID = '".$_POST['subj']."', INSTRUCTOR_ID = '".$_POST['instructor']."', section = '".$_POST['section']."',yearlevel = '".$_POST['yearlevel']."',academicyear = '".$_POST['academicyear']."'"; 
							$res7 = mysqli_query($connect, $sql7);

							$sql8 = "INSERT INTO tbl_highestpossible_score_4 SET SUBJ_ID = '".$_POST['subj']."', INSTRUCTOR_ID = '".$_POST['instructor']."', section = '".$_POST['section']."',yearlevel = '".$_POST['yearlevel']."',academicyear = '".$_POST['academicyear']."'"; 
							$res8 = mysqli_query($connect, $sql8);
						}

						/*emailnotifsubjenroll($row[0],$_POST['userID'],$row['fname'],$row['mname'],$row['lname'],$url);*/
						echo $res;
					}
			break;

			case 'loadclass':
					$sql = "SELECT * FROM tbl_loads WHERE academicyear = '".$_POST['academicyear']."' AND status = 1";
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
								-- 
								<?php
							} else {
								echo ucwords($row['days']."/".$row['time']); 
							}
							?></td>
							<td><?php 
							$room = "SELECT ROOM_NAME FROM room WHERE ROOM_ID = '".$row['room']."'";
							$resroom = mysqli_query($connect, $room);
							$zxc = mysqli_fetch_array($resroom);
							echo ucwords($zxc['ROOM_NAME']); ?></td>
							<td style="text-align: center;">
								<?php 
								$count = "SELECT COUNT(ST_SUBJID) FROM tbl_studload_qt1 WHERE SUBJ_ID = '".$row['SUBJ_ID']."' AND INSTRUCTOR_ID = '".$row['userID']."' AND section = '".$row['section']."' AND academicyear = '".$row['academicyear']."' AND yearlevel = '".$row['yearlevel']."'";	
								$rescount = mysqli_query($connect, $count);
								$rowcount = mysqli_fetch_array($rescount);
								echo $rowcount[0];
								?>
							</td>
							<td>
								<?php 
									$chck = "SELECT * FROM tbl_studload_qt1 WHERE SUBJ_ID = '".$row['SUBJ_ID']."' AND USERID = '".$_POST['id']."' AND INSTRUCTOR_ID = '".$row['userID']."'";
									$reschck = mysqli_query($connect, $chck);
								if (mysqli_num_rows($reschck)) {
							?>
								<a href="javascript:void(0)" class="btn btn-danger"onclick="droppedsubj('<?php echo $row['SUBJ_ID']; ?>','<?php echo $row['userID']; ?>')"><i class="fas fa-times" ></i> Remove</a>
							<?php
									} else {
							?>
								<a href="javascript:void(0)" class="btn btn-success" onclick="enrollsubj('<?php echo $row['SUBJ_ID']; ?>','<?php echo $row['userID']; ?>','<?php echo $row['room']; ?>','<?php echo $row['section']; ?>','<?php echo $row['yearlevel']; ?>','<?php echo $row['academicyear']; ?>','<?php echo $row['days']; ?>','<?php echo $row['time']; ?>')"><i class="fas fa-plus"></i> Add</a>
							<?php
									}
								?> 
							</td>
						</tr>
						<?php
					}
			break;

			case 'droppedsubj':
					$sql = "DELETE FROM tbl_studload_qt1 WHERE SUBJ_ID = '".$_POST['subj']."' AND INSTRUCTOR_ID = '".$_POST['instructor']."'AND  USERID = '".$_POST['userID']."' AND ENROLLED_ID = '".$_POST['eid']."'";
					$res = mysqli_query($connect, $sql); 

					$sql2 = "DELETE FROM tbl_studload_qt2 WHERE SUBJ_ID = '".$_POST['subj']."' AND INSTRUCTOR_ID = '".$_POST['instructor']."'AND  USERID = '".$_POST['userID']."' AND ENROLLED_ID = '".$_POST['eid']."'";
					$res2 = mysqli_query($connect, $sql2); 

					$sql3 = "DELETE FROM tbl_studload_qt3 WHERE SUBJ_ID = '".$_POST['subj']."' AND INSTRUCTOR_ID = '".$_POST['instructor']."'AND  USERID = '".$_POST['userID']."' AND ENROLLED_ID = '".$_POST['eid']."'";
					$res3 = mysqli_query($connect, $sql3); 

					$sql4 = "DELETE FROM tbl_studload_qt4 WHERE SUBJ_ID = '".$_POST['subj']."' AND INSTRUCTOR_ID = '".$_POST['instructor']."'AND  USERID = '".$_POST['userID']."' AND ENROLLED_ID = '".$_POST['eid']."'";
					$res4 = mysqli_query($connect, $sql4); 

					echo $res;
			break;

			case 'loaduserinfo':
				$sql = "SELECT * FROM tbl_users WHERE userID = '".$_POST['id']."'";
				$res = mysqli_query($connect, $sql);
				$row = mysqli_fetch_array($res);

				echo $row['userID']."|".$row['fname']." ".$row['mname']." ".$row['lname'];
			break;

			case 'loadrecords':
				$sql = "SELECT * FROM tbl_erecords WHERE userID = '".$_POST['id']."'";
				$res = mysqli_query($connect, $sql);
				while ($row = mysqli_fetch_array($res)) {
				?>
				<tr>
					<td style="text-align: center;"><?php echo $row['SEMESTER'] ?></td>
					<td style="text-align: center;"><?php
						$yrlvl = "SELECT LEVEL, LEVEL_DESCRIPTION FROM level WHERE YR_ID = '".$row['YR_ID']."'";
						$ry = mysqli_query($connect, $yrlvl);
						$rowy = mysqli_fetch_array($ry);

						echo $rowy[0]." / ".$rowy[1];
						?>
					</td>
					<td style="text-align: center;"><?php echo $row['AC_YR'] ?></td>
					<td><?php 
						$yrlvl = "SELECT DEPARTMENT_NAME, DEPARTMENT_DESC FROM department WHERE DEPT_ID = '".$row['DEPT_ID']."'";
						$ry = mysqli_query($connect, $yrlvl);
						$rowy = mysqli_fetch_array($ry);

						echo $rowy[0]." / ".$rowy[1];
					?></td>
					<td style="text-align: center;">
						<?php 
								$count = "SELECT COUNT(ENROLLED_ID) FROM `tbl_studload_qt1` WHERE ENROLLED_ID = '".$row['ENROLLED_ID']."'";	
								$rescount = mysqli_query($connect, $count);
								$rowcount = mysqli_fetch_array($rescount);
								echo $rowcount[0];
						?>
					</td>
					<td style="text-align: center;">
						<?php 
								$check = "SELECT * FROM `tbl_studload_qt1` WHERE ENROLLED_ID = '".$row['ENROLLED_ID']."'";	
								$rescheck = mysqli_query($connect, $check);
								$qty = 0;
								while ($rowcheck = mysqli_fetch_array($rescheck)) {
									$sum = "SELECT UNIT FROM subject WHERE SUBJ_ID = '".$rowcheck['SUBJ_ID']."'";
									$resum = mysqli_query($connect, $sum);
									while ($rowsum = mysqli_fetch_assoc($resum)) {
										$qty += $rowsum['UNIT'];
									}
								}
								echo $qty;
						?>
					</td> 
					<td style="text-align: center;"><?php echo $row['DATE_ENROLLED'] ?></td>
					<td style="text-align: center;"><?php if ($row['STATUS'] == '1') {
						echo "<span class='label bg-success'>Active</span>";
					} else {
						echo "<span class='label bg-danger'>In-active</span>";
					} ?></td>
					<td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-settings"></i>
                            </button>
                            <div class="dropdown-menu">
							<a class="dropdown-item" href="javascript:void(0)" onclick="enrollmodal('<?php echo $row['ENROLLED_ID']; ?>','<?php echo $row['SEMESTER']; ?>','<?php echo $row['DEPT_ID']; ?>','<?php echo $row['AC_YR']; ?>');"><i class="fas fa-book"></i> Enrolled Subjects</a>
                             <a class="dropdown-item" href="javascript:void(0)" onclick="updateerecords('<?php echo $row['ENROLLED_ID']; ?>');"><i class="fas fa-edit"></i> Edit</a>
							<a class="dropdown-item" href="javascript:void(0)" onclick="deleterecords('<?php echo $row['ENROLLED_ID']; ?>');"><i class="fas fa-trash-alt"></i> Delete</a>
                            </div>
                        </div>
					</td>
				</tr>
				<?php
				}
			break;

			case 'updateerecords':
					$sql = "SELECT * FROM tbl_erecords WHERE ENROLLED_ID = '".$_POST['id']."'";
					$res = mysqli_query($connect, $sql);
					$row = mysqli_fetch_array($res);

					echo $row['YR_ID']."|".$row['AC_YR']."|".$row['DEPT_ID']."|".$row['SEMESTER'];
			break;

			case 'deleterecords':
					$sql ="DELETE FROM tbl_erecords WHERE ENROLLED_ID = '".$_POST['id']."'";
					$res = mysqli_query($connect, $sql);

					$sql1 ="DELETE FROM tbl_studload_qt1 WHERE ENROLLED_ID = '".$_POST['id']."'";
					$res1 = mysqli_query($connect, $sql1);

					$sql2 ="DELETE FROM tbl_studload_qt2 WHERE ENROLLED_ID = '".$_POST['id']."'";
					$res2 = mysqli_query($connect, $sql2);

					$sql3 ="DELETE FROM tbl_studload_qt3 WHERE ENROLLED_ID = '".$_POST['id']."'";
					$res3 = mysqli_query($connect, $sql3);

					$sql4 ="DELETE FROM tbl_studload_qt4 WHERE ENROLLED_ID = '".$_POST['id']."'";
					$res4 = mysqli_query($connect, $sql4);

					echo $res1;
			break;

			case 'enrollstudent':
				$sql = "SELECT * FROM tbl_users WHERE userId = '".$_POST['id']."'";
				$res = mysqli_query($connect, $sql);
				$row = mysqli_fetch_array($res);
				echo $row['accountno']."|".ucwords($row['fname']." ".$row['mname']." ".$row['lname']);

			break;


			case 'saveenroll':
				$chck = "SELECT * FROM tbl_erecords WHERE userID = '".$_POST['id']."' AND AC_YR = '".$_POST['academicyear']."' AND SEMESTER = '".$_POST['semester']."'";
				$reschck = mysqli_query($connect, $chck);
				if (mysqli_num_rows($reschck)) {
					echo 0;
				} else {
					$sql = "INSERT INTO tbl_erecords SET SEMESTER = '".$_POST['semester']."', AC_YR = '".$_POST['academicyear']."', DEPT_ID = '".$_POST['department']."', YR_ID = '".$_POST['yearlevel']."', userID = '".$_POST['id']."',status = 1, DATE_ENROLLED = NOW();";
					$res = mysqli_query($connect, $sql);
					echo $res;
				}
			break;

			case 'saveupdateenroll':
/*				$chck = "SELECT * FROM tbl_erecords WHERE userID = '".$_POST['id']."' AND AC_YR = '".$_POST['academicyear']."' AND SEMESTER = '".$_POST['semester']."'";
				$reschck = mysqli_query($connect, $chck);
				if (mysqli_num_rows($reschck)) {
					echo 0;
				} else {*/
					$sql = "UPDATE tbl_erecords SET SEMESTER = '".$_POST['semester']."', AC_YR = '".$_POST['academicyear']."', DEPT_ID = '".$_POST['department']."', YR_ID = '".$_POST['yearlevel']."' WHERE USERID = '".$_POST['id']."'";
					$res = mysqli_query($connect, $sql);
					echo $res;
	/*			}*/
			break;

			case 'loadyearlevel':
				$sql = "SELECT * FROM level WHERE status = 1";
				$res = mysqli_query($connect, $sql);
				?>
				<option value="">~ SELECT ~</option>
				<?php
				while ($row = mysqli_fetch_array($res)) {
					?>
					<option value="<?php echo $row['YR_ID']; ?>"><?php echo $row['LEVEL']; ?></option>
					<?php
					}	
			break;

			case 'department':
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
		}
?>