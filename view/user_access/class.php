<?php 
include '../../connection/connect.php';
include '../../auditlog/auditfunction.php';

	switch ($_POST['form']) {
		case 'userInfo':
				$sql = "SELECT * FROM tbl_users WHERE userID = '".$_POST['userID']."'";
				$res = mysqli_query($connect, $sql);
				$row = mysqli_fetch_array($res);

				echo $row['fname']."|".$row['mname']."|".$row['lname']."|".$row['birthdate']."|".$row['contact']."|".$row['address']."|".$row['user_role']."|".$row['email'];
		break;

		case 'SaveUpdateUser':
				$data = "SELECT * FROM tbl_users WHERE userID = '".$_POST['userID']."'";
				$res = mysqli_query($connect, $data);
				$row = mysqli_fetch_array($res);


/*				if ($_POST['password_edit'] == "") {

				} else {
					$sqlpassupdate = "UPDATE tbl_users SET password = '".password_hash($_POST['password_edit'], PASSWORD_DEFAULT)."' WHERE userID = '".$_POST['userID']."'"; 	
					$resupdatepass = mysqli_query($connect, $sqlpassupdate);

					echo $sqlpassupdate;
				}
*/
				$sql = "UPDATE tbl_users SET fname = '".$_POST['fname']."', mname ='".$_POST['mname']."', lname = '".$_POST['lname']."', birthdate ='".$_POST['birthdate']."', contact = '".$_POST['contact']."', address = '".$_POST['address']."', email ='".$_POST['email']."', user_role = '".$_POST['userrole']."' WHERE userID = '".$_POST['userID']."'"; 	
				$res = mysqli_query($connect, $sql);

				$remarks = '';
				$remarks =  'Update user account <font color="blue">'.$_POST['userID'].'</font><br>';
				$remarks .= 'User Role: <font color="red">'.$row['fname'].'</font> To: <font color="green">'.$_POST['fname'].'</font><br>';
				$remarks .= 'User Role: <font color="red">'.$row['mname'].'</font> To: <font color="green">'.$_POST['mname'].'</font><br>';
				$remarks .= 'User Role: <font color="red">'.$row['lname'].'</font> To: <font color="green">'.$_POST['lname'].'</font><br>';
				$remarks .= 'User Role: <font color="red">'.$row['birthdate'].'</font> To: <font color="green">'.$_POST['birthdate'].'</font><br>';
				$remarks .= 'User Role: <font color="red">'.$row['contact'].'</font> To: <font color="green">'.$_POST['contact'].'</font><br>';
				$remarks .= 'User Role: <font color="red">'.$row['address'].'</font> To: <font color="green">'.$_POST['address'].'</font><br>';
				$remarks .= 'User Role: <font color="red">'.$row['yearlevel'].'</font> To: <font color="green">'.$_POST['yearlevel'].'</font><br>';
				$remarks .= 'User Role: <font color="red">'.$row['email'].'</font> To: <font color="green">'.$_POST['email'].'</font><br>';
				$remarks .= 'User Role: <font color="red">'.$row['user_role'].'</font> To: <font color="green">'.$_POST['userrole'].'</font><br>';
				$remarks .= 'User Role: <font color="red">'.$row['accountno'].'</font> To: <font color="green">'.$_POST['accountno'].'</font><br>';
/*				$remarks .= 'Account Type: <font color="red">'.$row['account_type'].'</font> To: <font color="green">'.$_POST['account_type'].'</font><br>';*/

				$info = "Successfully Update User";				
				$module = "USER ACCOUNT";
				$action = "UPDATE";
				insertLog($remarks,$module,$info,$action);	

				echo $res;
		break;

		case 'loaduserTeacher':

				$sql = "SELECT * FROM tbl_users WHERE status = '1'";
				$res = mysqli_query($connect, $sql);
				while ($row= mysqli_fetch_array($res)) {
						?>
						<tr style="text-align: center;">
							<td><?php echo $row['userID']; ?></td>
							<td><img style="width: 80px; height: 80px; border-radius: 50%;" src="assets/images/users/<?php echo $row['user_avatar']; ?>"></td>
							<td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
							<td><?php 

								$rolename = "SELECT role_name FROM tbl_user_role WHERE role_id = '".$row['user_role']."'";
								$resname = mysqli_query($connect, $rolename);
								$rowname = mysqli_fetch_array($resname);
								echo ucwords($rowname['role_name']); ?></td>
									
							</td>
							<td><?php if ($row['status'] == '1') {
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

                                     <a class="dropdown-item" href="javascript:void(0)" onclick="updateUsers('<?php echo $row['userID']; ?>');"><i class="fas fa-edit"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0)" onclick="deleteUsers('<?php echo $row['userID']; ?>');"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </div>
                                </div>
							</td>
						</tr>
						<?php
					}	
		break;

/*		case 'loadusersTbldeactive':

		        $userID = $_SESSION['userID'];
		        $sqluserid = "SELECT user_role FROM tbl_users WHERE userID = '".$userID."'";
		        $resUser = mysqli_query($connect, $sqluserid);
		        $rowRole = mysqli_fetch_array($resUser);

		        $modules = "SELECT * FROM tbl_user_role WHERE role_id = '".$rowRole[0]."'";
		        $resmodule = mysqli_query($connect, $modules);
		        $rowmodule = mysqli_fetch_array($resmodule);


				$sql = "SELECT * FROM tbl_users WHERE status = '0'";
				$res = mysqli_query($connect, $sql);
				while ($row= mysqli_fetch_array($res)) {
						?>
						<tr style="text-align: center;">
							<td><?php echo $row['userID']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
<!-- 							<td><?php echo $row['position']; ?></td> -->
<!-- 							<td><?php 
								$groupname = mysqli_fetch_array(mysqli_query($connect,"SELECT groupname FROM tbl_group WHERE groupcode = '".$row['hierarchy']."' "));
								echo $groupname[0];
							?></td> -->
							<td><?php 
								$rolename = "SELECT role_name FROM tbl_user_role WHERE role_id = '".$row['user_role']."'";
								$resname = mysqli_query($connect, $rolename);
								$rowname = mysqli_fetch_array($resname);
								echo ucwords($rowname['role_name']); ?></td>
							<td><?php if ($row['status'] == '1') {
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
                                    	<?php 
                                    		if ($rowmodule['editUser'] == 1) {
                                    			?>
                                       			 <a class="dropdown-item" href="javascript:void(0)" onclick="updateUsers('<?php echo $row['userID']; ?>');"><i class="fas fa-edit"></i> Edit</a>
                                    			<?php
                                    		}
                                    	?>
                                    	<?php 
                                    		if ($rowmodule['editUser'] == 1) {
                                    			?>
											<a class="dropdown-item" href="javascript:void(0)"  onclick="restoreUser('<?php echo $row['userID']; ?>');"><i class="fas fa-redo-alt"></i> Restore</a>
                                    			<?php
                                    		}

                                    	?>
                                    </div>
                                </div>
							</td>
						</tr>
						<?php
					}	
			break;

*/


			case 'savenewUser':
					$sql = "SELECT email FROM tbl_users WHERE email = '".$_POST['email']."'";
					$res = mysqli_query($connect, $sql);
					if (mysqli_num_rows($res)) {
						 echo 0;
					} else {
					$checkname = "SELECT email FROM tbl_users WHERE fname = '".$_POST['fname']."' AND mname = '".$_POST['mname']."' AND lname = '".$_POST['lname']."'";
					$resname = mysqli_query($connect, $checkname);

						if (mysqli_num_rows($resname)) {
	 						echo 2;
						} else {
							$chckID = "SELECT max(id) FROM tbl_users ORDER BY id DESC LIMIT 1";
							$result = mysqli_query( $connect , $chckID );
							$row = mysqli_fetch_array($result);
							$genId = genId($row[0],"ACCOUNTNO");

							$insert = "INSERT INTO tbl_users SET userID = '".$genId."', fname = '".$_POST['fname']."', lname = '".$_POST['lname']."', mname = '".$_POST['mname']."', birthdate = '".$_POST['birthdate']."', contact = '".$_POST['contact']."', address = '".$_POST['address']."', user_role = '".$_POST['user_role']."',email = '".$_POST['email']."', password = '".password_hash($_POST['password'], PASSWORD_DEFAULT)."', status = 1";
							$resInsert = mysqli_query($connect, $insert) or die(mysqli_error($connect));

							$info = "Successfully Create New User";
							$remarks = "has created account:".$genId.", Type:".$_POST['account_type'].", Role:".$_POST['user_role']."";
							$module = "USER ACCOUNT";
							$action = "INSERT";
							insertLog($remarks,$module,$info,$action);	

							echo $resInsert;
						}
				}	
			break;	

			case 'loaduserRole':
					$sql = "SELECT * FROM tbl_user_role WHERE status = '1'";
					$res = mysqli_query($connect, $sql);
					?>
						<option value=""> ~ Select User Role ~</option>
					<?php
					while ($row = mysqli_fetch_array($res)) {
						?>
							<option value="<?php echo $row['role_id']; ?>"><?php echo $row['role_name']; ?></option>
						<?php
					}

			break;

			case 'loadhierar':
				$sql = "SELECT groupname,groupcode FROM tbl_group WHERE xdel = '0' ORDER BY groupname ASC";
					$res = mysqli_query($connect, $sql);
					?>
						<option value=""> ~ Select Hierarchy Code ~</option>
					<?php
					while ($row = mysqli_fetch_array($res)) {
						?>
							<option value="<?php echo $row['groupcode']; ?>"><?php echo ucfirst($row['groupname']); ?></option>
						<?php
					}
			break;

            case 'deleteUser':
                    $sql = "UPDATE tbl_users SET status = '0' WHERE userID = '".$_POST['id']."'";
                    $res = mysqli_query($connect, $sql);
                    echo $res;

					$info = "Successfully Delete User";
					$remarks = "has deleted account userID: ".$_POST['id'];
					$module = "USER ACCOUNT";
					$action = "DELETE";
					insertLog($remarks,$module,$info,$action);	
            break;

            case 'restoreUser':
                    $sql = "UPDATE tbl_users SET status = '1' WHERE userID = '".$_POST['id']."'";
                    $res = mysqli_query($connect, $sql);
                    echo $res;

					$info = "Successfully restore User";
					$remarks = "has restored account userID: ".$_POST['id'];
					$module = "USER ACCOUNT";
					$action = "UPDATE";
					insertLog($remarks,$module,$info,$action);	
            break;
	}
?>