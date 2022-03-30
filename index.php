<?php 
   session_start();
   if (!isset($_SESSION['userID'])) {
    header("location:login.php");
   }
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/phlogo.png">
    <title>Senior Highschool Online Grading</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables.net-bs4/css/responsive.dataTables.min.css">

    <link href="assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">
    <link href="assets/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="assets/plugins/colorbox/colorbox.min.css" rel="stylesheet">   
    <link href="assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <link href="css/mystyle.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
  <!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--stickey kit --> 
<script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
   <!-- Sweet-Alert  -->
<script src="assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert2/sweet-alert.init.js"></script>
<!-- ============================================================== -->
<!-- This is data table -->
<script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="assets/plugins/tiny-editable/numeric-input-example.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>    
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="assets/plugins/dropzone-master/dist/dropzone.js"></script>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper" style="zoom: 80% !important;">
    <?php include 'topheader.php'; ?> 
    <?php include 'sidenav.php'; ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                 <?php
                if(!isset($_REQUEST['url']) ) {
                    include 'view/dashboard/index.php'; 
                } else {
                    if($_REQUEST['url'] == 'dashboard') {
                            include("view/dashboard/index.php");
                    } else if ($_REQUEST['url'] == 'user_access') {
                            include 'view/user_access/index.php'; 
                    } else if ($_REQUEST['url'] == 'user_role') {
                            include 'view/user_role/index.php'; 
                    }else if ($_REQUEST['url'] == 'auditrail') {
                            include 'view/auditrail/index.php'; 
                    }else if ($_REQUEST['url'] == 'profile') {
                            include 'view/profile/index.php'; 
                    }else if ($_REQUEST['url'] == 'subject') {
                            include 'view/subject/index.php'; 
                    }else if ($_REQUEST['url'] == 'yearlevel') {
                            include 'view/yearlevel/index.php'; 
                    }else if ($_REQUEST['url'] == 'department') {
                            include 'view/department/index.php'; 
                    }else if ($_REQUEST['url'] == 'rooms') {
                            include 'view/rooms/index.php'; 
                    }else if ($_REQUEST['url'] == 'faculty') {
                            include 'view/faculty/index.php'; 
                    }else if ($_REQUEST['url'] == 'loads') {
                            include 'view/loads/index.php'; 
                    }else if ($_REQUEST['url'] == 'class') {
                            include 'view/class/index.php'; 
                    }else if ($_REQUEST['url'] == 'enroll') {
                            include 'view/enroll/index.php'; 
                    }else if ($_REQUEST['url'] == 'enrollmentrecord') {
                            include 'view/enrollmentrecord/index.php'; 
                    }else if ($_REQUEST['url'] == 'enrollsubject') {
                            include 'view/enrollsubject/index.php'; 
                    }else if ($_REQUEST['url'] == 'approval') {
                            include 'view/incomming/index.php'; 
                    }else if ($_REQUEST['url'] == 'approved') {
                            include 'view/approved/index.php'; 
                    }else if ($_REQUEST['url'] == 'days') {
                            include 'view/days/index.php'; 
                    }else if ($_REQUEST['url'] == 'grades') {
                            include 'view/grades/index.php'; 
                    }else if ($_REQUEST['url'] == 'managegrades') {
                            include 'view/managegrades/index.php'; 
                    }else if ($_REQUEST['url'] == 'rankings') {
                            include 'view/rankings/index.php'; 
                    }else if ($_REQUEST['url'] == 'declined') {
                            include 'view/decline/index.php'; 
                    }else if ($_REQUEST['url'] == 'awardtitle') {
                            include 'view/award_ref/index.php'; 
                    }else if ($_REQUEST['url'] == 'myrecords') {
                            if ($rowmodule['role_name'] == 'admin') {
                                include 'view/myrecords/admin.php'; 
                            }
                            else {
                                include 'view/myrecords/index.php'; 
                            }
                    }else if ($_REQUEST['url'] == 'school_yr_maintenance') {
                            include 'view/school-yr-maintenance/index.php'; 
                    }else if ($_REQUEST['url'] == 'archives') {
                            include 'view/archves/index.php'; 
                        }else if ($_REQUEST['url'] == 'print_report') {
                                include 'view/print-report/index.php'; 
                        }
                }
               ?> 
            </div>
   <?php include 'footer.php'; ?>
        </div>
    </div>
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="assets/plugins/dropify/dist/js/dropify.min.js"></script>
    <script src="assets/plugins/toast-master/js/jquery.toast.js"></script>  
    <script src="assets/plugins/colorbox/jquery.colorbox.js"></script>
    <script src="assets/plugins/dropzone-master/dist/dropzone.js"></script>
 <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
        </script>
</body>

</html>