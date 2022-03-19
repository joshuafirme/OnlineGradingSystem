 <!-- MODIFIED BY JOSH -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-folder"></i> School Year Maintenance</h3>
    </div>
</div>
 <?php 
 if ($_GET['url'] == 'school_yr_maintenance' && !isset($_GET['sy'])) {
  ?>
<div class="col-md-12">
	<div class="card-header  bg-info">
		<h3 class="text-white"><i class="fas fa-list"></i> School Year Maintenance</h3>
	</div>
	<div class="card" style="padding-top: 5px;box-shadow: 3px 5px 5px 3px #888888; padding: 3px;">
		<div class="card-body">
		     <table id="tableClassList" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead class="bg-info text-white">
		            <tr>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">School Year</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;"></th>
		            </tr>
		        </thead>                                                                       
		        <tbody id="loadclasslist"></tbody>
		    </table>
		</div>		
	</div>
</div>
<?php 
 	}
	 else {
		$term = $_GET['term'] == '1st' ? 'First' : 'Second';
		$subtitle = $_GET['sy'] . ' ' . $term . ' Term Records';
 ?>

		
<div class="row" style="padding-bottom: 15px;">
    <div class="col-md-12">
        <a class="btn btn-danger" href="index.php?url=school_yr_maintenance"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
</div>

<div class="col-md-12">
	<div class="card-header  bg-info">
		<h3 class="text-white"><i class="fas fa-list"></i> <?php echo $subtitle ?></h3>
	</div>
	<div class="card" style="padding-top: 5px;box-shadow: 3px 5px 5px 3px #888888; padding: 3px;">
		<div class="card-body">
		     <table id="tableInstructorList" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead class="bg-info text-white">
		            <tr>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Instructor</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Subject</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Section</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Grades</th>
		            </tr>
		        </thead>                                                                       
		        <tbody id="load-instructor-list"></tbody>
		    </table>
		</div>		
	</div>
</div>

 <?php 
	}
 	include 'script.php'; 
 	include 'modals.php';
 	include 'alertmessage/alertscript.php';
 ?>