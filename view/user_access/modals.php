  <div id="addnewUser" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Add New User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h3>Login Credential</h3>
                <hr>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-5">
                        <label><b>Surname:</b></label>
                        <input type="text" class="form-control" placeholder="Surname" id="lname">
                        <div id="val_lname"></div>
                    </div>
                    <div class="col-md-5">
                        <label><b>Given Name:</b></label>
                        <input type="text" class="form-control" placeholder="Given name" id="fname">
                        <div id="val_fname"></div>
                    </div>
                    <div class="col-md-2">
                        <label><b>Initial:</b></label>
                        <input type="text" class="form-control" placeholder="Initial" id="mname">
                        <div id="val_mname"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-6">
                        <label><b>Birthdate:</b></label>
                        <input type="date" class="form-control" id="birthdate">
                        <div id="val_birthdate"></div>
                    </div>
                    <div class="col-md-6">
                        <label><b>Contact No.:</b></label>
                        <input type="number" class="form-control" placeholder="Contact No." id="contact">
                        <div id="val_contact"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label><b>Address:</b></label>
                        <textarea class="form-control" id="address"></textarea>
                        <div id="val_address"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label><b>Account Type:</b></label>
                        <select class="form-control loaduserRole" id="loaduserRole"></select>
                        <div id="val_user_role_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label><b>Email Address:</b></label>
                        <input type="text" class="form-control" placeholder="Email Address" id="email">
                        <div id="val_email"></div>
                    </div>
                    <div class="col-md-12">
                        <label><b>Password:</b></label>
                        <input type="password" class="form-control" placeholder="Enter Password" id="password">
                        <div id="val_password"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="savenewUser();"><i class="fas fa-plus"></i> Add</button>
            </div>
        </div>
    </div>
</div>


  <div id="updateUser" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Update User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h3>Login Credential</h3>
                <hr>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-5">
                        <label><b>Surname:</b></label>
                        <input type="hidden" class="form-control" id="userID">
                        <input type="text" class="form-control" placeholder="Surname" id="lname_edit">
                        <div id="val_lname_edit"></div>
                    </div>
                    <div class="col-md-5">
                        <label><b>Given Name:</b></label>
                        <input type="text" class="form-control" placeholder="Given name" id="fname_edit">
                        <div id="val_fname_edit"></div>
                    </div>
                    <div class="col-md-2">
                        <label><b>Initial:</b></label>
                        <input type="text" class="form-control" placeholder="Initial" id="mname_edit">
                        <div id="val_mname_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-6">
                        <label><b>Birthdate:</b></label>
                        <input type="date" class="form-control" id="birthdate_edit">
                        <div id="val_birthdate_edit"></div>
                    </div>
                    <div class="col-md-6">
                        <label><b>Contact No.:</b></label>
                        <input type="text" class="form-control" placeholder="Contact No." id="contact_edit">
                        <div id="val_contact_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label><b>Address:</b></label>
                        <textarea class="form-control" id="address_edit"></textarea>
                        <div id="val_address_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label><b>Account Type:</b></label>
                        <select class="form-control loaduserRole" id="loaduserRole_edit"></select>
                        <div id="val_user_role_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label><b>Email Address:</b></label>
                        <input type="text" class="form-control" placeholder="Email Address" id="email_edit">
                        <div id="val_email_edit"></div>
                    </div>
<!--                     <div class="col-md-12">
                        <label><b>Password:</b></label>
                        <input type="password" class="form-control" placeholder="Enter Password" id="password_edit">
                        <div id="val_password_edit"></div>
                    </div> -->
                </div>
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="SaveUpdateUser();"><i class="fas fa-plus"></i> Update</button>
            </div>
        </div>
    </div>
</div>