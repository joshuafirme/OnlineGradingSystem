<?php 
error_reporting(E_ALL);
  session_start(); 
  date_default_timezone_set('Asia/Kuala_Lumpur');

  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'gradingdb');
  define('EMAIL', ' ');
  define('PASSWORD', '');

  $connect = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
  if($connect === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  $url = "http://localhost/OnlineGradingSystem";
?>