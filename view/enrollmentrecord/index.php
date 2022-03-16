 <!-- ADDED 11-17-21 MICHAEL -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-user"></i> Student Enrollment Records</h3>
    </div>
</div>
<div class="row" style="padding-bottom: 15px;">
	<div class="col-md-12">
		<a class="btn btn-danger" href="index.php?url=enroll"><i class="fas fa-arrow-left"></i> Back</a>
	</div>
</div>
<div class="col-md-12">
	<div class="card-header  bg-info">
		<h3 class="text-white"><i class="fas fa-list"></i> List of Enrollment Records</h3>
	</div>

	<div class="card" style="padding-top: 5px;box-shadow: 3px 5px 5px 3px #888888; padding: 3px;">
		<div class="card-body">
	<input type="hidden" value="<?php echo $_GET['id']; ?>" id="userID">
	<input type="hidden" id="enrollmentid">
			<div class="row col-md-6">
				<div class="col-md-6">
					<label>Account No:</label>
					<input type="text" class="form-control accountno" readonly="">
				</div>
				<div class="col-md-6">
					<label>Student Name:</label>
					<input type="text" class="form-control fullname" readonly="">
				</div>
			</div>
     <div class="row" style="padding-bottom: 5px;">
     	<div class="col-md-12">
     		<button class="btn btn-success float-right" onclick="enrollstudent();"><i class="fas fa-plus"></i> Enroll Student</button>
     	</div>
     </div>
     	<div class="table-responsive m-t-40">
		     <table id="tblrecords" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead class="bg-info text-white">
		            <tr>
		            	<th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Semester</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Grade Level</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">School Year</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Department</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Total Subject</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Total Units</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Date Enrolled</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Status</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Option</th>
		            </tr>
		        </thead>                                                                       
		        <tbody id="loadrecords"></tbody>
		    </table>
		</div>
		</div>		
	</div>
</div>
 <?php 
 	include 'script.php'; 
 	include 'modals.php';
 	include 'alertmessage/alertscript.php';
 ?>