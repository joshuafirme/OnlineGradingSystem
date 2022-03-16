    <div id="adddays" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Add Award</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Award Name:</label>
                        <input type="text" class="form-control" placeholder="Ex Best in Math" id="days">
                        <div id="val_days"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Description:</label>
                        <input type="text" class="form-control" placeholder="Please enter description" id="description">
                        <div id="val_description"></div>
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="savedays();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

   <div id="editdays" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Edit Award</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Award Name:</label>
  						<input type="hidden" class="form-control" id="id">
                        <input type="text" class="form-control" placeholder="Ex MWF, TTH" id="days_edit">
                        <div id="val_days_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Description:</label>
                        <input type="text" class="form-control" placeholder="Please enter description" id="description_edit">
                        <div id="val_description_edit"></div>
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="savedit();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>