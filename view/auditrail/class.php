<?php 
    include '../../connection/connect.php';
    include '../../auditlog/auditfunction.php';

	switch ($_POST['form']) {
		case 'loadusername':
				?>
                     <option value="">Select Users</option>
				<?php
				$sql = "SELECT email FROM tblusers WHERE isActive ='1'";
				$res = mysqli_query($connect, $sql);
				while ($row = mysqli_fetch_Array($res)) {
					?>
  					 <option value="<?php echo $row[0]; ?>">- <?php echo $row[0]; ?></option> 
					<?php
				}
		break;

		case 'loaddefaultlog':
			$sql = "SELECT date, time, email, module, ACTION, info,  browser, ipaddress, remarks, logID FROM tbl_logs";
			$res = mysqli_query($connect ,$sql);
			while ($row = mysqli_fetch_Array($res)) {
				?>
				<tr>
					<td><?php echo $row[9]; ?></td>
					<td>
						<?php echo date('F-d-Y', strtotime($row[0])); ?><br><small><?php echo date('h:i A',strtotime($row['time'])); ?></small>
					</td>
					<td><?php echo $row[2]?></td>
					<td><?php echo $row[3]?></td>
					<td>
						<?php 
						if ($row[4] == "INSERT") {
							echo '<span class="label label-info rounded"> INSERT </span>';
						} elseif ($row[4] == "UPDATE") {
							echo '<span class="label label-success rounded"> UPDATE </span>';
						} elseif ($row[4] == "RESET") {
							echo '<span class="label label-warning rounded"> RESET </span>';
						} elseif ($row[4] == "DELETE") {
							echo '<span class="label label-danger rounded"> DELETE </span>';
						} elseif ($row[4] == "LOGIN") {
							echo '<span class="label label-primary rounded"> LOGIN </span>';
						}
						?>
					</td>
					<td>
						<?php echo $row[8]; ?>
					</td>
					<td>
						<div style="width:100%; max-height:150px; overflow:auto">	
						<?php 
						if ($row[5] == "") {
							echo "<center><font color='Orange'><b>No changes made</b></font></center>";
						} else {
							echo $row[5];
						}
						?>							
						</div>
					</td>
					<td>
						<div style="width:100%; max-height:150px; overflow:auto">
						<?php echo $row[6]?>							
						</div>
					</td>
				</tr>
				<?php
			}
			break;
	}
?> 
