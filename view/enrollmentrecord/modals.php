<div id="enrollstudent" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel">Enroll Student</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 8px;">
                    <div class="col-md-12" >
                        <label>Account No.:</label>
                       <input type="text" class="form-control accountno" readonly="">
                    </div>
                </div>
                 <div class="row" style="padding-bottom: 8px;">    
                    <div class="col-md-12" >
                        <label>Name:</label>
                        <input type="text" class="form-control name" readonly="">
                    </div>
                </div>
                <div class="row" style="padding-bottom: 8px;">
                    <div class="col-md-12" >
                        <label>Year Level:</label>
                        <select id="loadyearlevel" class="form-control" ></select>
                        <div id="val_loadyearlevel"></div>
                    </div>
                </div>
                 <div class="row" style="padding-bottom: 8px;">
                    <div class="col-md-12" >
                        <label>Academic Year:</label>
                        <select class="form-control" id="academicyear">
                            <option value="">~ Select ~</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                        </select>
                       <div id="val_academicyear"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 8px;">
                    <div class="col-md-12" >
                        <label>Department:</label>
                        <select class="form-control" id="department"></select>
                           <div id="val_department"></div>
                    </div>

                </div>
                 <div class="row" style="padding-bottom: 8px;"> 
                    <div class="col-md-12" >
                        <label>Semester:</label>
                        <select class="form-control" id="semester">
                            <option value="">~ Select ~</option>
                            <option value="First">First</option>
                            <option value="Second">Second</option>
                        </select>
                       <div id="val_semester"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="saveenroll();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<div id="updateenrollstudent" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-edit"></i> Edit Enrolment Info</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 8px;">
                    <div class="col-md-12" >
                        <label>Account No.:</label>
                       <input type="text" class="form-control accountno" readonly="">
                    </div>
                </div>
                 <div class="row" style="padding-bottom: 8px;">    
                    <div class="col-md-12" >
                        <label>Name:</label>
                        <input type="text" class="form-control fullname" readonly="">
                    </div>
                </div>
                <div class="row" style="padding-bottom: 8px;">
                    <div class="col-md-12" >
                        <label>Year Level:</label>
                        <select id="yearlevel_edit" class="form-control loadyearlevel" ></select>
                        <div id="val_yearlevel_edit"></div>
                    </div>
                </div>
                 <div class="row" style="padding-bottom: 8px;">
                    <div class="col-md-12" >
                        <label>Academic Year:</label>
                        <select class="form-control academicyear" id="academicyear_edit">
                            <option value="">~ Select ~</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                        </select>
                       <div id="val_academicyear_edit"></div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 8px;">
                    <div class="col-md-12" >
                        <label>Department:</label>
                        <select class="form-control department" id="department_edit"></select>
                         <div id="val_department_edit"></div>
                    </div>
                </div>
                 <div class="row" style="padding-bottom: 8px;"> 
                    <div class="col-md-12" >
                        <label>Semester:</label>
                        <select class="form-control" id="semester_edit">
                            <option value="">~ Select ~</option>
                            <option value="First">First</option>
                            <option value="Second">Second</option>
                        </select>
                       <div id="val_semester_edit"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="saveupdateenroll();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>


<div id="subjectlist" class="modal bs-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;"  data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myLargeModalLabel"><i class="fas fa-book"></i> Student Subject List</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <div class="row col-md-6">
                    <div class="col-md-6">
                        <label>Semester:</label>
                        <input type="text" class="form-control semester" readonly="">
                    </div>
                    <div class="col-md-6">
                        <label>School Year:</label>
                        <input type="text" class="form-control academicyear" readonly="">
                        <input type="hidden" class="form-control department" readonly="">
                    </div>
                </div>
                     <div class="row" style="padding-bottom: 5px;">
                        <div class="col-md-12">
                            <button class="btn btn-success float-right" onclick="modals('subjavailable','show','subjectlist','hide');"><i class="fas fa-edit"></i> Manage Subject</button>
                        </div>
                     </div>
                     <div class="table-responsive m-t-40">
                     <table id="tblsubjlist" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="bg-info text-white">
                            <tr>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Instructor</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Subject</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Room</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Schedule</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Grade Level</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">No. of Units</th>
                            </tr>
                        </thead>                                                                       
                        <tbody id="listsubject"></tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
               <!--  <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button> -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<div id="subjavailable" class="modal bs-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;"  data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myLargeModalLabel"><i class="fas fa-book"></i> List of Available Subject</h4>
                <button type="button" class="close" aria-hidden="true" onclick="modals('subjectlist','show','subjavailable','hide');">×</button>
            </div>
            <div class="modal-body" style="overflow: auto;">
            <div class="row col-md-6">
                    <div class="col-md-6">
                        <label>Semester:</label>
                        <input type="text" class="form-control semester" readonly="">
                    </div>
                    <div class="col-md-6">
                        <label>School Year:</label>
                        <input type="text" class="form-control academicyear" readonly="">
                        <input type="hidden" class="form-control department" readonly="">
                    </div>
                </div>
                <div class="table-responsive m-t-40">
             <table id="tableClassList" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="bg-info text-white">
                    <tr>
                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Subject ID</th>
                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Class Code</th>
                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Instructor</th>
                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Schedule</th>
                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Room</th>
                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Students</th>
                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;"></th>
                    </tr>
                </thead>                                                                       
                <tbody id="loadclasslist"></tbody>
            </table>
            </div>
            <div class="modal-footer">
               <!--  <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button> -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>