<?php 

	include '../../connection/connect.php';


	switch ($_POST['form']) {
		case 'listofstudent':
				$sql = "SELECT * FROM tbl_users WHERE user_role = 'RID-000003' AND status = 1";
				$res = mysqli_query($connect, $sql);
				while ($row = mysqli_fetch_array($res)) {

				$age = date_diff(date_create($row['birthdate']), date_create('now'))->y;
				?>
				<tr >
					<td><?php echo $row['userID'] ?></td>
					<td style="text-align: center;"><?php echo ucwords($row['fname']." ".$row['mname']." ".$row['lname']); ?></td>
<!-- 					<td style="text-align: center;"><?php echo ucwords($row['gender']); ?></td> -->
					<td style="text-align: center;"><?php echo $age; ?></td>
					<td style="text-align: center;"><?php echo $row['birthdate']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td style="text-align: center;"><a class="btn btn-warning" href="index.php?url=enrollmentrecord&id=<?php echo $row['userID']; ?>"> View Records</a></td>
				</tr>
				<?php
				}
		break;
	}
?>