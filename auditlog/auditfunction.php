<?php 

 	function insertLog($remarks,$module,$info,$action) {
		$connect = mysqli_connect("localhost","root","","gradingdb");
		$sqlselectLog = "SELECT max(id) FROM tbl_logs ORDER BY id DESC LIMIT 1";
		$resLog = mysqli_query( $connect , $sqlselectLog );
		$rowLog = mysqli_fetch_array($resLog);
		$genId = genId($rowLog[0],"LOG");

		$get_client_ip = getUserIpAddr();
		$client_ip = $_SERVER['REMOTE_ADDR'];
		$ua = getBrowser();
		$yourbrowser=  'Browser: <font color="green">'.$ua['name'] . ' ' . $ua['version'] . '</font> on <font color="blue">' .$ua['platform'] . '</font><br> Reports: <font color="orange">' . $ua['userAgent'].'</font><br> IP Address: '.$client_ip;

		$sqlInsertLog = "INSERT INTO tbl_logs SET logID = '".$genId."' ,userid = '".$_SESSION['userID']."', email = '".$_SESSION['email']."', date = CURDATE(), time = CURTIME(), remarks = '".$_SESSION['email']." ".$remarks."', name = '".$_SESSION['fname']." ".$_SESSION['lname']."', module = '".$module."', info = '".$info."', action = '".$action."', browser = '".$yourbrowser."', ipaddress = '".$client_ip."'";
		$insLog = mysqli_query($connect, $sqlInsertLog);
	}

  function genId($val,$prefix){
    $cnt = "";
    if( isset( $val ) ){
      $cnt = $val;
    } else {
      $cnt = 0;
    }
    return $prefix."-".str_pad( ($cnt+1) , 6 , '0' , STR_PAD_LEFT );
  }

  function getBrowser(){
      $u_agent = $_SERVER['HTTP_USER_AGENT'];
      $bname = 'Unknown';
      $platform = 'Unknown';
      $version= "";
      //First get the platform?
      if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
      }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
      }elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
      }
      // Next get the name of the useragent yes seperately and for good reason
      if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
        $bname = 'Internet Explorer';
        $ub = "MSIE";
      }elseif(preg_match('/Firefox/i',$u_agent)){
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
      }elseif(preg_match('/OPR/i',$u_agent)){
        $bname = 'Opera';
        $ub = "Opera";
      }elseif(preg_match('/Chrome/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
        $bname = 'Google Chrome';
        $ub = "Chrome";
      }elseif(preg_match('/Safari/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
        $bname = 'Apple Safari';
        $ub = "Safari";
      }elseif(preg_match('/Netscape/i',$u_agent)){
        $bname = 'Netscape';
        $ub = "Netscape";
      }elseif(preg_match('/Edge/i',$u_agent)){
        $bname = 'Edge';
        $ub = "Edge";
      }elseif(preg_match('/Trident/i',$u_agent)){
        $bname = 'Internet Explorer';
        $ub = "MSIE";
      }
      // finally get the correct version number
      $known = array('Version', $ub, 'other');
      $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
      if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
      }
      // see how many we have
      $i = count($matches['browser']);
      if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }else {
  /*          $version= $matches['version'][1];*/
        $version = "";
        }
      }else {
        $version= $matches['version'][0];
      }
      // check if we have a number
      if ($version==null || $version=="") {$version="?";}
      return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern 
      );
    } 

    function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    function genInfo($prefix, $old , $new){
      $ret = "";
      if ( $old != $new) {
        $ret = '<b>'.$prefix.':</b><br> - From: <font color="red">'.$old.' </font><br> - to: <font color="green">'.$new.'</font><br/>';
      }
      return $ret;
    } 
?>