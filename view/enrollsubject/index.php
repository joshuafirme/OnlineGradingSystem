 <!-- ADDED 11-17-21 MICHAEL -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-user"></i> Student Subject</h3>
    </div>
</div>
<div class="col-md-12" style="padding-top: 15px;">
	<div class="card-header  bg-info">
		<h3 class="text-white"><i class="fas fa-list"></i> List of Subject</h3>
	</div>
	<div class="card" style="padding-top: 5px;box-shadow: 3px 5px 5px 3px #888888; padding: 3px;">
		<div class="card-body">
			<div class="row col-md-6">
				<div class="col-md-6">
					<label>Student:</label>
					<input type="hidden" value="<?php echo $_GET['id']; ?>" id="userID" >
					<input type="text" class="form-control" id="fullname" readonly="">
				</div>
				<div class="col-md-6">
					<label>Year Level</label>
					<input type="text" class="form-control" id="specialization" readonly="">
				</div>
			</div>
		     <div class="row" style="padding-bottom: 5px;">
		     	<div class="col-md-12">
		     		<button class="btn btn-success float-right" onclick="addloads();"><i class="fas fa-plus"></i> Add loads</button>
		     	</div>
		     </div>
		     <table id="tableFaculty" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead class="bg-info text-white">
		            <tr>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Subject ID</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Subject</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Description</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Grade Level</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Room</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Schedule</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Students</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Option</th>
		            </tr>
		        </thead>                                                                       
		        <tbody id="listsubject"></tbody>
		    </table>

	<div class="row" style="padding-top: 15px;">
		<div class="col-md-12">
			<a href="index.php?url=faculty" class="btn btn-danger" ><i class="fas fa-arrow-left"></i> Back</a>
		</div>
	</div>
		</div>		
	</div>
</div>
 <?php 
 	include 'script.php'; 
 	include 'modals.php';
 	include 'alertmessage/alertscript.php';
 ?>