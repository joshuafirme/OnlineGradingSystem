<?php 
 	/*11-17-2021 ADDED MIKE*/

 	include '../../connection/connect.php';
	include '../../auditlog/auditfunction.php';

 	switch ($_POST['form']) {

        case 'deleteInstructor':
                    $sql = "UPDATE tbl_instructor SET status = '0' WHERE id = '".$_POST['id']."'";
                    $res = mysqli_query($connect, $sql);
                    echo $res;

                    $info = "Successfully Delete Instructor";
                    $remarks = "has deleted account Instructor: ".$_POST['id'];
                    $module = "INSTRUCTOR";
                    $action = "DELETE";
                    insertLog($remarks,$module,$info,$action);  
        break;

        case 'loadinsInfo':
                $chck = "SELECT userID,specialization FROM tbl_instructor WHERE id = '".$_POST['id']."'";
                $reschk = mysqli_query($connect, $chck) or die(mysqli_error($connect));
                $row = mysqli_fetch_array($reschk);

                echo $row['userID']."|".$row['specialization']; 
        break;

        case 'saveUpdateinstructor':

/*                $chck = "SELECT userID FROM tbl_instructor WHERE userID = '".$_POST['instructor']."'";
                $reschk = mysqli_query($connect, $chck) or die(mysqli_error($connect));
                if (mysqli_num_rows($reschk)) {
                    echo 0;
                } else {*/
                    $sql = "UPDATE tbl_instructor SET userID = '".$_POST['instructor']."', specialization = '".$_POST['specialization']."' WHERE id = '".$_POST['id']."'";
                    $res = mysqli_query($connect, $sql);
                    echo $res;
  /*              }*/
        break;

        case 'saveinstructor':

                $chck = "SELECT userID FROM tbl_instructor WHERE userID = '".$_POST['instructor']."'";
                $reschk = mysqli_query($connect, $chck) or die(mysqli_error($connect));
                if (mysqli_num_rows($reschk)) {
                    echo 0;
                } else {
                    $sql = "INSERT INTO tbl_instructor SET userID = '".$_POST['instructor']."', specialization = '".$_POST['specialization']."', status = 1";
                    $res = mysqli_query($connect, $sql);
                    echo $res;
                }
        break;


        case 'loadinstructor':
                $sql = "SELECT userID,fname,mname,lname FROM tbl_users WHERE user_role = 'RID-000004' ORDER by fname";
                $res = mysqli_query($connect , $sql);
                ?>
                <option value="">~ SELECT ~</option>
                <?php
                while ($row = mysqli_fetch_array($res)) {
                ?>
                <option value="<?php echo $row[0]; ?>"><?php echo ucwords($row[1]." ".$row[2]." ".$row[3]); ?></option>
                <?php
                }
        break;

        case 'loadfaculty':
                $sql = "SELECT userID, specialization,id FROM tbl_instructor WHERE status = 1";
                $res = mysqli_query($connect, $sql);

                while ($row = mysqli_fetch_array($res)) {
                ?>
                    <tr>
                        <td>
                            <?php 
                                $n = "SELECT userID FROM tbl_users WHERE userID = '".$row[0]."'";
                                $rsn = mysqli_query($connect, $n);
                                $rwn = mysqli_fetch_array($rsn);
                                echo ucwords($rwn[0]);
                            ?>
                        </td>
                        <td style="text-align: center;">
                            <?php 
                                $n = "SELECT CONCAT(fname,' ',mname,' ',lname) as name FROM tbl_users WHERE userID = '".$row[0]."'";
                                $rsn = mysqli_query($connect, $n);
                                $rwn = mysqli_fetch_array($rsn);
                                echo ucwords($rwn['name']);
                            ?>
                        </td>
                        <td style="text-align: center;"><?php echo ucwords($row[1]); ?></td>
                        <td style="text-align: center;">
                            <?php 
                                $n = "SELECT email FROM tbl_users WHERE userID = '".$row[0]."'";
                                $rsn = mysqli_query($connect, $n);
                                $rwn = mysqli_fetch_array($rsn);
                                echo ucwords($rwn[0]);
                            ?>
                        </td>
                        <td style="text-align: center;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-settings"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?url=loads&id=<?php echo $row['userID'];?>"><i class="fas fa-list"></i> List of Loads</a>
                                <a class="dropdown-item" href="javascript:void(0)" onclick="editInstructor('<?php echo $row['id']; ?>');"><i class="fas fa-edit"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)"  onclick="deleteInstructor('<?php echo $row['id']; ?>');"><i class="fas fa-trash-alt"></i> Deactivate</a>
                            </div>
                        </div>
                        </td>
                    </tr>
                <?php         
                }     
        break;    
 	}
?>