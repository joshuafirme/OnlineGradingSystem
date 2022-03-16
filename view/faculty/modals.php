   <div id="addFaculty" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Add New Instructor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12" >
                        <label>Name</label>
                        <select class="form-control loadinstructor" id="instructor"></select>
                        <div id="val_instructor"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Specialization:</label>
                        <input type="text" class="form-control" placeholder="Specialization" id="specialization">
                        <div id="val_specialization"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="saveinstructor();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

   <div id="editInstructor" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Edit Instructor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12" >
                        <label>Name</label>
                        <input type="hidden" id="updateid" name="">
                        <select class="form-control loadinstructor" id="instructor_edit"></select>
                        <div id="val_instructor_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Specialization:</label>
                        <input type="text" class="form-control" placeholder="Specialization" id="specialization_edit">
                        <div id="val_specialization_edit"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="saveUpdateinstructor();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>