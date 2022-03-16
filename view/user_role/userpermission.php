  <?php
	include '../../connection/connect.php';
	
switch ( $_POST['form'] ) {

			 case 'loadAccessPermission':
					$sql = "SELECT * FROM tbl_user_role WHERE role_id = '".$_POST['accessgroupid']."'";
					$res = mysqli_query($connect, $sql);
					$row = mysqli_fetch_array($res);
					?>

 							<div class="modal-body">
                                <h4 class="card-title">User Role: <font color="green" id="displaygroupid"></font></h4>
                                <input type="hidden" id="getgroupid">
                                <hr>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#dashboard" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Dashboard</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ar_requestTab" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Admin Access</span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="dashboard" role="tabpanel">
                                        <div class="p-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="selectalldashboard">
                                                        <label class="custom-control-label" for="selectalldashboard"><h4>Select All</h4></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                     <div class="custom-control custom-checkbox">                                         
                                                        <input type="checkbox" class="custom-control-input checkallDashboard" id="viewdashboard" <?php if ($row['viewdashboard'] == 1) {?>checked=""<?php }else {} ?>>
                                                        <label class="custom-control-label" for="viewdashboard"><h4>View Dashboard</h4></label>
                                                    </div>                                                
                                                </div>
                                                <div class="col-md-4">
                                                     <div class="custom-control custom-checkbox">                                         
                                                        <input type="checkbox" class="custom-control-input checkallDashboard" id="dashboard_announcement" <?php if ($row['dashboard_announcement'] == 1) {?>checked=""<?php }else {} ?>>
                                                        <label class="custom-control-label" for="dashboard_announcement"><h4>View Announcement</h4></label>
                                                    </div>  
                                                     <div class="custom-control custom-checkbox">                                         
                                                        <input type="checkbox" class="custom-control-input checkallDashboard" id="dashboard_update_announcement" <?php if ($row['dashboard_update_announcement'] == 1) {?>checked=""<?php }else {} ?>>
                                                        <label class="custom-control-label" for="dashboard_update_announcement"><h4>Update Announcement</h4></label>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane  p-3" id="ar_requestTab" role="tabpanel">
                                      		<div class="row">
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="selectallviewForms">
                                                        <label class="custom-control-label" for="selectallviewForms"><h4>Select All</h4></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                     <div class="custom-control custom-checkbox">                                         
                                                        <input type="checkbox" class="custom-control-input checkallforms" id="viewadminaccess" <?php if ($row['viewadminaccess'] == 1) {?>checked=""<?php }else {} ?>>
                                                        <label class="custom-control-label" for="viewadminaccess"><h4>View Admin Access</h4></label>
                                                    </div>                                             
                                                </div>
                                                <div class="col-md-4">
                                                     <div class="custom-control custom-checkbox">                                         
                                                        <input type="checkbox" class="custom-control-input checkallforms" id="account" <?php if ($row['account'] == 1) {?>checked=""<?php }else {} ?>>
                                                        <label class="custom-control-label" for="account"><h4>View Accounts</h4></label>
                                                    </div>  
                                                     <div class="custom-control custom-checkbox">                                         
                                                        <input type="checkbox" class="custom-control-input checkallforms" id="user_role" <?php if ($row['user_role'] == 1) {?>checked=""<?php }else {} ?>>
                                                        <label class="custom-control-label" for="user_role"><h4>View User Permission</h4></label>
                                                    </div>  
                                                     <div class="custom-control custom-checkbox">                                         
                                                        <input type="checkbox" class="custom-control-input checkallforms" id="auditlog" <?php if ($row['auditlog'] == 1) {?>checked=""<?php }else {} ?>>
                                                        <label class="custom-control-label" for="auditlog"><h4>View Auditrail</h4></label>
                                                    </div>   
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
							<?php
					break;
			}
					?>

<script type="text/javascript">
		$( function(){
            $('#selectalldashboard').click(function(event) {   
                if(this.checked) {
                    // Iterate each checkbox
                    $('.checkallDashboard').each(function() {
                        this.checked = true;                        
                    });
                } else {
                    $('.checkallDashboard').each(function() {
                        this.checked = false;                       
                    });
                }
            });  

            $('#selectalladminaccess').click(function(event) {   
                if(this.checked) {
                    // Iterate each checkbox
                    $('.checkallforms').each(function() {
                        this.checked = true;                        
                    });
                } else {
                    $('.checkallforms').each(function() {
                        this.checked = false;                       
                    });
                }
            }); 

		});
</script>