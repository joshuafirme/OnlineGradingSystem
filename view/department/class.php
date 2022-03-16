<?php 
 	/*10-24-21 ADDED MIKE*/

 	include '../../connection/connect.php';
	include '../../auditlog/auditfunction.php';

 	switch ($_POST['form']) {
 		case 'savedepartment':
 				$sql = "INSERT INTO department SET DEPARTMENT_NAME = '".$_POST['departmentname']."', DEPARTMENT_DESC = '".$_POST['departmentdesc']."'";
 				$res = mysqli_query($connect, $sql);

				$module = "Department";
				$action = "INSERT";
				insertLog($remarks,$module,$info,$action);	
 				echo $res;
 		break;

 		case 'loaddepartment':
 				$sql = "SELECT * FROM department WHERE STATUS = 1";
 				$res = mysqli_query($connect, $sql);
 				while ($row = mysqli_fetch_array($res)) {
 				?>
 					<tr style="text-align: center;">
 						<td><?php echo $row['DEPARTMENT_NAME']; ?></td>
 						<td><?php echo $row['DEPARTMENT_DESC']; ?></td>
							<td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                     <a class="dropdown-item" href="javascript:void(0)" onclick="edit('<?php echo $row['DEPT_ID']; ?>');"><i class="fas fa-edit"></i> Edit</a>
									 <a class="dropdown-item" href="javascript:void(0)" onclick="deldepartment('<?php echo $row['DEPT_ID']; ?>');"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </div>
                                </div>
							</td>
 					</tr>
 				<?php		
 				}	
 		break;

 		case 'editdepartment':
 				$chck = "SELECT * FROM department WHERE DEPT_ID = '".$_POST['departmentid']."'";
 				$result = mysqli_query($connect , $chck);
 				$row = mysqli_fetch_array($result);

                $sql = "UPDATE department SET DEPARTMENT_NAME = '".$_POST['departmentname']."', DEPARTMENT_DESC = '".$_POST['departmentdesc']."' WHERE DEPT_ID = '".$_POST['departmentid']."'";
                $res = mysqli_query($connect, $sql);
              

				$remarks = '';
				$remarks .= 'Department: <font color="red">'.$row['DEPARTMENT_NAME'].'</font> To: <font color="green">'.$_POST['departmentname'].'</font><br>';
				$remarks .= 'Department: <font color="red">'.$row['DEPARTMENT_DESC'].'</font> To: <font color="green">'.$_POST['departmentdesc'].'</font><br>';

				$info = "Successfully Update Department";
				$module = "Department";
				$action = "UPDATE";
				insertLog($remarks,$module,$info,$action);	

  				echo $res;
 		break;

        case 'deldepartment':
                $sql = "UPDATE department SET status = '0' WHERE DEPT_ID = '".$_POST['id']."'";
                $res = mysqli_query($connect, $sql);
                echo $res;

				$info = "Successfully Delete Department";
				$remarks = "has deleted ".$_POST['DEPT_ID'];
				$module = "Department";
				$action = "DELETE";
				insertLog($remarks,$module,$info,$action);	
        break;

        case 'loadinfo':
        		$sql = "SELECT * FROM department WHERE DEPT_ID = '".$_POST['id']."'";
        		$res = mysqli_query($connect, $sql);
        		$row = mysqli_fetch_array($res);

        		echo $row['DEPARTMENT_NAME']."|".$row['DEPARTMENT_DESC']."|".$row['DEPT_ID'];
        break;
 	}
?>