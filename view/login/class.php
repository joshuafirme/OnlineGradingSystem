  <?php 
    include '../../connection/connect.php';
    include '../../auditlog/auditfunction.php';

 
    switch ($_POST['form']) {
    	case 'LogInChck':

		        $accountno = mysqli_real_escape_string($connect, $_POST['accountno']);
		        $password = mysqli_real_escape_string($connect, $_POST['password']);

		        $sql = "SELECT * FROM tbl_users WHERE email = '".$accountno."'";
		        $res = mysqli_query($connect, $sql);
		        $row = mysqli_fetch_array($res);

		        if (mysqli_num_rows($res)) {
		        	if ($row['status'] == '1') {
			        	if (password_verify($password, $row['password'])) {

						        $userID = $row['userID'];
								$accountno1 = $row['accountno'];
								$fname = $row['fname'];
								$mname = $row['mname'];
								$lname = $row['lname'];
								$contact = $row['contact'];
								$user_role = $row['user_role'];
								$user_avatar = $row['user_avatar'];
								$account_type = $row['account_type'];

								$_SESSION['userID'] = $userID;
								$_SESSION['accountno'] = $accountno1;
								$_SESSION['fname'] = $fname;
								$_SESSION['mname'] = $mname;
								$_SESSION['lname'] = $lname;
								$_SESSION['contact'] = $contact;
								$_SESSION['user_role'] = $user_role;
								$_SESSION['user_avatar'] = $user_avatar;
								$_SESSION['account_type'] = $account_type;

								$_SESSION['address'] = $row['address'];
								$_SESSION['fax_no'] = $row['fax_no'];
								$_SESSION['tel_no'] = $row['tel_no'];
								$_SESSION['tin_no'] = $row['tin_no'];

						$info = "Successfully Login | Redirecting to Dashboard";
						$remarks = $accountno." has been connected";
						$module = "LOGIN";
						$action = "LOGIN";

						insertLog($remarks,$module,$info,$action);	
								?>
								<script type="text/javascript">
									window.location.replace("index.php?url=profile");
								</script>
								<?php
			        	} else {

			        	echo "You Enter Wrong Password";	

						$info = "Failed to Login | Redirecting to login page";
						$remarks = $_POST['accountno']." , incorrect Password";
						$module = "LOGIN";
						$action = "LOGIN";
						insertLog($remarks,$module,$info,$action);		

			        	}
		        	} else {
		        		echo "This account: <font color='yellow'>".$accountno."</font> is Deactivate please contact administrator.";
		        	}

		        } else {

		        	echo "This email: <font color='yellow'>".$accountno."</font> is not registered.";

					$info = "Failed to Login | Redirecting to login page";
					$remarks = $accountno." , email is not registered";
					$module = "LOGIN";
					$action = "LOGIN";
					insertLog($remarks,$module,$info,$action);
									

		        }
    		break;

    }
?>