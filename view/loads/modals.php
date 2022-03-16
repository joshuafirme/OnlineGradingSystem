<div id="addloads" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Add Subject</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-6" >
                        <label>Subject Code:</label>
                        <select class="form-control loadsubject" id="loadsubject" onchange="getinfo()"></select>
                    </div>
                    <div class="col-md-6" >
                        <label>Description:</label>
                        <input type="text" class="form-control" id="description" readonly="">
                    </div>
                </div>
                <div class="row" style="padding-top: 15px;">
                    <div class="col-md-6" >
                        <label>No of Unit:</label>
                        <input type="text" class="form-control" id="unit" readonly="">
                    </div>
                    <div class="col-md-6" >
                        <label>Year Level:</label>
                        <input type="text" class="form-control" id="yearlevel" readonly="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="saveloads();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<div id="editloads" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Edit Subject</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-6" >
                        <label>Subject Code:</label>
                        <input type="hidden" id="loadsid">
                        <select class="form-control loadsubject" id="loadsubject_edit" onchange="getinfo2()"></select>
                    </div>
                    <div class="col-md-6" >
                        <label>Description:</label>
                        <input type="text" class="form-control" id="description_edit" readonly="">
                    </div>
                </div>
                <div class="row" style="padding-top: 15px;">
                    <div class="col-md-6" >
                        <label>No of Unit:</label>
                        <input type="text" class="form-control" id="unit_edit" readonly="">
                    </div>
                    <div class="col-md-6" >
                        <label>Year Level:</label>
                        <input type="text" class="form-control" id="yearlevel_edit" readonly="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="saveUpdateloads();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>