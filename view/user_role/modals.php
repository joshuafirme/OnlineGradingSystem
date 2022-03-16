   <div id="addNewRole" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-plus"></i> Add New Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            	<div class="row col-md-12" style="padding-bottom: 15px;" >
	            	<label><b>Role Name:</b></label>
	            	<input type="text" class="form-control" placeholder="Role Permission Name" id="rolename">
                    <span id="rolename_val"></span>
            	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success waves-effect" onclick="savenewRole()" ><i class="fas fa-plus"></i> Add</button>
            </div>
        </div>
    </div>
</div>

   <div id="updateRole" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-edit"></i> Update Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row col-md-12" style="padding-bottom: 15px;" >
                    <label><b>Role ID:</b></label>
                    <input type="text" class="form-control"  id="roleid" readonly="">
                </div>
                <div class="row col-md-12" style="padding-bottom: 15px;" >
                    <label><b>Role Name:</b></label>
                    <input type="text" class="form-control" placeholder="Role Permission Name" id="rolename_update">
                    <span id="rolename_val_update"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success waves-effect" onclick="saveUpdateRole()" ><i class="fas fa-check"></i> Update</button>
            </div>
        </div>
    </div>
</div>


<div id="userAccess" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="myLargeModalLabel"><i class="fas fa-unlock-alt" ></i>&nbsp;Set User Role Access</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
               <div id="viewuseraccessibilityhtml"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect text-left" onclick="saveUserAccessPermission();">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>