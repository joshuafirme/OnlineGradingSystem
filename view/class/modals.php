   <div id="addschedule" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-calendar"></i> Add Schedule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-6" >
                        <label>Subject Code</label>
                        <input type="hidden" class="form-control" readonly="" id="classid">
                        <input type="text" class="form-control" readonly="" id="subject">
                    </div>
                    <div class="col-md-6">
                        <label>Subject Description:</label>
                        <input type="text" class="form-control" readonly="" id="subjectdesc">
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-6">
                        <label>Grade Level:</label>
                        <input type="text" class="form-control" readonly="" id="yearlevel">
                    </div>
                    <div class="col-md-6">
                        <label>Academic Year:</label>
                        <input type="text" class="form-control" readonly="" id="academicyear">
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px">
                    <div class="col-md-6" >
                        <label>Room:</label>
                        <select class="form-control" id="loadroom" ></select>
                    </div>
                    <div class="col-md-6">
                        <label>Section:</label>
                        <input type="text" class="form-control" id="section" placeholder="Section">
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;" >
                    <div class="col-md-6" >
                        <label>Days:</label>
                        <select class="form-control loaddays" id="days" ></select>
                    </div>
                    <div class="col-md-6" >
                        <label>Time:</label>
                        <select class="form-control" id="time" >
                            <option value=""> ~ Select ~</option>
                            <option value="7:30-8:30 AM">7:30-8:30 AM</option>
                            <option value="8:30-9:30 AM">8:30-9:30 AM</option>
                            <option value="9:30-10:30 AM">9:30-10:30 AM</option>
                            <option value="10:30-11:30 AM">10:30-11:30 AM</option>
                            <option value="11:30-12:30 PM">11:30-12:30 PM</option>
                            <option value="12:30-1:30 PM">12:30-1:30 PM</option>
                            <option value="1:30-2:30 PM">1:30-2:30 PM</option>
                            <option value="2:30-3:30 PM">2:30-3:30 PM</option>
                            <option value="3:30-4:30 PM">3:30-4:30 PM</option>
                            <option value="4:30-5:30 PM">4:30-5:30 PM</option>
                            <option value="5:30-6:30 PM">5:30-6:30 PM</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="loadingbtn" class="btn btn-rounded btn-success hide" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading . . .
                </button>
                <button type="button" id="defaultbtn" class="btn btn-success waves-effect" onclick="saveschedule();"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<div id="viewclasslist" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-users"></i> Students</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive m-t-40">
                 <table id="tableviewclasslist" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead class="bg-info text-white">
                            <tr>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Student No.</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Name</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Age</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Course</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Year Level</th>
                            </tr>
                        </thead>                                                                       
                        <tbody id="loadstudents"></tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div id="viewManageGrade" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-edit"></i>Manage Grades</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <div class="row" style="padding-bottom: 5px;">
                <div class="col-md-12"> 
                      <button type="button" class="btn btn-success" onclick="updateGrades();"> <i class="fa fa-check"></i> Update Changes</button>
                </div>
            </div>
                <div class="table-responsive m-t-40">
                 <table id="tblmanageGrade" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead class="bg-info text-white">
                            <tr>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Name</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">1st</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">2nd</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">3rd</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">4th</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Final Avg</th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Remarks</th>
                            </tr>
                        </thead>                                                                       
                        <tbody id="loadmanagegrade"></tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>