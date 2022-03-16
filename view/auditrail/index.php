<style type="text/css">
            .mySearchCustom {
          background-image: url('assets/images/searchicon2.png');
          background-position: 10px 10px;
          background-repeat: no-repeat;
          background-size: 20px;
          width: 100%;
          font-size: 15px;
          padding: 12px 20px 10px 40px;
          border: 1px solid #ddd;
          margin-bottom: 12px;
        }

</style>

<style>
      .ekimtable {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      .ekimtable td, .ekimtable th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      .ekimtable tr:nth-child(even){background-color: #f2f2f2;}
      .ekimtable th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
/*        background-color: #4CAF50;*/
        color: white;
      }

    div.ekimscroll {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: auto;
    }
</style>
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
            <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-history"></i> Audit Logs</h3>
        </div>
    </div>

<div class="card-header bg-info">
    <h4 class="mb-0 text-white"><i class="fas fa-history"></i> Audit Logs</h4>
</div>
<div class="card">
  <div class="card-body">
     <div class="table-responsive m-t-40">
        <table id="logTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
          <thead class="bg-secondary text-white">
            <th class="text-center" style="width: 1%; border-right: solid 1px #dddddd;z-index: 1;">ID</th>
            <th class="text-center" style="width: 1%; border-right: solid 1px #dddddd;z-index: 1;">Date & Time</th>
            <th class="text-center" style="width: 1%; border-right: solid 1px #dddddd;z-index: 1;">Email</th>
            <th class="text-center" style="width: 1%; border-right: solid 1px #dddddd;z-index: 1;">Module</th>
            <th class="text-center" style="width: 1%; border-right: solid 1px #dddddd;z-index: 1;">Action</th>
            <th class="text-center" style="width: 1%; border-right: solid 1px #dddddd;z-index: 1;">Remarks</th>                  
            <th class="text-center" style="width: 4%; border-right: solid 1px #dddddd;z-index: 1;">Activity Log</th>
            <th class="text-center" style="width: 1%; border-right: solid 1px #dddddd;z-index: 1;">Browser / Platform /IP</th>
          </thead>
            <tbody class="loaddefaultlog"></tbody>
        </table> 
     </div>
  </div>
</div>
<?php include 'script.php'; ?>
