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
        <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-home"></i> Dashboard</h3>
    </div>
        <div class="col-md-6 col-8 align-self-center">
            <button class="btn btn-success float-right" onclick="updateannouncement();"><i class="fas fa-edit"></i> Update Announcement</button>
        </div>
</div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card-header bg-info">
                        <h3 class="text-white"><i class="fas fa-board"></i> Announcement Board</h3>
                    </div>
                    <div class="card" style="border: 1px solid; padding: 2px; box-shadow: 2px 2px;">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="alert alert-info">
                                    <h3 class="text-info"><i class="fa fa-exclamation-circle"></i> <b class="title"></b></h3>
                                    <div class="col-md-12">
                                        <p style="font-size: 19px;" class="message"></p>
                                    </div>
                                    <div style="padding-top: 2%; text-align: right;">
                                        <i>Posted By:</i> <b class="postedby"></b><br>
                                        <i>Modfied Date: <b class="date"></b></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<div class="row">

    <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="card card-secondary"  style="border: 1px solid; padding: 2px; box-shadow: 2px 2px; background-color: #EA9B55 !important;">
            <div class="box text-center"  style="background-color: #EA9B55 !important;">
                <h1 class="font-light text-white" id="countstaff">0</h1>
                <h3 class="text-white"><i class="fas fa-users"></i> Total Student</h3>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="card card-secondary"  style="border: 1px solid; padding: 2px; box-shadow: 2px 2px; background-color: #6355EA !important;">
            <div class="box text-center"  style="background-color: #6355EA !important;">
                <h1 class="font-light text-white" id="countcustomer">0</h1>
                <h3 class="text-white"><i class="fas fa-users"></i> Total Faculty</h3>
            </div>
        </div>
    </div>

<?php 

    include 'script.php';
    include 'modals.php';
    include 'alertmessage/alertscript.php';
?>

