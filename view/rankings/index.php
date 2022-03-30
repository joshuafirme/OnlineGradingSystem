 <!-- ADDED 10-24-21 MICHAEL -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-trophy"></i> Rankings</h3>
    </div>
</div>
<div class="col-md-12">
	<div class="card-header  bg-info">
		<h3 class="text-white"><i class="fas fa-list"></i> List of Students</h3>
	</div>
	<div class="card" style="padding-top: 5px;box-shadow: 3px 5px 5px 3px #888888; padding: 3px;">
		<div class="card-body">
			<div class="row" style="padding-bottom: 15px;">
				<div class="col-md-2">
					<label>Academic Year</label>
					<select class="form-control" id="academicyear">
						<option value="2020-2021">2020-2021</option>
						<option value="2021-2022">2021-2022</option>
					</select>
				</div>
				<div class="col-md-2">
					<label>Year and Level</label>
					<select class="form-control yearlevel" id="yearlevel"></select>
				</div>
				<div class="col-md-2">
					<label>Course</label>
					<select class="form-control loaddepartment" id="course"></select>
				</div>
				<div class="col-md-3" style="padding-top: 30px;">
					<button class="btn btn-success" onclick="loadstudents()"><i class="fas fa-search"></i> Filter</button>
				</div>
			</div>
			<div>
			     <table id="tblstudent" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
			        <thead class="bg-info text-white">
			            <tr>
			                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;"></th>
			                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Name</th>
			                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Year Level</th>
			                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Course</th>
			                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Total Average</th>
							<th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;"></th>
			            </tr>
			        </thead>                                                                       
			        <tbody id="loadstudents"></tbody>
			    </table>	
				<div class="mt-2 ml-4">90-94 = w/honor</div>
				<div class="mt-2 ml-4">95-97 = w/high honor</div>
				<div class="mt-2 ml-4">98-99 = w/highest</div>		
			</div>

		</div>		
	</div>
</div>
 <?php 
 	include 'script.php'; 
 	include 'modals.php';
 	include 'alertmessage/alertscript.php';
 ?>