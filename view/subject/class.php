<?php 
	include '../../connection/connect.php';
	include '../../auditlog/auditfunction.php';


	switch ($_POST['form']) {
		case 'loadgradelevel':
				?>
				<option value="">~ Select ~</option>
				<?php		
				$sql = "SELECT * FROM level WHERE status = 1";
				$res = mysqli_query($connect, $sql);

				while ($row = mysqli_fetch_array($res)) {
				?>
				<option value="<?php echo $row['YR_ID'] ?>"><?php echo $row['LEVEL'] ?></option>
				<?php		
				}	
		break;

		case 'savesubject':
				$sql = "INSERT INTO subject SET SUBJ_CODE = '".$_POST['subjectcode']."', SUBJ_DESCRIPTION = '".$_POST['subjectdesc']."', UNIT = '".$_POST['noofunits']."', YEARLEVEL = '".$_POST['yearlevel']."' , AY = '".$_POST['academicyear']."', status = 1";
				$res = mysqli_query($connect , $sql);

				$module = "Subject";
				$action = "INSERT";
				insertLog($remarks,$module,$info,$action);	
 				echo $res;
		break;

		case 'loadsubject':
				$sql = "SELECT * FROM subject WHERE STATUS = 1";
				$res = mysqli_query($connect, $sql);

				while ($row = mysqli_fetch_array($res)) {
				?>
					<tr style="text-align: center;">
						<td><?php echo $row['SUBJ_CODE'] ?></td>	
						<td><?php echo $row['SUBJ_DESCRIPTION'] ?></td>	
						<td><?php 
							$getlevel = "SELECT * FROM level WHERE YR_ID = '".$row['YEARLEVEL']."'";
							$reslevel = mysqli_query($connect, $getlevel);
							$rowlevel = mysqli_fetch_array($reslevel);
							echo $rowlevel['LEVEL'];
							?>
						</td>
						<td><?php echo $row['UNIT'] ?></td>	
						<td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-settings"></i>
                                </button>
                                <div class="dropdown-menu">

                                 <a class="dropdown-item" href="javascript:void(0)" onclick="updatesubject('<?php echo $row['SUBJ_ID']; ?>');"><i class="fas fa-edit"></i> Edit</a>
										<a class="dropdown-item" href="javascript:void(0)" onclick="delsubject('<?php echo $row['SUBJ_ID']; ?>');"><i class="fas fa-trash-alt"></i> Delete</a>
                                </div>
                            </div>
						</td>
					</tr>
				<?php
				}
		break;

		case 'loadinfo':
			$sql = "SELECT * FROM subject WHERE SUBJ_ID = '".$_POST['id']."'";
			$res = mysqli_query($connect, $sql);
			$row = mysqli_fetch_array($res);
			echo $row['SUBJ_ID']."|".$row['SUBJ_CODE']."|".$row['SUBJ_DESCRIPTION']."|".$row['UNIT']."|".$row['YEARLEVEL']."|".$row['AY'];	
		break;

		case 'saveupdatesubject':
				$sql = "UPDATE subject SET SUBJ_CODE = '".$_POST['subjectcode']."', SUBJ_DESCRIPTION = '".$_POST['subjectdesc']."', UNIT = '".$_POST['noofunits']."', YEARLEVEL = '".$_POST['yearlevel']."' , AY = '".$_POST['academicyear']."' WHERE SUBJ_ID = '".$_POST['subjid']."'";
				$res = mysqli_query($connect , $sql);

				$remarks = '';
				$remarks .= 'Grade Level: <font color="red">'.$row['SUBJ_CODE'].'</font> To: <font color="green">'.$_POST['subjectcode'].'</font><br>';
				$remarks .= 'Grade Level: <font color="red">'.$row['SUBJ_DESCRIPTION'].'</font> To: <font color="green">'.$_POST['subjectdesc'].'</font><br>';
				$remarks .= 'Grade Level: <font color="red">'.$row['UNIT'].'</font> To: <font color="green">'.$_POST['noofunits'].'</font><br>';
				$remarks .= 'Grade Level: <font color="red">'.$row['YEARLEVEL'].'</font> To: <font color="green">'.$_POST['yearlevel'].'</font><br>';
				$remarks .= 'Grade Level: <font color="red">'.$row['AY'].'</font> To: <font color="green">'.$_POST['academicyear'].'</font><br>';

				$info = "Successfully Update Subject";
				$module = "Subject";
				$action = "UPDATE";
				insertLog($remarks,$module,$info,$action);	
 				echo $res;
		break;


		case 'delsubject':
				$chckdel = "SELECT ";

                $sql = "UPDATE subject SET STATUS = '0' WHERE SUBJ_ID = '".$_POST['id']."'";
                $res = mysqli_query($connect, $sql);
                echo $res;

				$info = "Successfully Subject";
				$remarks = "has deleted Subject: ".$_POST['YR_ID'];
				$module = "Subject";
				$action = "DELETE";
				insertLog($remarks,$module,$info,$action);	
		break;
	}
?>