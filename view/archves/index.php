<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="bg-info card-header">
             <h4 class="text-white  card-title">Archives</h4>
        </div>
        <div class="card">
            <div class="card-body">
               
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Users</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="p-3">
                                        <div class="table-responsive m-t-40">
                                         <table id="loadusersTbl" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead class="bg-info text-white">
                                                    <tr>
                                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Account No.</th>
                                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;"></th>
                                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Name</th>
                                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Account Type</th>
                                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Status</th>
                                                        <th style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;">Action</th>
                                                    </tr>
                                                </thead>                                                                       
                                                <tbody id="loaduserTeacherTBL"></tbody>
                                            </table>
                                        </div>

                        </div>
                    </div>
<!--                     <div class="tab-pane  p-3" id="profile" role="tabpanel">2</div>
                    <div class="tab-pane p-3" id="messages" role="tabpanel">3</div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'script.php'; ?>