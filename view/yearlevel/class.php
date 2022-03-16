<?php 
 	/*10-24-21 ADDED MIKE*/

 	include '../../connection/connect.php';
	include '../../auditlog/auditfunction.php';

 	switch ($_POST['form']) {
 		case 'savegrade':
 				$sql = "INSERT INTO level SET LEVEL = '".$_POST['gradecode']."', LEVEL_DESCRIPTION = '".$_POST['gradedesc']."'";
 				$res = mysqli_query($connect, $sql);

				$module = "Grade Level";
				$action = "INSERT";
				insertLog($remarks,$module,$info,$action);	
 				echo $res;
 		break;

 		case 'loadgradelevel':
 				$sql = "SELECT * FROM level WHERE status = 1";
 				$res = mysqli_query($connect, $sql);
 				while ($row = mysqli_fetch_array($res)) {
 				?>
 					<tr style="text-align: center;">
 						<td><?php echo $row['LEVEL']; ?></td>
 						<td><?php echo $row['LEVEL_DESCRIPTION']; ?></td>
							<td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                     <a class="dropdown-item" href="javascript:void(0)" onclick="edit('<?php echo $row['YR_ID']; ?>');"><i class="fas fa-edit"></i> Edit</a>
									 <a class="dropdown-item" href="javascript:void(0)" onclick="delgrade('<?php echo $row['YR_ID']; ?>');"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </div>
                                </div>
							</td>
 					</tr>
 				<?php		
 				}	
 		break;

 		case 'editgradelevel':
 				$chck = "SELECT * FROM level WHERE YR_ID = '".$_POST['gradeid']."'";
 				$result = mysqli_query($connect , $chck);
 				$row = mysqli_fetch_array($result);

                $sql = "UPDATE level SET LEVEL = '".$_POST['gradecode']."', LEVEL_DESCRIPTION = '".$_POST['gradedesc']."' WHERE YR_ID = '".$_POST['gradeid']."'";
                $res = mysqli_query($connect, $sql);
              

				$remarks = '';
				$remarks .= 'Grade Level: <font color="red">'.$row['LEVEL'].'</font> To: <font color="green">'.$_POST['gradecode'].'</font><br>';
				$remarks .= 'Grade Level: <font color="red">'.$row['LEVEL_DESCRIPTION'].'</font> To: <font color="green">'.$_POST['gradedesc'].'</font><br>';

				$info = "Successfully Update Grade Level";
				$module = "Grade Level";
				$action = "UPDATE";
				insertLog($remarks,$module,$info,$action);	

  				echo $res;
 		break;

        case 'delgrade':
                $sql = "UPDATE level SET status = '0' WHERE YR_ID = '".$_POST['id']."'";
                $res = mysqli_query($connect, $sql);
                echo $res;

				$info = "Successfully Delete Grade Level";
				$remarks = "has deleted account YR ID: ".$_POST['YR_ID'];
				$module = "Grade Level";
				$action = "DELETE";
				insertLog($remarks,$module,$info,$action);	
        break;

        case 'loadinfo':
        		$sql = "SELECT * FROM level WHERE YR_ID = '".$_POST['id']."'";
        		$res = mysqli_query($connect, $sql);
        		$row = mysqli_fetch_array($res);

        		echo $row['LEVEL']."|".$row['LEVEL_DESCRIPTION']."|".$row['YR_ID'];
        break;
 	}
?>