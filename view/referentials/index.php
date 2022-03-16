 <!-- 10-24-21 ADDED REFERENTIALS BY MICHAEL -->
 <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
        	<div class="card-header bg-info">
                <h4 class="card-title text-white">Referentials</h4>
        	</div>
            <div class="card-body">
                <div class="vtabs">
                    <ul class="nav nav-tabs tabs-vertical" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#subject" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Subject</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#gradelevel" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Grade Level</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#faculty" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Faculty</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#department" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Department</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rooms" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Rooms</span></a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content col-md-12">
                    	<!-- list of subect -->
                        <div class="tab-pane active" id="subject" role="tabpanel">
                            <div class="col-md-12">
                             <div class="row">
                             	 <div class="col-md-6">
                            	 	<h3>List of Subject</h3>
                             	 </div>
                             	 <div class="col-md-6">
                             	 	<button class="btn btn-success float-right" onclick="addsubj();"><i class="fas fa-plus"></i> Add Subject</button>
                             	 </div>
                             </div>
		                     <table id="tablesubject" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
		                        <thead class="bg-info text-white">
		                                <tr>
		                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Subject</th>
		                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Description</th>
		                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Grade Level</th>
		                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Option</th>
		                                </tr>
		                            </thead>                                                                       
		                            <tbody id="datasubject"></tbody>
		                        </table>
                            </div>
                        </div>

                        <!-- LIST OF YEAR LEVEL -->
                        <div class="tab-pane" id="gradelevel" role="tabpanel">
                            <div class="col-md-12">
                             <div class="row">
                             	 <div class="col-md-6">
                            	 	<h3>List of Grade Level</h3>
                             	 </div>
                             	 <div class="col-md-6">
                             	 	<button class="btn btn-success float-right" onclick="addsubj();"><i class="fas fa-plus"></i> Add Grade Level</button>
                             	 </div>
                             </div>
		                     <table id="tablesubject" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
		                        <thead class="bg-info text-white">
		                                <tr>
		                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Grade</th>
		                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Description</th>
		                                    <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Option</th>
		                                </tr>
		                            </thead>                                                                       
		                            <tbody id="datasubject"></tbody>
		                        </table>
                            </div>
                        </div>
                        <div class="tab-pane p-3" id="faculty" role="tabpanel">3</div>
                        <div class="tab-pane p-3" id="department" role="tabpanel">4</div>
                        <div class="tab-pane p-3" id="rooms" role="tabpanel">5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

 <?php 
 	include 'script.php'; 
 	include 'modals.php';
 ?>