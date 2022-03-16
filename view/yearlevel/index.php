 <!-- ADDED 10-24-21 MICHAEL -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-chart-bar"></i> Grade Level</h3>
    </div>
</div>
<div class="col-md-12">
	<div class="card-header  bg-info">
		<h3 class="text-white">List of Grade Level's</h3>
	</div>
	<div class="card" style="padding-top: 5px;box-shadow: 3px 5px 5px 3px #888888; padding: 3px;">
		<div class="card-body">
		     <div class="row" style="padding-bottom: 5px;">
		     	<div class="col-md-12">
		     		<button class="btn btn-success float-right" onclick="addgrade();"><i class="fas fa-plus"></i> Add Grade Level</button>
		     	</div>
		     </div>
		     <table id="tablegradelevel" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead class="bg-info text-white">
		            <tr>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Grade</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Description</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Option</th>
		            </tr>
		        </thead>                                                                       
		        <tbody id="datagradelevel"></tbody>
		    </table>
		</div>		
	</div>
</div>
 <?php 
 	include 'script.php'; 
 	include 'modals.php';
 	include 'alertmessage/alertscript.php';
 ?>