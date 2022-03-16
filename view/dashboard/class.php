<?php 

    include '../../connection/connect.php';
    include '../../auditlog/auditfunction.php';


		switch ($_POST['form']) {
			case 'personalInfo':
						$sql = "SELECT * FROM tbl_users WHERE userID = '".$_SESSION['userID']."'";
						$res = mysqli_query($connect, $sql);
						$row = mysqli_fetch_array($res);

				        $userID = $row['userID'];
						$email = $row['email'];
						$fname = $row['fname'];
						$mname = $row['mname'];
						$lname = $row['lname'];
						$contact = $row['contact'];
						$user_role = $row['user_role'];
						$user_avatar = $row['user_avatar'];

						$_SESSION['userID'] = $userID;
						$_SESSION['email'] = $email;
						$_SESSION['fname'] = $fname;
						$_SESSION['mname'] = $mname;
						$_SESSION['lname'] = $lname;
						$_SESSION['contact'] = $contact;
						$_SESSION['user_role'] = $user_role;
						$_SESSION['user_avatar'] = $user_avatar;

						if ($fname == "" || $lname == "" ) {
							echo 0;
						} else {
							echo 1;
						}

/*						header("location: index.php?url='dashboard'")*/
				break;
			
			case 'updateuserInfo':
					$checkEmail = "SELECT * FROM tbl_users WHERE userID = '".$_SESSION['userID']."'";
					$resEmail = mysqli_query($connect, $checkEmail);
					$rowEmail = mysqli_fetch_array($resEmail);

					$sql = "UPDATE tbl_users SET fname = '".$_POST['fname']."', mname = '".$_POST['mname']."', lname = '".$_POST['lname']."' WHERE userID = '".$_SESSION['userID']."'";
					$res = mysqli_query($connect, $sql);

					$remarks = "<br> Successfully update Personal Information";
					$module = '<label class="warning">SYSTEM REQUIREMENT</label>';

					$info = "";

					$info .= 'Update First Name FROM: <font color="red">'.$rowEmail['fname'].'</font> to:<font color="green"> '.$_POST['fname'].'</font><br>';
					$info .= 'Update Middle Name: <font color="red">'.$rowEmail['mname'].'</font> to:<font color="green"> '.$_POST['mname'].'</font><br>';
					$info .= 'Update Last Name: <font color="red">'.$rowEmail['lname'].'</font> to:<font color="green"> '.$_POST['lname'].'</font><br>';
/*					$info .= 'Update Position: <font color="red">'.$rowEmail['position'].'</font> to:<font color="green"> '.$_POST['position'].'</font><br>';*/
					$action = 'UPDATE';

					insertLog($remarks,$module,$info,$action);

				echo $res;

			break;

			case 'loadcountsDash':
					$user = "SELECT account_type FROM tbl_users WHERE userID = '".$_SESSION['userID']."'";
					$resuser = mysqli_query($connect, $user);
					$rowuser = mysqli_fetch_array($resuser);

					$sqlstaff = "SELECT COUNT(account_type) FROM tbl_users WHERE account_type = 'origin' OR account_type = 'valuation' AND STATUS = '1'";
					$restaff = mysqli_query($connect, $sqlstaff);
					$staff = mysqli_fetch_array($restaff);

					$sqlcustomer = "SELECT COUNT(account_type) FROM tbl_users WHERE account_type = 'customer' AND STATUS = '1'";
					$recustomer = mysqli_query($connect, $sqlcustomer);
					$customer = mysqli_fetch_array($recustomer);

					$sqlpending = "SELECT count(a.formID) FROM tbl_forms a  WHERE EXISTS (SELECT b.id FROM tbl_formsapprovalhistory b WHERE b.xuser = '".$_SESSION['userID']."' AND b.formid = a.formID) ORDER BY a.id DESC";
					$respending = mysqli_query($connect, $sqlpending);
					$pending = mysqli_fetch_array($respending);

					$sqlreview = "SELECT COUNT(formid) FROM tbl_forms WHERE STATUS IN('APPROVED','UNDER EVALUATION','FOR APPROVAL','COMPLIED', 'UNDER APPEAL') AND type = '".$rowuser['account_type']."'";
					$resreview = mysqli_query($connect, $sqlreview);
					$review = mysqli_fetch_array($resreview);

					$sqlapproval = "SELECT COUNT(STATUS) FROM tbl_forms WHERE STATUS = 'APPROVED'";
					$resapproval = mysqli_query($connect, $sqlapproval);
					$approval = mysqli_fetch_array($resapproval);

					$sqlcomplied = "SELECT COUNT(STATUS) FROM tbl_forms WHERE STATUS = 'COMPLIED'";
					$rescomplied = mysqli_query($connect, $sqlcomplied);
					$complied = mysqli_fetch_array($rescomplied);

					$sqldeclined = "SELECT COUNT(STATUS) FROM tbl_forms WHERE STATUS = 'DECLINED'";
					$resdeclined = mysqli_query($connect, $sqldeclined);
					$declined = mysqli_fetch_array($resdeclined);

					$myform = "SELECT COUNT(formID) FROM tbl_forms WHERE userID = '".$_SESSION['userID']."'";
					$resForm = mysqli_query($connect, $myform);
					$rowForm = mysqli_fetch_array($resForm);

					echo $staff[0]."|".$customer[0]."|".$pending[0]."|".$review[0]."|".$approval[0]."|".$complied[0]."|".$declined[0]."|".$rowForm[0];
			break;

			case 'loadannouncement':
			        $sql = "SELECT * FROM tbl_announcement";
    				$res = mysqli_query($connect,$sql);
    				$row = mysqli_fetch_array($res);

        			echo date('m d, Y  h:i:s A', strtotime($row['date']))."|".$row['message']."|".$row['announceby']."|".$row['title'];
			break;

			case 'saveAnnouncement':
			        $userID = $_SESSION['userID'];
			        $user = "SELECT * FROM tbl_users WHERE userID = '".$userID."'";
			        $resUser = mysqli_query($connect, $user);
			        $row = mysqli_fetch_array($resUser);

			        $name = $row['fname']." ".$row['mname']." ".$row['lname'];

					$sql = "UPDATE tbl_announcement SET title = '".$_POST['title']."', message = '".$_POST['message']."', announceby = '".$name."', date = NOW(); ";
					$res = mysqli_query($connect, $sql);	
			break;

		}
?>