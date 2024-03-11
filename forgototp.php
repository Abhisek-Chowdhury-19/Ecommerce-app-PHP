<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;
include('connection.php');
$email=$_POST['email'];    
$_SESSION['biogreenforgot']=$email;

$query=mysqli_fetch_array(mysqli_query($con,"select * from userlogin where Email='$email'"));
if ($query>0) {
    $otp=rand(11111,99999);
    mysqli_query($con,"update userlogin set otp='$otp' where Email='$email'");
    $html='<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:0px;width:70%;padding:20px 0">
      <div style="border-bottom:1px solid #eee">
        <a href="" style="font-size:1.4em;color: #1cc0a0;text-decoration:none;font-weight:600">Green Indien Restaurant</a>
      </div>
      <p style="font-size:1.1em">Hi,</p>
      <p>Thank you for choosing Green Indien Restaurant. Use the following OTP to complete your Sign Up procedures. Please do not share this OTP with anyone.</p>
      <h2 style="background: #1cc0a0;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$otp.'</h2>
      <p style="font-size:0.9em;">Regards,<br />Green Indien Restaurant</p>
      <hr style="border:none;border-top:1px solid #eee" />
      <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
        <p>Green Indien Restaurant</p>
        <p>121</p>
        <p>address</p>
      </div>
    </div>
    </div>';
    echo "done";

    require 'phpmailer/src/Exception.php';
    require "phpmailer/src/PHPMailer.php";
    require "phpmailer/src/SMTP.php";

        
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
include 'maildata.php';
$mail->SMTPSecure = 'ssl';
$mail->Port=465;


$mail->addAddress($email);
$mail->isHTML (true);
$mail->Subject = "Forgot Password Otp Verification";
$mail->Body = $html;
$mail->send();
}
else {
    echo "error";
}
?>