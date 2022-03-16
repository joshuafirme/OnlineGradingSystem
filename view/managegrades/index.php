 <!-- ADDED 10-24-21 MICHAEL -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0"><i class="fas fa-chart-bar"></i> Manage Grades</h3>
    </div>
</div>
<div class="row" style="padding-bottom: 15px;">
    <div class="col-md-12">
        <a class="btn btn-danger" href="index.php?url=grades"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
</div>
<!-- <div class="row">
    

    <div class="col-md-12">
        <div class="bg-info card-header">
            <h3 class="bg-info text-white">Subject Information</h3>
        </div>
        <div class="card">
            <div class="card-body">

            </div>
        </div>
    </div>

</div>  -->   
<div class="col-md-12">
    <div class="card-header  bg-info">
        <h3 class="text-white"><i class="fas fa-list"></i> Grades</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row" style="padding-bottom: 15px;">
                    <input type="hidden" id="subjectid" value="<?php echo $_GET['SUBJ_ID']; ?>">
                    <input type="hidden" id="instructorid" value="<?php echo $_GET['UID']; ?>">
                <div class="col-md-4">
                    <label>Subject:</label>
                    <input type="text" class="form-control" id="subject"  readonly="">
                </div>
                <div class="col-md-4">
                    <label>Description:</label>
                    <input type="text" class="form-control" id="description"  readonly="">
                </div>
<!--                 <div class="col-md-4">
                    <label>Section & Year:</label>
                    <input type="text" class="form-control" id="academicyear"  readonly="">
                </div> -->
                <div class="col-md-4">
                    <label>Academic Year:</label>
                    <input type="text" class="form-control" id="academicyear"  readonly="">
                </div>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#fgrade" role="tab">1st Quarter</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#secondgrade" role="tab">2nd Quarter</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#thirdgrade" role="tab">3rd Quarter</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#f4thgrade" role="tab">4th Quarter</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#finalgrade" role="tab">General weighted Average</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#transmutation" role="tab">Transmutation Table</a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabcontent-border">
                <div class="tab-pane active" id="fgrade" role="tabpanel">
                    <div class="p-3">
                        <div class="table-responsive m-t-40">
                            <div id="loadfirstgrade"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="secondgrade" role="tabpanel">
                    <div class="p-3">
                        <div class="table-responsive m-t-40">
                              <div id="loadsecondgrade"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="thirdgrade" role="tabpanel">
                    <div class="p-3">
                        <div class="table-responsive m-t-40">
                            <div id="loadthirdgrade"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="f4thgrade" role="tabpanel">
                    <div class="p-3">
                        <div class="table-responsive m-t-40">
                             <div id="loadf4thgrade"></div>  
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="transmutation" role="tabpanel">
                    <div class="p-3">
                        <div class="table-responsive m-t-40">
                            <img src="transmutedgrade.png">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="finalgrade" role="tabpanel">
                    <div class="p-3">
                        <div class="table-responsive m-t-40">
                         <table id="tbfinalgrade" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead class="bg-info text-white">
                                    <tr>
                                       <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th>
                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Name</th>
                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">1st</th>
                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">2nd</th>
                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">3rd</th>
                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">4th</th>
                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Final Avg</th>
                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Remarks</th>
                                    </tr>
                                </thead>                                                                       
                                <tbody id="loadfinalGrade"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>
 <?php 
    include 'script.php'; 
    include 'alertmessage/alertscript.php';
 ?>