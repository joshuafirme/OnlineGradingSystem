    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-user"></i> Profile</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item active"><i class="fas fa-user"></i> Profile</li>
            </ol>
        </div>
    </div>

                 <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card" style="  border: 1px solid; padding: 10px; box-shadow: 1px 1px #888888;">
                            <a href="javascript:void(0)" class="profilepic" onclick="updateprofilepicture('profilepic','uploadpic');" >Change Profile Picture</a>
                            <a href="javascript:void(0)" class="uploadpic" onclick="updateprofilepicture('uploadpic','profilepic');" >Cancel</a>
                            <div class="card-body">
                                <center class="mt-4 profilepic"> 
                                    <div id="useravatar"></div>
                                    <h3 class="card-title mt-2" id="names"></h3>
                                    <h4 class="card-subtitle" id="accounttype"></h4>
                                </center>
                                <div class="uploadpic">
                                    <form  id="updateform" method="post">
                                       <input type="hidden" class="userid_input" name="userid_input">
                                        <input type="file" id="input-file-now-custom-3" class="dropify" onchange="checkFiles(this);" data-height="305" name="photo">
                                      <!--  <input type="file" id="input-file-now" class="dropify" /> -->

                                       <button type="submit" class="btn btn-success" style="width: 100%;"><i class="fas fa-save"></i> Update Profile Picture</button>
                                    </form>
                                    <div id="loadprofileupdate"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card" style="  border: 1px solid; padding: 10px; box-shadow: 1px 1px #888888;">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#pinfo" role="tab">Student Info</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pwinfo" role="tab">Credential Info</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="pinfo" role="tabpanel">
                                    <div class="card-body">

                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label><b>First Name</b></label>
                                                        <input type="text" class="form-control" id="fname" >
                                                    </div>
                                                    <div class="col-md-4">
                                                         <label><b>Middle</b></label>
                                                        <input type="text" class="form-control" id="mname" >                                                       
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><b>Last Name</b></label>
                                                        <input type="text" class="form-control" id="lname" >                 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                         <label><b>Birth date</b></label>
                                                        <input type="date" class="form-control" id="birthdate">              
                                                    </div>
                                                    <div class="col-md-4">
                                                         <label><b>Contact No.</b></label>
                                                        <input type="text" class="form-control" id="contact">              
                                                    </div>
                                                    <div class="col-md-4">
                                                         <label><b>Address</b></label>
                                                        <input type="text" class="form-control" id="address">              
                                                    </div>
                                                </div>
                                            </div>
 <!--                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                         <label><b>Account Type</b></label>
                                                            <select id="account_type" class="form-control">
                                                                <option value=""> ~ Select Type ~</option>
                                                                <option value="student">Student</option>
                                                                <option value="teacher">Teacher</option>
                                                                <option value="admin">Admin</option>
                                                            </select>
                                                            <div id="val_account_type"></div>         
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><b>Year Level:</b></label>
                                                        <select id="year_level" class="form-control">
                                                            <option value=""> ~ Select Type ~</option>
                                                            <option value="1">1st Year</option>
                                                            <option value="2">2nd Year</option>
                                                            <option value="3">3rd Year</option>
                                                            <option value="4">4th Year</option>
                                                        </select>
                                                        <div id="val_year_level"></div>            
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><b>User Role Permission:</b></label>
                                                        <select class="form-control loaduserRole" id="loaduserRole"></select>
                                                        <div id="val_user_role"></div>            
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label><b>Account No.</b></label>
                                                        <input type="text" class="form-control" id="accountno" disabled="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" id="email" disabled="">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                          <button class="btn btn-success float-right" onclick="saveInfo();"><i class="fas fa-save"></i> Update</button>
                                    </div>
                                </div>

                                 <div class="tab-pane" id="pwinfo" role="tabpanel">
                                    <div class="card-body">

                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <div class="row">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-bottom: 15px;">
                                                        <label>Current Password</label>
                                                        <input type="password" class="form-control nospace" id="current_password">
                                                        <div id="val_current_password"></div>
                                                    </div>
                                                    <div class="col-md-12" style="padding-bottom: 15px;">
                                                        <label>New Password</label>
                                                        <input type="password" class="form-control nospace" id="password">
                                                        <div id="val_minlength"></div><div id="val_password"></div><div id="val_minlength"></div>
                                                    </div>
                                                    <div class="col-md-12" style="padding-bottom: 15px;">
                                                         <label>Confirm New Password</label>
                                                        <input type="password" class="form-control nospace" id="password_conf">   
                                                        <div id="minLength_confirm"></div><div id="val_password_conf"></div><div id="minLength_confirm"></div>           
                                                    </div>
                                                    <div id="passwordoesnotmatch"></div>
                                                </div>
                                            </div>
                                        </form>
                                          <button class="btn btn-success float-right" onclick="savePassword();"><i class="fas fa-save"></i> Update</button>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->

<?php 
    include 'script.php';
?>