<?php

  require_once '../../vendor/autoload.php';

 function emailnotifsubjenroll($email,$uid,$fname,$mname,$lname,$url){
      $emailaddress = $email;
      // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.office365.com', 587, 'tls'))
      /*      $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))*/
        ->setUsername(EMAIL)
        ->setPassword(PASSWORD)
      ;

      // Create the Mailer using your created Transport
      $mailer = new Swift_Mailer($transport);

      // Create a message
      $message = (new Swift_Message('Notification: SHS Grading System'))
        ->setFrom([EMAIL => 'SHS Grading System'])
        ->setTo([$email])
        ->setBody("<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'https://www.w3.org/TR/html4/loose.dtd'>
  <html>
  <tr>
    <td style='padding-top: 2%;'></td>
  </tr>
  <table id='table-wrapper' width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='margin:0; padding:0; text-align:center; background-color:#fafafa; background-repeat: repeat-x; background-position: top;'>
    <tr>
      <td style='padding-top: 2%;'></td>
    </tr>
    <tr>
      <td valign='top' align='center'><table class='table' width='550' border='0' cellspacing='0' cellpadding='0' style='border-left:1px solid #D2D3D5; border-right:1px solid #D2D3D5; border-radius:8px' bgcolor='#ffffff'>
          <tr>
            <td valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td colspan='3' valign='top' height='1' style='line-height:1px' bgcolor='#D2D3D5'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
                <tr>
                  <td colspan='3' valign='top' height='36' style='line-height:36px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
                <tr>
                  <td valign='top' width='44' class='padding-v28px'><img style='display:block;' height='1' width='1' src='' border='0'></td>
                  <td valign='top'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                      <tr>
                        <td valign='top' height='32' style='line-height:32px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                      </tr>
                    </table>
                    <table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0 '>
                      <tr>
                        <td valign='top' height='22' style='line-height:22px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                      </tr>
                      <tr style='box-shadow: 0 8px 6px -6px black;'>
                        <td class='secondary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg'; font-size:12px; color:#020202; line-height:20px'><table width='100%' cellspacing='0' cellpadding='0' border='0' style='background-color:#fcfcfc; border-top:#D2D3D5 2px solid; border-right:#D2D3D5 2px solid; border-bottom:#D2D3D5 2px solid; border-left:#D2D3D5 2px solid; border-radius:6px'>
                            <tr>
                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>
                            <tr >
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                              <td valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0'>
                                  <tr>
                                    <td valign='top' height='11' style='line-height:11px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                                  </tr>
                                <tr>
                                  <td class='primary' align='left' style='font-family: Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:24px; color:#020202; line-height:36px; font-weight:bold'>Dear: ".ucwords($fname." ".$mname." ".$lname).".</td>
                                </tr>
                                <tr>
                                  <td class='primary' align='left' style='font-family: Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:24px; color:#020202; line-height:36px; font-weight:bold'>Your Email: ".$email."</td>
                                </tr>
                                <tr>
                                  <td class='primary' align='left' style='font-family: Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:24px; color:#020202; line-height:36px; font-weight:bold'>Congratulations a new student enrolled your subject to check your student's record please login to <a href='".$url."' style='color:#226b97; text-decoration:none; font-weight:bold; white-space:nowrap' target='_blank'>SHS System&rsaquo;</a>
                                  </td>
                                </tr>
                                  <tr>
                                    <td valign='top' height='11' style='line-height:11px'>
                                    <img style='display:block;' height='1' src='' width='1' border='0'></td>
                                  </tr>
                                </table></td>
                              <td width='13' valign='top' align='left' class='padding-v24px'>
                              <img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>

                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td valign='top' height='32' style='line-height:32px; background-position: top center; background-repeat:no-repeat'><img style='display:block;' height='1' width='1' border='0'></td>
                      </tr>
                    </table>

                    <table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0'>
                      <tr style='box-shadow: 0 8px 6px -6px black;'>
                        <td class='secondary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg'; font-size:12px; color:#020202; line-height:20px'><table width='100%' cellspacing='0' cellpadding='0' border='0' style='background-color:#fcfcfc; border-top:#D2D3D5 2px solid; border-right:#D2D3D5 2px solid; border-bottom:#D2D3D5 2px solid; border-left:#D2D3D5 2px solid; border-radius:6px'>
                            <tr>
                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>
                            <tr>
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                              <td valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0'>
                                  <tr>
                                    <td class='primary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:14px; color:#020202; line-height:22px; text-align:left; font-weight:bold' valign='top'><h3>This is a system generated email. Please do not reply to this message.</h3></td>
                                  </tr>
                                  <tr>
                                    <td valign='top' height='11' style='line-height:11px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                                  </tr>
                                  <tr>
                                    <td class='secondary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg'; font-size:12px; color:#020202; line-height:20px; text-align:left'>
                                    This message is for the designated recipient only and may contain confidential, private and/or privileged information. If you have received it in error, please delete it and advise the sender immediately. You should not copy or use it for any other purpose, nor disclose its contents to any other person.</td>
                                  </tr>
                                </table></td>
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>

                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                          </table>
                        </td>
                      </tr>
                    </table>
                  <td valign='top' width='44' class='padding-v28px'><img style='display:block;' height='1' width='1' src='' border='0'></td>
                </tr>
                <tr>
                  <td valign='top' height='44' class='padding2' colspan='3' style='line-height:44px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
                <tr>
                  <td valign='top' height='1' style='font-size:1px; line-height:1px;' bgcolor='#e0e0e0' colspan='3'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
              </table>
            </td>
          </tr>
  </body>
  </html>","text/html");

      // Send the message
      $result = $mailer->send($message);
      return $result;
    }


function accountcredential($email,$uid,$fname,$mname,$lname,$vkey,$url){
      $emailaddress = $email;
      // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.office365.com', 587, 'tls'))
      /*      $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))*/
        ->setUsername(EMAIL)
        ->setPassword(PASSWORD)
      ;

      // Create the Mailer using your created Transport
      $mailer = new Swift_Mailer($transport);

      // Create a message
      $message = (new Swift_Message('Notification: PBFCD Portal'))
        ->setFrom([EMAIL => 'PBFCD Portal'])
        ->setTo([$email])
        ->setBody("<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'https://www.w3.org/TR/html4/loose.dtd'>
  <html>
  <tr>
    <td style='padding-top: 2%;'></td>
  </tr>
  <table id='table-wrapper' width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='margin:0; padding:0; text-align:center; background-color:#fafafa; background-repeat: repeat-x; background-position: top;'>
    <tr>
      <td style='padding-top: 2%;'></td>
    </tr>
    <tr>
      <td valign='top' align='center'><table class='table' width='550' border='0' cellspacing='0' cellpadding='0' style='border-left:1px solid #D2D3D5; border-right:1px solid #D2D3D5; border-radius:8px' bgcolor='#ffffff'>
          <tr>
            <td valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td colspan='3' valign='top' height='1' style='line-height:1px' bgcolor='#D2D3D5'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
                <tr style='background-color: #15317E !important;'>
                  <td><center>
                    <img src='http://52.187.116.45/pbfcd/logo-left.png' style='width: 60px; height: 60px;  border-radius: 50%;' class='float-right'>
                  </center>
                  </td>
                  <td>
                    <center>
                        <h2 style='color: white;'>PBFCD Portal</h2>
                    </center>
                  </td>
                  <td>
                    <img src='http://52.187.116.45/pbfcd/BOC.png' class='navbar-nav my-lg-0' / style='width: 60px; height: 60px;'>
                  </td>
                </tr>
                <tr>
                  <td colspan='3' valign='top' height='36' style='line-height:36px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
                <tr>
                  <td valign='top' width='44' class='padding-v28px'><img style='display:block;' height='1' width='1' src='' border='0'></td>
                  <td valign='top'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                      <tr>
                        <td valign='top' height='32' style='line-height:32px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                      </tr>
                    </table>
                    <table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0 '>
                      <tr>
                        <td valign='top' height='22' style='line-height:22px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                      </tr>
                      <tr style='box-shadow: 0 8px 6px -6px black;'>
                        <td class='secondary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg'; font-size:12px; color:#020202; line-height:20px'><table width='100%' cellspacing='0' cellpadding='0' border='0' style='background-color:#fcfcfc; border-top:#D2D3D5 2px solid; border-right:#D2D3D5 2px solid; border-bottom:#D2D3D5 2px solid; border-left:#D2D3D5 2px solid; border-radius:6px'>
                            <tr>
                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>
                            <tr >
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                              <td valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0'>
                                  <tr>
                                    <td valign='top' height='11' style='line-height:11px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                                  </tr>
                                <tr>
                                  <td class='primary' align='left' style='font-family: Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:24px; color:#020202; line-height:36px; font-weight:bold'>Dear: ".ucwords($fname." ".$mname." ".$lname)." Your account has been successfully created.</td>
                                </tr>
                                <tr>
                                  <td class='primary' align='left' style='font-family: Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:24px; color:#020202; line-height:36px; font-weight:bold'>Your Email: ".$email."</td>
                                </tr>
                                <tr>
                                  <td class='primary' align='left' style='font-family: Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:24px; color:#020202; line-height:36px; font-weight:bold'>please update your password <a href='".$url."/updateaccount.php?&u=".$uid."&e=".$email."&k=".$vkey."' style='color:#226b97; text-decoration:none; font-weight:bold; white-space:nowrap' target='_blank'>Click Here&rsaquo;</a> </td>
                                </tr>
                                  <tr>
                                    <td valign='top' height='11' style='line-height:11px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                                  </tr>
                                </table></td>
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>

                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td valign='top' height='32' style='line-height:32px; background-position: top center; background-repeat:no-repeat'><img style='display:block;' height='1' width='1' border='0'></td>
                      </tr>
                    </table>

                    <table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0'>
                      <tr style='box-shadow: 0 8px 6px -6px black;'>
                        <td class='secondary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg'; font-size:12px; color:#020202; line-height:20px'><table width='100%' cellspacing='0' cellpadding='0' border='0' style='background-color:#fcfcfc; border-top:#D2D3D5 2px solid; border-right:#D2D3D5 2px solid; border-bottom:#D2D3D5 2px solid; border-left:#D2D3D5 2px solid; border-radius:6px'>
                            <tr>
                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>
                            <tr>
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                              <td valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0'>
                                  <tr>
                                    <td class='primary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:14px; color:#020202; line-height:22px; text-align:left; font-weight:bold' valign='top'><h3>This is a system generated email. Please do not reply to this message.</h3></td>
                                  </tr>
                                  <tr>
                                    <td valign='top' height='11' style='line-height:11px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                                  </tr>
                                  <tr>
                                    <td class='secondary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg'; font-size:12px; color:#020202; line-height:20px; text-align:left'>
                                    This message is for the designated recipient only and may contain confidential, private and/or privileged information. If you have received it in error, please delete it and advise the sender immediately. You should not copy or use it for any other purpose, nor disclose its contents to any other person.</td>
                                  </tr>
                                </table></td>
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>

                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                          </table>
                        </td>
                      </tr>
                    </table>
                  <td valign='top' width='44' class='padding-v28px'><img style='display:block;' height='1' width='1' src='' border='0'></td>
                </tr>
                <tr>
                  <td valign='top' height='44' class='padding2' colspan='3' style='line-height:44px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
                <tr>
                  <td valign='top' height='1' style='font-size:1px; line-height:1px;' bgcolor='#e0e0e0' colspan='3'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
              </table>
            </td>
          </tr>
  </body>
  </html>","text/html");

      // Send the message
      $result = $mailer->send($message);
      return $result;
    }


 function emailsent($email,$transid,$fname,$mname,$lname,$vkey,$url,$type){
      $emailaddress = $email;
      // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.office365.com', 587, 'tls'))
           /* $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))*/
        ->setUsername(EMAIL)
        ->setPassword(PASSWORD)
      ;

      // Create the Mailer using your created Transport
      $mailer = new Swift_Mailer($transport);

      // Create a message
      $message = (new Swift_Message('Notification: PBFCD Portal'))
        ->setFrom([EMAIL => 'PBFCD Portal'])
        ->setTo([$email])
        ->setBody("<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'https://www.w3.org/TR/html4/loose.dtd'>
  <html>
  <tr>
    <td style='padding-top: 2%;'></td>
  </tr>
  <table id='table-wrapper' width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='margin:0; padding:0; text-align:center; background-color:#fafafa; background-repeat: repeat-x; background-position: top;'>
    <tr>
      <td style='padding-top: 2%;'></td>
    </tr>
    <tr>
      <td valign='top' align='center'><table class='table' width='550' border='0' cellspacing='0' cellpadding='0' style='border-left:1px solid #D2D3D5; border-right:1px solid #D2D3D5; border-radius:8px' bgcolor='#ffffff'>
          <tr>
            <td valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td colspan='3' valign='top' height='1' style='line-height:1px' bgcolor='#D2D3D5'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
                <tr style='background-color: #15317E !important;'>
                  <td><center>
                    <img src='http://52.187.116.45/pbfcd/logo-left.png' style='width: 60px; height: 60px;  border-radius: 50%;' class='float-right'>
                  </center>
                  </td>
                  <td>
                    <center>
                        <h2 style='color: white;'>PBFCD Portal</h2>
                    </center>
                  </td>
                  <td>
                    <img src='http://52.187.116.45/pbfcd/BOC.png' class='navbar-nav my-lg-0' / style='width: 60px; height: 60px;'>
                  </td>
                </tr>
                <tr>
                  <td colspan='3' valign='top' height='36' style='line-height:36px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
                <tr>
                  <td valign='top' width='44' class='padding-v28px'><img style='display:block;' height='1' width='1' src='' border='0'></td>
                  <td valign='top'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                      <tr>
                        <td valign='top' height='32' style='line-height:32px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                      </tr>
                    </table>
                    <table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0 '>
                      <tr>
                        <td valign='top' height='22' style='line-height:22px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                      </tr>
                      <tr style='box-shadow: 0 8px 6px -6px black;'>
                        <td class='secondary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg'; font-size:12px; color:#020202; line-height:20px'><table width='100%' cellspacing='0' cellpadding='0' border='0' style='background-color:#fcfcfc; border-top:#D2D3D5 2px solid; border-right:#D2D3D5 2px solid; border-bottom:#D2D3D5 2px solid; border-left:#D2D3D5 2px solid; border-radius:6px'>
                            <tr>
                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>
                            <tr >
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                              <td valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0'>
                                  <tr>
                                    <td valign='top' height='11' style='line-height:11px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                                  </tr>
                                <tr>
                                  <td class='primary' align='left' style='font-family: Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:24px; color:#020202; line-height:36px; font-weight:bold'>Dear: ".ucwords($fname." ".$mname." ".$lname)."<br> Reference No.: ".$transid."</td>
                                </tr>
                                <tr>
                                  <td class='primary' align='left' style='font-family: Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:24px; color:#020202; line-height:36px; font-weight:bold'>Your Email: ".$email."</td>
                                </tr>
                                <tr>
                                  <td class='primary' align='left' style='font-family: Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:24px; color:#020202; line-height:36px; font-weight:bold'>To view your online application please <a href='".$url."".$type."&k=".$vkey."' style='color:#226b97; text-decoration:none; font-weight:bold; white-space:nowrap' target='_blank'>Click Here&rsaquo;</a> </td>
                                </tr>
                                  <tr>
                                    <td valign='top' height='11' style='line-height:11px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                                  </tr>
                                </table></td>
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>

                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td valign='top' height='32' style='line-height:32px; background-position: top center; background-repeat:no-repeat'><img style='display:block;' height='1' width='1' border='0'></td>
                      </tr>
                    </table>

                    <table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0'>
                      <tr style='box-shadow: 0 8px 6px -6px black;'>
                        <td class='secondary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg'; font-size:12px; color:#020202; line-height:20px'><table width='100%' cellspacing='0' cellpadding='0' border='0' style='background-color:#fcfcfc; border-top:#D2D3D5 2px solid; border-right:#D2D3D5 2px solid; border-bottom:#D2D3D5 2px solid; border-left:#D2D3D5 2px solid; border-radius:6px'>
                            <tr>
                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>
                            <tr>
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                              <td valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding:0; margin:0'>
                                  <tr>
                                    <td class='primary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg Bold'; font-size:14px; color:#020202; line-height:22px; text-align:left; font-weight:bold' valign='top'><h3>This is a system generated email. Please do not reply to this message.</h3></td>
                                  </tr>
                                  <tr>
                                    <td valign='top' height='11' style='line-height:11px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                                  </tr>
                                  <tr>
                                    <td class='secondary' style='font-family:Arial, Helvetica, sans-serif, 'Proxima Nova Rg'; font-size:12px; color:#020202; line-height:20px; text-align:left'>
                                    This message is for the designated recipient only and may contain confidential, private and/or privileged information. If you have received it in error, please delete it and advise the sender immediately. You should not copy or use it for any other purpose, nor disclose its contents to any other person.</td>
                                  </tr>
                                </table></td>
                              <td width='13' valign='top' align='left' class='padding-v24px'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                            </tr>

                              <td align='left' valign='top' height='13' class='padding-h32px' style='font-size:1px; line-height:13px;' colspan='3'><img style='display:block; margin:0; padding:0' height='1' src='' width='1' border='0' alt=''></td>
                          </table>
                        </td>
                      </tr>
                    </table>
                  <td valign='top' width='44' class='padding-v28px'><img style='display:block;' height='1' width='1' src='' border='0'></td>
                </tr>
                <tr>
                  <td valign='top' height='44' class='padding2' colspan='3' style='line-height:44px'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
                <tr>
                  <td valign='top' height='1' style='font-size:1px; line-height:1px;' bgcolor='#e0e0e0' colspan='3'><img style='display:block;' height='1' src='' width='1' border='0'></td>
                </tr>
              </table>
            </td>
          </tr>
  </body>
  </html>","text/html");

      // Send the message
      $result = $mailer->send($message);
      return $result;
    }
?>
