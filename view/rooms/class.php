<?php 
 	/*10-24-21 ADDED MIKE*/

 	include '../../connection/connect.php';
	include '../../auditlog/auditfunction.php';

 	switch ($_POST['form']) {
 		case 'saveRoom':
 				$sql = "INSERT INTO room SET ROOM_NAME = '".$_POST['Roomname']."', ROOM_DESC = '".$_POST['Roomdesc']."'";
 				$res = mysqli_query($connect, $sql);

				$module = "Room";
				$action = "INSERT";
				insertLog($remarks,$module,$info,$action);	
 				echo $res;
 		break;

 		case 'loadRoom':
 				$sql = "SELECT * FROM room WHERE STATUS = 1";
 				$res = mysqli_query($connect, $sql);
 				while ($row = mysqli_fetch_array($res)) {
 				?>
 					<tr style="text-align: center;">
 						<td><?php echo $row['ROOM_NAME']; ?></td>
 						<td><?php echo $row['ROOM_DESC']; ?></td>
							<td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                     <a class="dropdown-item" href="javascript:void(0)" onclick="edit('<?php echo $row['ROOM_ID']; ?>');"><i class="fas fa-edit"></i> Edit</a>
									 <a class="dropdown-item" href="javascript:void(0)" onclick="delRoom('<?php echo $row['ROOM_ID']; ?>');"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </div>
                                </div>
							</td>
 					</tr>
 				<?php		
 				}	
 		break;

 		case 'editRoom':
 				$chck = "SELECT * FROM room WHERE ROOM_ID = '".$_POST['Roomid']."'";
 				$result = mysqli_query($connect , $chck);
 				$row = mysqli_fetch_array($result);

                $sql = "UPDATE room SET ROOM_NAME = '".$_POST['Roomname']."', ROOM_DESC = '".$_POST['Roomdesc']."' WHERE ROOM_ID = '".$_POST['Roomid']."'";
                $res = mysqli_query($connect, $sql);
              

				$remarks = '';
				$remarks .= 'Room: <font color="red">'.$row['ROOM_NAME'].'</font> To: <font color="green">'.$_POST['Roomname'].'</font><br>';
				$remarks .= 'Room: <font color="red">'.$row['ROOM_DESC'].'</font> To: <font color="green">'.$_POST['Roomdesc'].'</font><br>';

				$info = "Successfully Update Room";
				$module = "Room";
				$action = "UPDATE";
				insertLog($remarks,$module,$info,$action);	

  				echo $res;
 		break;

        case 'delRoom':
                $sql = "UPDATE room SET status = '0' WHERE ROOM_ID = '".$_POST['id']."'";
                $res = mysqli_query($connect, $sql);
                echo $res;

				$info = "Successfully Delete Room";
				$remarks = "has deleted ".$_POST['ROOM_ID'];
				$module = "Room";
				$action = "DELETE";
				insertLog($remarks,$module,$info,$action);	
        break;

        case 'loadinfo':
        		$sql = "SELECT * FROM room WHERE ROOM_ID = '".$_POST['id']."'";
        		$res = mysqli_query($connect, $sql);
        		$row = mysqli_fetch_array($res);

        		echo $row['ROOM_NAME']."|".$row['ROOM_DESC']."|".$row['ROOM_ID'];
        break;
 	}
?>