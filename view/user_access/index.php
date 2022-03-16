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


<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-users"></i> User Account</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fas fa-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item active"><i class="fas fa-users"></i> User Account</li>
        </ol>
    </div>
</div>

<div class="card-header bg-info">
    <h4 class="text-white"><i class="fas fa-user"></i> User Account</h4>
</div>
<div class="card" style="padding-top: 5px;box-shadow: 3px 5px 5px 3px #888888; padding: 3px;">
    <div class="card-body">

                <div class="row">
                    <div class="col-md-12" style="padding: 12px 1px 5px 19px;">
                        <button class="btn btn-success" onclick="addNewUser();" style="width: 15%;"><i class="fas fa-user-plus"></i> Add New User</button>
                    </div>
                </div>

        <hr>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#Teachers" role="tab">User list</a> </li>
<!--             <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Students" role="tab">Students</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Admin" role="tab">Admin</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Archive" role="tab">Archive</a> </li> -->
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
            <div class="tab-pane active" id="Teachers" role="tabpanel">
                <div class="p-3">
                    <div class="table-responsive m-t-40">
                     <table id="loadusersTbl" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="bg-info text-white">
                                <tr>
                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Account No.</th>
                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;"></th>
                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Name</th>
                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Account Type</th>
                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Status</th>
                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Action</th>
                                </tr>
                            </thead>                                                                       
                            <tbody id="loaduserTeacherTBL"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'script.php';
    include 'modals.php';
    include 'alertmessage/alertscript.php';

?>
