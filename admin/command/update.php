<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;
include("../connection.php");
include("../function.php");
$userdata= check_login($con);
        if(isset($_POST['update_status']))
        {
            $orderid=$_GET['orderid'];
          $status=$_POST['Unit'];
          $que=mysqli_query($con,"UPDATE bgorder set status='$status'  WHERE orderid='$orderid'"); 
          $que2=mysqli_fetch_array(mysqli_query($con,"select * from bgorder WHERE orderid='$orderid'")); 
          
            if ($status=='Order Packed') {
             $html='<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
             <div style="margin:0px;width:70%;padding:20px 0">
               <div style="border-bottom:1px solid #eee">
                 <a href="" style="font-size:1.4em;color: #1cc0a0;text-decoration:none;font-weight:600">Bio Green Indien Restaurant</a>
               </div>
               <p style="font-size:1.1em">Hi,</p>
               <div style="border-bottom:1px solid #eee">
               <a href="" style="font-size:1.4em;color: #1cc0a0;text-decoration:none;font-weight:600">Order Packed</a>
             </div>
               <p>We hope this email finds you well and filled with excitement for your recent order: ' .$orderid.' with us. We are thrilled to inform you that your order has been successfully packed and is all set for shipping!</p>
              
               <p style="font-size:0.9em;">Regards,<br />Bio Green Indien Restaurant</p>
               <hr style="border:none;border-top:1px solid #eee" />
               <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
                 <p>Bio Green Indien Restaurant</p>
                 <p>Geiselbergstraße 14, 1110 Wien, Austria</p>
                 <p></p>
               </div>
             </div>
             </div>';
               }
               if ($status=='Out For Delivery') {
                $html='<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
                <div style="margin:0px;width:70%;padding:20px 0">
                  <div style="border-bottom:1px solid #eee">
                    <a href="" style="font-size:1.4em;color: #1cc0a0;text-decoration:none;font-weight:600">Bio Green Indien Restaurant</a>
                  </div>
                  <div style="border-bottom:1px solid #eee">
                        <a href="" style="font-size:1.4em;color: #1cc0a0;text-decoration:none;font-weight:600">Out For Delivery</a>
                      </div>
                  <p style="font-size:1.1em">Hi,</p>
                  <p>We hope this email finds you well and filled with excitement for your recent order: ' .$orderid.' with us. We are thrilled to inform you that your order has been Out for delivery!</p>
                 
                  <p style="font-size:0.9em;">Regards,<br />Bio Green Indien Restaurant</p>
                  <hr style="border:none;border-top:1px solid #eee" />
                  <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
                    <p>Bio Green Indien Restaurant</p>
                    <p>Geiselbergstraße 14, 1110 Wien, Austria</p>
                    <p></p>
                  </div>
                </div>
                </div>';
                  }
                  if ($status=='Delivered') {
                    $html='<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
                    <div style="margin:0px;width:70%;padding:20px 0">
                      <div style="border-bottom:1px solid #eee">
                        <a href="" style="font-size:1.4em;color: #1cc0a0;text-decoration:none;font-weight:600">Bio Green Indien Restaurant</a>
                      </div>
                      <p style="font-size:1.1em">Hi,</p>
                      <div style="border-bottom:1px solid #eee">
                        <a href="" style="font-size:1.4em;color: #1cc0a0;text-decoration:none;font-weight:600">delivered</a>
                      </div>
                      <p>We hope this email finds you well. We are delighted to share the exciting news that your order has been successfully delivered! recent order: ' .$orderid.'</p>
                     
                      <p style="font-size:0.9em;">Regards,<br />Bio Green Indien Restaurant</p>
                      <hr style="border:none;border-top:1px solid #eee" />
                      <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
                        <p>Bio Green Indien Restaurant</p>
                        <p>Geiselbergstraße 14, 1110 Wien, Austria</p>
                        <p></p>
                      </div>
                    </div>
                    </div>';
                      }
          require '../../phpmailer/src/Exception.php';
          require "../../phpmailer/src/PHPMailer.php";
          require "../../phpmailer/src/SMTP.php";
          $mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
include '../maildata.php';
$mail->SMTPSecure = 'ssl';
$mail->Port=465;


$mail->addAddress($que2['email']);
$mail->isHTML (true);
$mail->Subject = "Order Update";
$mail->Body = $html;
$mail->send();
          ?>
            <script>
                alert("Order Update Sucessfully");
                window.location.href="../components-updateorder.php?pid=<?php echo $que2['sno'];?>"
            </script>
          <?php
        }
?>