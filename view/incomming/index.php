 <!-- MODIFIED BY JOSH -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-clipboard"></i> Incoming Grades</h3>
    </div>
</div>
<div class="col-md-12">
	<div class="card-header  bg-info">
		<h3 class="text-white"><i class="fas fa-list"></i> List of Pending</h3>
	</div>
	<div class="card" style="padding-top: 5px;box-shadow: 3px 5px 5px 3px #888888; padding: 3px;">
		<div class="card-body">
		     <table id="tableClassList" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead class="bg-info text-white">
		            <tr>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Instructor</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Subject</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Section</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Students</th>
		                <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Grades</th>
		            </tr>
		        </thead>                                                                       
		        <tbody id="loadclasslist"></tbody>
		    </table>
		</div>		
	</div>
</div>
 <?php 
 	include 'script.php'; 
 	include 'modals.php';
 	include 'alertmessage/alertscript.php';
 ?>