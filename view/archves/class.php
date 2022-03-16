<?php 
		include '../../connection/connect.php';

		switch ($_POST['form']) {
			case 'loaduserTeacher':

					$sql = "SELECT * FROM tbl_users WHERE status = 0";
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
									<button class="btn btn-warning" onclick="restoreUser('<?php echo $row['id']; ?>')"> Restore</button>
								</td>
							</tr>
							<?php
						}	
			break;

            case 'restoreUser':
                    $sql = "UPDATE tbl_users SET status = 1 WHERE id = '".$_POST['id']."'";
                    $res = mysqli_query($connect, $sql);
                    echo $res;

					$info = "Successfully restored User";
					$remarks = "has restored account userID: ".$_POST['id'];
					$module = "Archives";
					$action = "UPDATE";
					insertLog($remarks,$module,$info,$action);	
            break;
		}

?> 