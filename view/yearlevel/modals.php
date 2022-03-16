   <div id="addgrade" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Add New Grade Level</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Grade Code:</label>
                        <input type="text" class="form-control" placeholder="Please enter Grade code" id="gradecode">
                        <div id="val_gradecode"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Grade Description:</label>
                        <input type="text" class="form-control" placeholder="Please enter Grade description" id="gradedesc">
                        <div id="val_gradedesc"></div>
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="savegradelevel();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<div id="edit" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Edit Grade Level</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Grade Code:</label>
                        <input type="hidden" id="gradeid" class="form-control" >
                        <input type="text" class="form-control" placeholder="Please enter Grade code" id="gradecode_edit">
                        <div id="val_gradecode_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Grade Description:</label>
                        <input type="text" class="form-control" placeholder="Please enter Grade description" id="gradedesc_edit">
                        <div id="val_gradedesc_edit"></div>
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="editgradelevel();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>


