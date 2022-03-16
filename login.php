<?php
    session_start();
    if( isset( $_SESSION['userID'] ) ){
        header("Location:index.php?url=dashboard");
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
<!--     <link rel="icon" type="image/png" sizes="16x16" href="assets/images/phlogo.png"> -->
    <title>Senior High School Online Grading</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header style="background-color: #201D1E;">
            <nav class="navbar top-navbar navbar-expand-md navbar-light" style="">
                <h3 class="text-white" style="padding-top: 5px;">Senior High School Online Grading</h3>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
                <section id="wrapper">
                    <div class="login-register" style="background-image:url(assets/images/background/bbbbggg.jpg);">        
                        <div class="login-box card rounded" style="background-color: #201D1E;">

                        <div class="card-body" style="padding: 25px;">
                            <div id="loginForm">
                                   <center style="padding-bottom: 10px;">
                                        <i class="fas fa-user-circle " style="font-size: 70px; background-color: #201D1E; color: #728FCE; border-radius: 50%;"></i>
                                   </center>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div style="padding-bottom: 5px; text-align: center;">
                                                <div class="text-white bg-danger rounded" id="loginResult" ></div>
                                            </div>
                                            <input class="form-control text-center nospace" type="text" placeholder="Please Enter Email Address"  id="accountno" style="padding: 25px;"> 
                                            <div style="text-align: center;" class="text-white bg-danger rounded login_accountno" id="MinLengthaccountno" ></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12"> 
                                            <input class="form-control text-center nospace" type="password" placeholder="Please Enter Password" id="password" style="padding: 25px;"> 
                                            <div style="text-align: center;" class="text-white bg-danger rounded login_password" id="MinLengthpassword"></div>
                                        </div>
                                    </div>                
                                    <div class="form-group text-center mt-3">
                                        <div class="col-xs-12">
                                            <button id="loginEnter" class="btn btn-block text-uppercase waves-effect waves-light text-white" onclick="LogInChck()" style="padding: 20px; background-color: #728FCE;"><i class="fas fa-sign-in-alt"></i> Sign In</button>
                                        </div>
                                    </div>  
<!--                                     <div class="form-group text-center mt-3">
                                        <div class="col-xs-12" style="text-align: right;">
                                              <a href="javascript:void(0)" onclick="forgotForm('loginForm','forgotForm')" class="text-white" ><u>Forgot Password</u></a>
                                        </div>
                                    </div> -->
                                 </div>
<!--                                     <div id="forgotForm">
                                        <h3 class="text-white" style="padding-top: 15px; padding-left: 15px;">Password Recovery</h3>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control text-center nospace" type="text" placeholder="accountno Address"  id="accountno_forgot"> 
                                                    <div style="text-align: center;" class="text-white bg-danger rounded accountno_forgot" id="accountno_forgot_val"></div>
                                                </div>
                                            </div>
                                            <div class="form-group text-center mt-3">
                                                <div class="col-xs-12">
                                                    <button id="forgotbtn" class="btn btn-block btn-success text-uppercase waves-effect waves-light text-white" onclick="sendForgot()"><i class="fas fa-sign-in-alt"></i> Request Password Recovery</button>
                                                    <button class="btn btn-success" type="button"  id="loadingbtn" disabled>
                                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                      Sending Password Recovery...
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="form-group text-center mt-3">
                                                <div class="col-xs-12" style="text-align: right;">
                                                      <a href="javascript:void(0)" onclick="forgotForm('forgotForm','loginForm')" class="text-white" ><u>Back to Login</u></a>
                                                </div>
                                            </div> 
                                    </div>   -->                 
                                
                            </div>

                          </div>
        </div>
        
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
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
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweetalert2/sweet-alert.init.js"></script>
<!-- footer -->
<!-- ============================================================== -->
<footer class="text-white" style="background-color: #000000b8; padding: 15px;" >
    <center><b style="padding: 5px">ARS-System Portal 2021</b></center>
</footer>
<!-- ============================================================== -->
<!-- End footer -->

 <?php 

    include 'view/login/script.php';
?>
</body>
</html> 