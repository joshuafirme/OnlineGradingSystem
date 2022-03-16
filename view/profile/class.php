<?php 
    include '../../connection/connect.php';
    include '../../auditlog/auditfunction.php';

	switch ($_POST['form']) {
		case 'loadprofile':
				$userID = $_SESSION['userID'];

				$sql = "SELECT * FROM tbl_users WHERE userID = '".$userID."'";
				$res = mysqli_query($connect, $sql);
				$row = mysqli_fetch_array($res);

				$names = $row['fname']." ".$row['mname']." ".$row['lname'];
				$avatar = '<img src="assets/images/users/'.$row['user_avatar'].'"  style="width: 320px; height: 280px; border-radius: 50%;" />';


				echo $row['fname']."|".$row['mname']."|".$row['lname']."|".$row['birthdate']."|".$row['contact']."|".$row['address']."|".$row['account_type']."|".$row['yearlevel']."|".$row['user_role']."|".$row['email']."|".$row['userID']."|".$row['userID']."|".$avatar;
				
		break;

		case 'saveInfo':
				$userID = $_SESSION['userID'];

				$sql = "UPDATE tbl_users SET fname = '".$_POST['fname']."', mname ='".$_POST['mname']."', lname = '".$_POST['lname']."', birthdate ='".$_POST['birthdate']."', contact = '".$_POST['contact']."', address = '".$_POST['address']."', yearlevel = '".$_POST['year_level']."', email ='".$_POST['email']."', user_role = '".$_POST['userrole']."', accountno = '".$_POST['accountno']."', account_type = '".$_POST['account_type']."' WHERE userID = '".$userID."'"; 	
				$res = mysqli_query($connect, $sql);
				echo $res;
		break;

		case 'savePassword':
				$userID = $_SESSION['userID'];
		        $password = mysqli_real_escape_string($connect, $_POST['current_password']);

				$chckpw = "SELECT * FROM tbl_users WHERE userID = '".$userID."'";
				$rescheck = mysqli_query($connect, $chckpw);
				$row = mysqli_fetch_array($rescheck);

				if (password_verify($password, $row['password'])) {
					$sql = "UPDATE tbl_users SET password = '".password_hash($_POST['password'], PASSWORD_DEFAULT)."' WHERE userID = '".$row['userID']."'";
					$res = mysqli_query($connect, $sql);

					echo $res;
				} else {
					echo 0;
				}

		break;

	}
?> 