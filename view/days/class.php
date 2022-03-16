<?php 
		include '../../connection/connect.php';


		switch ($_POST['form']) {
			case 'loaddays':
					$sql = "SELECT id, days, description FROM tbl_days WHERE status = 1";
					$res = mysqli_query($connect, $sql);

					while ($row = mysqli_fetch_array($res)) {
						?>
						<tr style="text-align: center;">
		<!-- 					<td><?php echo $row[0] ?></td> -->
							<td><?php echo $row[1] ?></td>
							<td><?php echo $row[2] ?></td>
							<td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                     <a class="dropdown-item" href="javascript:void(0)" onclick="viewinfo('<?php echo $row[0]; ?>')"><i class="fas fa-edit"></i> Edit</a>
									 <a class="dropdown-item" href="javascript:void(0)" onclick="deleteDays('<?php echo $row[0]; ?>')"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </div>
                                </div>
							</td>
						</tr>
						<?php
					}
				break;


			case 'savedays':
						$sql = "INSERT INTO tbl_days SET days = '".$_POST['days']."', description = '".$_POST['description']."', status = 1";
						$res = mysqli_query($connect, $sql);
						echo $res;	
			break;


			case 'savedit':
						$sql = "UPDATE tbl_days SET days = '".$_POST['days']."', description = '".$_POST['description']."' WHERE id = '".$_POST['id']."'";
						$res = mysqli_query($connect, $sql);
						echo $res;	
			break;

			case 'viewinfo':
					$sql = "SELECT id, days, description FROM tbl_days WHERE id = '".$_POST['id']."'";
					$res = mysqli_query($connect, $sql);
					$row = mysqli_fetch_array($res);

					echo $row[0]."|".$row[1]."|".$row[2];
			break;

			case 'deleteDays':
					$sql = "DELETE FROM tbl_days WHERE id = '".$_POST['id']."'";
					$res = mysqli_query($connect, $sql);
					echo $res;	
			break;
		}
?>