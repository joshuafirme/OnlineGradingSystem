<div id="usercheckInfo" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Update Personal Information</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning">
                    <span class="text-black"><i class="fa fa-exclamation-triangle"></i> To Completely using this application you must fill-up your Personal Information.</span>
                </div>
    
                <div class="row col-md-12" style="padding-bottom: 15px;" >
                    <label><b>First Name:</b></label>
                    <input type="text" class="form-control" placeholder="First Name" id="fname">
                    <div id="val_fname"></div>
                </div>
                <div class="row col-md-12" style="padding-bottom: 15px;" >
                    <label><b>Middle Name:</b></label>
                    <input type="text" class="form-control" placeholder="Middle Name" id="mname">
                     <div id="val_mname"></div>
                </div>
                <div class="row col-md-12" style="padding-bottom: 15px;" >
                    <label><b>Last Name:</b></label>
                    <input type="text" class="form-control" placeholder="Last Name" id="lname">
                    <div id="val_lname"></div>
                </div>
<!--                 <div class="row col-md-12" style="padding-bottom: 15px;" >
                    <label><b>Position:</b></label>
                    <input type="text" class="form-control" placeholder="Position" id="position">
                    <div id="val_position"></div>
                </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" onclick="updateuserInfo()"><i class="fas fa-check"></i> Save</button>
            </div>
              <div id="error"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div id="announcemodal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Update Announcement Board</h4>
            </div>
            <div class="modal-body">
                <div class="row col-md-12" style="padding-bottom: 5px;" >
                      <h3>Title:</h3>
                      <input type="text" class="form-control" placeholder="Title. . ." id="title">
                     <div id="val_title"></div>
                </div>
                <div class="row col-md-12" style="padding-bottom: 15px;" >
                      <h3>Announcement Message:</h3>
                      <textarea placeholder="Message. . ." class="form-control" rows="11" id="message"></textarea>
                     <div id="val_msg"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" onclick="closemodal('announcemodal','hide')"><i class="fas fa-times"></i> Close</button>
                <button type="button" class="btn btn-success waves-effect" onclick="saveAnnouncement();"><i class="fas fa-save"></i> Update</button>
            </div>
              <div id="error"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>