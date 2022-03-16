<?php 

    include '../../connection/connect.php';
    include '../../auditlog/auditfunction.php';


		switch ($_POST['form']) {

			case 'saveNewRole':
					$chckID = "SELECT max(id) FROM tbl_user_role ORDER BY id DESC LIMIT 1";
					$result = mysqli_query( $connect , $chckID );
					$row = mysqli_fetch_array($result);
					$genId = genId($row[0],"RID");

					$sql = "INSERT INTO tbl_user_role SET role_id = '".$genId."', role_name = '".$_POST['rolename']."', datecreated = NOW();";
					$res = mysqli_query($connect, $sql);

					$info = "Sucessfully Added ".$genId;
					$remarks = "has insert role ".$_POST['rolename'];
					$module = "USER ROLE";
					$action = "INSERT";
 					insertLog($remarks,$module,$info,$action);

					echo $res;

			break;

			case 'saveUpdateRole':
					$chck = "SELECT role_name FROM tbl_user_role WHERE role_id = '".$_POST['roleid']."'";
					$reschk = mysqli_query($connect, $chck);
					$row = mysqli_fetch_array($reschk);

					$sql = "UPDATE tbl_user_role SET role_name = '".$_POST['rolename']."' WHERE role_id = '".$_POST['roleid']."'";
					$res = mysqli_query($connect, $sql);
					echo $res;	

					$info = "Sucessfully UPDATE ".$_POST['roleid'];
					$remarks = "has Update From ".$row['role_name']." to ".$_POST['rolename'];
					$module = "USER ROLE";
					$action = "UPDATE";
 					insertLog($remarks,$module,$info,$action);
			break;

			case 'loaduserRole':	
			        $userID = $_SESSION['userID'];
			        $sqluserid = "SELECT user_role FROM tbl_users WHERE userID = '".$userID."'";
			        $resUser = mysqli_query($connect, $sqluserid);
			        $rowRole = mysqli_fetch_array($resUser);

			        $modules = "SELECT * FROM tbl_user_role WHERE role_id = '".$rowRole[0]."'";
			        $resmodule = mysqli_query($connect, $modules);
			        $rowmodule = mysqli_fetch_array($resmodule);

					$sql = "SELECT role_id, role_name, status FROM tbl_user_role";
					$res = mysqli_query($connect, $sql);
					while ($row= mysqli_fetch_array($res)) {
							?>
							<tr style="text-align: center;">
								<td><?php echo $row[0]; ?></td>
								<td><?php echo $row[1]; ?></td>
								<td><?php if ($row[2] == '1') {
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
	                                    		if ($rowmodule['editRole']==1) {
	                                    		?>
	                                        <a class="dropdown-item" href="javascript:void(0)" onclick="updateRole('<?php echo $row[0]; ?>');"><i class="fas fa-edit"></i> Edit</a>
	                                    		<?php
	                                    		}
	                                    	?>
	                                    	<?php 
	                                    		if ($rowmodule['viewPermissionRole']==1) {
	                                    		?>
	                                        <a class="dropdown-item" href="javascript:void(0)" onclick="loadAccessPermission('<?php echo $row[0]; ?>');"><i class="fas fa-unlock"></i> Permission</a>
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

			case 'loadroleInfo':
					$sql = "SELECT status, role_id, role_name  FROM tbl_user_role WHERE role_id = '".$_POST['roleid']."'";
					$res = mysqli_query($connect, $sql);
					$row = mysqli_fetch_array($res);
					echo $row[0]."|".$row[1]."|".$row[2];
			break;

			case 'saveUserAccessPermission':
				$sql = "UPDATE tbl_user_role SET viewdashboard = '".$_POST['viewdashboard']."', dashboard_total_student = '".$_POST['dashboard_total_student']."', dashboard_total_teacher = '".$_POST['dashboard_total_teacher']."', dashboard_announcement = '".$_POST['dashboard_announcement']."', dashboard_add_announcement = '".$_POST['dashboard_add_announcement']."', account = '".$_POST['account']."', user_role = '".$_POST['user_role']."', auditlog = '".$_POST['auditlog']."', addnewUser = '".$_POST['addnewUser']."', editUser = '".$_POST['editUser']."', deleteUser = '".$_POST['deleteUser']."', addnewRole = '".$_POST['addnewRole']."', editRole = '".$_POST['editRole']."', deleteRole = '".$_POST['deleteRole']."', viewUsersRole = '".$_POST['viewUsersRole']."' , viewPermissionRole = '".$_POST['viewPermissionRole']."' , ar_origin_form_btn = '".$_POST['ar_origin_form_btn']."', ar_evaluation_form_btn = '".$_POST['ar_evaluation_form_btn']."', ar_review_button = '".$_POST['ar_review_button']."', ar_approval_modal_btns = '".$_POST['ar_approval_modal_btns']."', ar_request_survey_btn = '".$_POST['ar_request_survey_btn']."', re_approval = '".$_POST['re_approval']."'
				WHERE role_id = '".$_POST['getgroupid']."'";
				$res = mysqli_query($connect, $sql);
				echo $sql;
			break;
		}
?>