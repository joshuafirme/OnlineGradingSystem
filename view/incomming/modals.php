 <div id="viewManageGrade" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-search"></i>Review Grades</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
           	<div class="row col-md-12">
             		<div class="col-md-3">
             			<label>Instructor</label>
             			<input type="text" class="form-control" id="instructor" readonly>
             		</div>
             		<div class="col-md-3">
             			<label>Subject</label>
             			<input type="text" class="form-control" id="subject" readonly>
             		</div>
<!--                 <div class="col-md-3">
                  <label>Year Level</label>
                  <input type="text" class="form-control" id="yearlevel" readonly>
                </div> -->
             		<div class="col-md-3">
             			<label>Section</label>
             			<input type="text" class="form-control" id="section" readonly>
             		</div>
           	</div>
            <hr>
                <div class="table-responsive m-t-40">
                 <table id="tblmanageGrade" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead class="bg-info text-white">
                            <tr>
                                <th><input type="checkbox" id="select_all"></th>
                                <th></th>
                                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Student Name</th>
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
                <a class="btn btn-success" href="javascript:void(0)" onclick="approvedGrade();"><i class="fas fa-thumbs-up"></i> Approve</a>
				<a class="btn btn-danger" href="javascript:void(0)" onclick="declinedGrade('<?php echo $row['id']; ?>');"><i class="fas fa-thumbs-down"></i> Decline</a>
            </div>
        </div>
    </div>
</div>

 <div id="declinedGrade" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog  modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-list"></i>Reason for Decline</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            	<div class="col-md-12">
            		<input type="hidden" id="declinedid" >
            		<textarea class="form-control" id="remarks" rows="4"></textarea>
            	</div>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-danger" onclick="savedeclined();"><i class="fas fa-thumbs-down"></i> Decline</button>
            </div>
        </div>
    </div>
</div>