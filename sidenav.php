<?php 
        include 'connection/connect.php';

        $userID = $_SESSION['userID'];
        $sql = "SELECT user_role FROM tbl_users WHERE userID = '".$userID."'";
        $res = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($res);

        $modules = "SELECT * FROM tbl_user_role WHERE role_id = '".$row[0]."'";
        $resmodule = mysqli_query($connect, $modules);
        $rowmodule = mysqli_fetch_array($resmodule);
?>
<script type="text/javascript">
    $(function() {
        setInterval(function(){
         counts(); 
        }, 1000);
    })
    function counts(){
        $.ajax({
            type:'POST',
            url:'view/incomming/class.php',
            data:'form=countRequest',
            success:function(data){
                var show = data.split('|');
                $('#countRequest').text(show[0]);
                 $('#countApproved').text(show[1]);
                  $('#countDeclined').text(show[2]);
            }
        })
    }
</script>


<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
<!--                 <?php 
                if ($rowmodule['view_dashboard'] == 1) {

                    echo $rowmodule['view_dashboard'];
                    ?>
                    <li>
                        <a href="index.php?url=dashboard" class="dropdown-item"><i class="fas fa-home"></i> Dashboard</a>
                    </li>
                    <?php
                }
                ?> -->
                <?php 
                if ($rowmodule['view_incomming_request'] == 1) {
                    ?>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fas fa-bell"></i><span class="hide-menu"> Notification Request</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <?php 
                                if ($rowmodule['view_pendings'] == 1) {
                                    ?>
                                    <li><a href="index.php?url=approval" class="dropdown-item"><i class="fas fa-arrow-right"></i> Submitted Grades <span class="label label-rounded label-warning" id="countRequest">0</span></a></li>
                                    <?php
                                } 
                            ?>
                             <li><a href="index.php?url=approved" class="dropdown-item"><i class="fas fas fa-thumbs-up"></i> Approved Grades <span class="label label-rounded label-success" id="countApproved">0</span></a></li>
                             <li><a href="index.php?url=declined" class="dropdown-item"><i class="fas fas fa-thumbs-down"></i> Declined Grades<span class="label label-rounded label-danger" id="countDeclined">0</span></a></li>
                        </ul>
                    </li>
                    <?php
                }
                ?>
                <?php 
                if ($rowmodule['view_referentials'] == 1) {
                    ?>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fas fa-list"></i><span class="hide-menu">Referentials </span></a>
                        <ul aria-expanded="false" class="collapse">
                              <!-- <li><a href="index.php?url=awardtitle" class="dropdown-item"><i class="fas fa-calendar"></i> Award Title</a></li> -->
                              <li><a href="index.php?url=days" class="dropdown-item"><i class="fas fa-calendar"></i> Days</a></li>
                              <li><a href="index.php?url=yearlevel" class="dropdown-item"><i class="fas fa-chart-bar"></i> Grade Level</a></li>
                              <li><a href="index.php?url=rooms" class="dropdown-item"><i class="fas fa-box"></i> Rooms</a></li>
                              <li><a href="index.php?url=department" class="dropdown-item"><i class="fas fa-university"></i> STRANDS</a></li>
                              <li><a href="index.php?url=subject" class="dropdown-item"><i class="fas fa-book"></i> Subject</a></li>
                        </ul>
                    </li>
                    <?php
                }
                ?>
                <?php 
                if ($rowmodule['view_grades'] == 1 && $rowmodule['role_name'] != 'admin') {
                    ?>
                        <li><a href="index.php?url=grades" class="dropdown-item"><i class="fas fa-chart-bar"></i> Grades</a></li>
                    <?php
                }
                ?>
                <?php 
                if ($rowmodule['view_myrecords'] == 1) {
                    ?>
                        <li><a href="index.php?url=myrecords" class="dropdown-item"><i class="fas fa-book"></i> My Records</a></li>
                    <?php
                }
                ?>
                <?php 
                if ($rowmodule['view_awards'] == 1) {
                    ?>
                       <li><a href="index.php?url=rankings" class="dropdown-item"><i class="fas fa-trophy"></i> Awards</a></li>
                    <?php
                }
                ?>
                <?php 
                if ($rowmodule['view_instructor'] == 1) {
                    ?>
                      <li><a href="index.php?url=faculty" class="dropdown-item"><i class="fas fa-user"></i> Instructor</a></li>
                    <?php
                }
                ?>
                <?php 
                if ($rowmodule['view_manage_class'] == 1) {
                    ?>
                      <li><a href="index.php?url=class" class="dropdown-item"><i class="fas fa-clipboard"></i> Manage Class</a></li>
                    <?php
                }
                ?>
                <?php 
                if ($rowmodule['view_student_record'] == 1) {
                    ?>
                      <li><a href="index.php?url=enroll" class="dropdown-item"><i class="fas fa-address-card"></i> Student Records</a></li>
                    <?php
                }  
                ?>
                <?php 
                if ($rowmodule['view_manage_users'] == 1) {
                    ?>
                          <li><a href="index.php?url=user_access" class="dropdown-item"><i class="fas fa-users"></i> Manage Users</a></li>
                    <?php
                }
                ?>
                <?php 
                if ($rowmodule['view_user_role'] == 1) {
                    ?>
                                      <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><i class="fas fa-cogs"></i><span class="hide-menu"> System Setup </span></a>
                    <ul aria-expanded="false" class="collapse">
                       <!--  <li><a href="index.php?url=user_role" class="dropdown-item"><i class="fas fa-lock"></i> Permission</a></li>    -->
                        <li><a href="index.php?url=auditrail" class="dropdown-item"><i class="fas fa-history"></i> Auditrail</a></li>
                      <li><a href="index.php?url=archives" class="dropdown-item"><i class="fas fa-cycle"></i> Archives</a></li>
                    </ul>
                </li> 
                    <?php
                }
                ?>     
            </ul>
        </nav>
    </div>
    <div class="sidebar-footer" style="background-color:  #201F1E; padding: 29px;">
    </div>
</aside>