   <div id="addRoom" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Add New Room</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Room Namr:</label>
                        <input type="text" class="form-control" placeholder="Please enter Room" id="Roomname">
                        <div id="val_Roomname"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Room Description:</label>
                        <input type="text" class="form-control" placeholder="Please enter description" id="Roomdesc">
                        <div id="val_Roomdesc"></div>
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="saveRoom();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<div id="edit" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Edit Room Level</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Room:</label>
                        <input type="hidden" id="Roomid" class="form-control" >
                        <input type="text" class="form-control" placeholder="Please enter Room" id="Roomname_edit">
                        <div id="val_Roomname_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Description:</label>
                        <input type="text" class="form-control" placeholder="Please enter description" id="Roomdesc_edit">
                        <div id="val_Roomdesc_edit"></div>
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="editRoom();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>


