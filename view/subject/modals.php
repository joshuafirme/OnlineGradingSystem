  <div id="addsubj" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Add New Subject</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Subject Code:</label>
                        <input type="text" class="form-control" placeholder="Please enter subject code" id="subjectcode">
                        <div id="val_subjectcode"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Subject Description:</label>
                        <input type="text" class="form-control" placeholder="Please enter subject description" id="subjectdesc">
                        <div id="val_subjectdesc"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>No of units:</label>
                        <input type="text" class="form-control" placeholder="Please enter No. of units" id="noofunits">
                        <div id="val_noofunits"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Year Level:</label>
                        <select class="form-control loadgradelevel" id="yearlevel">
                        </select>
                        <div id="val_yearlevel"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Academic Year:</label>
                        <select class="form-control" id="academicyear">
                            <option value="">~ Select ~</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                        </select>
                       <div id="val_academicyear"></div>
                    </div>
                </div>                
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="savesubject();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

  <div id="editsubj" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Edit Subject</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Subject Code:</label>
                        <input type="hidden" id="subjid">
                        <input type="text" class="form-control" placeholder="Please enter subject code" id="subjectcode_edit">
                        <div id="val_subjectcode_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Subject Description:</label>
                        <input type="text" class="form-control" placeholder="Please enter subject description" id="subjectdesc_edit">
                        <div id="val_subjectdesc_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>No of units:</label>
                        <input type="text" class="form-control" placeholder="Please enter No. of units" id="noofunits_edit">
                        <div id="val_noofunits_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Year Level:</label>
                        <select class="form-control loadgradelevel" id="yearlevel_edit">
                        </select>
                        <div id="val_yearlevel_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-12">
                        <label>Academic Year:</label>
                        <select class="form-control" id="academicyear_edit">
                            <option value="">~ Select ~</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                        </select>
                       <div id="val_academicyear_edit"></div>
                    </div>
                </div>                
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="saveupdate();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>