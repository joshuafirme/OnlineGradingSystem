<?php 
        include 'connection/connect.php';
        
        $userID = $_SESSION['userID'];
        $sql = "SELECT user_role FROM tbl_users WHERE userID = '".$userID."'";
        $res = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($res);

        $modules = "SELECT * FROM tbl_user_role WHERE role_id = '".$row[0]."'";
        $resmodule = mysqli_query($connect, $modules);
        $rowmodule = mysqli_fetch_array($resmodule);
?>

<?php 
    if ($rowmodule['view_user_role'] == 1) {
?>


<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-fas fa-lock"></i> User Permission</h3>
    </div>
</div>

<div class="card-header bg-info">
    <h4 class="text-white"><i class="fas fa-fas fa-lock"></i> User Role</h4>
</div>
<div class="card" style="padding-top: 5px;box-shadow: 3px 5px 5px 3px #888888; padding: 3px;">
    <div class="card-body">
        <div id="tblemployeelist">
            <?php 
             if ($rowmodule['addnewRole'] == 1) {
                    ?>
            <div class="row">
                <div class="col-md-12" style="padding: 12px 1px 5px 19px;">
                    <button class="btn btn-success" onclick="addNewRole();" style="width: 15%;"><i class="fas fa-plus"></i> Add New Role</button>
                </div>
            </div>
            <?php
             }
            ?>
            <hr>
                 <table id="userRoleTbl" class="display nowrap table table-striped " cellspacing="0" width="100%">
                    <thead class="bg-info text-white">
                        <tr>
                            <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Role ID</th>
                            <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Code</th>
                            <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Status</th>
                            <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Action</th>
                        </tr>
                    </thead>                                                                       
                    <tbody id="loaduserRole"></tbody>
                </table>
            </div>
        </div>
    </div>

<?php 
    include 'alertmessage/alertscript.php';
    include 'script.php';
    include 'modals.php';

?>
<?php
    } else {
?>
<div class="row">
    <div class="col-md-12">
    <div class="error-body text-center">
        <h1 class="text-info">403</h1>
        <h2 class="text-uppercase">Forbidden Error!</h2>
        <p style="color: red;">YOU DON'T HAVE PERMISSION TO ACCESS ON THIS PAGE.</p>
<!--                 <a href="index.html" class="btn btn-info btn-rounded waves-effect waves-light mb-5">Back to home</a> </div> -->
     </div>
</div>

<?php
    }

?>