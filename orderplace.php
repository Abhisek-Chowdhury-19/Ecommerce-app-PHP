<?php

 use PHPMailer\PHPMailer\PHPMailer;

 use PHPMailer\PHPMailer\Exception;
 error_reporting(0);  
session_start();
include("connection.php");
include("function.php");
$userdata = login($con);
$mail=$userdata['Email'];
$id=$userdata['id'];
if(isset($_POST['placeorder'])){
$name=$_POST['name'];
$email=$_POST['email'];

$zip=$_POST['zip'];
$phone=$_POST['phone'];
$Street=$_POST['Street'];
$floor=$_POST['floor'];
$Location=$_POST['Location'];
$Top=$_POST['Top'];
$No=$_POST['No'];
$Stairs=$_POST['Stairs'];
$date=date("jS \of F Y");
$notes=$_POST['notes'];
$delivery=mysqli_fetch_array(mysqli_query($con,"select * from pincode where pincode = '$zip'"));
$deliverycharhge=$delivery['deliveryfee'];
$query2 = "select * from bgorder order by sno desc limit 1";
$result2 = mysqli_query($con,$query2);
$row = mysqli_fetch_array($result2);

$last_id = $row['orderid'];
    $transactionid=$_POST['id'];
    $transactionstatus=$_POST['status'];
    $subtotal=$_POST['subtotal'];


    $query2 = "select * from bgorder order by sno desc limit 1";
    $result2 = mysqli_query($con,$query2);
    $row = mysqli_fetch_array($result2);
    $last_id = $row['orderid'];
    
    
    
    if ($last_id == "")
    {
        $POID = "OD/BRG/1";

    }
    else
    {
        $POID = substr($last_id, 7);
        $POID = intval($POID);
        $POID = "OD/BRG/" . ($POID + 1);
    }
        
    $html='<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:0px;width:70%;padding:20px 0">
      <div style="border-bottom:1px solid #eee">
        <a href="" style="font-size:1.4em;color: #1cc0a0;text-decoration:none;font-weight:600">Bio Green Indien Restaurant        </a>
      </div>
      <p style="font-size:1.1em">Hi,</p>
      <p>We are thrilled to confirm that your order has been successfully processed!, we would like to express our heartfelt gratitude for choosing us for your recent purchase..</p>
        
      
    Order Number: '.$POID.'<br>
    Order Date: '.$date.'<br>
    Shipping Address: '.$Street." ".$No." ".$floor." ".$Location." ".$Top." ".$Stairs.', <br>'.$zip.'<br>
    Payment Method: Paypal<br>
    Transation Details: '.$transactionid.'<br>
    transation Status: '.$transactionstatus.'(Note if status is not compleated your order is in pending till the payment confirmed)<br>
    <br>
    <table style="border-collapse: collapse; width: 100%; border: 1px solid #ddd;">
    <thead>
      <tr style="background-color: #f2f2f2;">
        <th style="border: 1px solid #ddd; padding: 8px;">Sno</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Product Name</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Price</th>
      </tr>
    </thead>


    <tbody>'; 
        $placeorder="INSERT into bgorder (orderid,date,Payment_mode,paye_name,transationid,transactionstatus,name,address,zipcode,phone,email,c_id,order_notes,spicelevel,amount,delivery_charge,status) Values ('$POID','$date','Paypal','$name','$transactionid','$transactionstatus','$name','','$zip','$phone','$mail','$id','$notes','','$subtotal','$deliverycharhge','Under process')";
        $add=mysqli_query($con,"INSERT INTO `address` ( `orderid`, `Street`, `No`, `Stairs`, `floor`, `Top`, `Location`) VALUES ( '$POID', '$Street', '$No', '$Stairs', '$floor', '$Top', '$Location')");

        $insertorder=mysqli_query($con,$placeorder);
        $id=$userdata['id'];
        $cartitem=mysqli_query($con,"SELECT * from cart WHERE c_id='$id'");
        $i=1;
       while ($result=mysqli_fetch_array($cartitem)) {
                $pid=$result['p_id'];
                $qua=$result['quantity'];
                $spicelevel=$result['spice_level'];
                $productname=mysqli_fetch_array(mysqli_query($con,"SELECT * from menu WHERE item_id='$pid'"));
                $html .='<tr>
                <td style="border: 1px solid #ddd; padding: 8px;">'.$i.'</td>
                <td style="border: 1px solid #ddd; padding: 8px; ">'.$productname['item_name'].'('.$spicelevel.')</td>
                <td style="border: 1px solid #ddd; padding: 8px; ">'.$qua.'</td>

                <td style="border: 1px solid #ddd; padding: 8px; font-weight: bold;">€'.$productname['Price']*$qua.'</td>
              </tr>';
              $i=$i+1;
              $pname=$productname['item_name'];
              $pprice=$productname['Price'];
              $additem=mysqli_query($con,"INSERT into orderitem (oid,name,price,spice_level,quantity) values ('$POID','$pname','$pprice','$spicelevel','$qua')");
              $deletecart=mysqli_query($con,"DELETE from cart WHERE c_id='$id' AND p_id='$pid'");
       }
                   $html .=' <tr>
                   <td style=" padding: 0px;"></td>
                   
                   <td style=" padding: 8px;"></td>
                   <td style="border: 1px solid #ddd; padding: 8px; font-weight: bold;">Subtotal: $'.$subtotal.'</td>
                 </tr>
                  </tbody>
                   </table>
                   <p style="font-size:0.9em;">   Your trust in our products/services means a lot to us, and we are committed to delivering the best quality and customer experience. Our team is working diligently to prepare your order for shipment, and you can expect it to be dispatched soon.</p>
<p style="font-size:0.9em;">Regards,<br />Bio Green Indien Restaurant</p>
<hr style="border:none;border-top:1px solid #eee" />
<div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
<p>Bio Green Indien Restaurant</p>
<p></p>
<p></p>
</div>
</div>
</div>';
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
$mail->Subject = "Order Confirmed";
$mail->Body = $html;
$mail->send();
                   ?>

                   <?php
                   echo 'orderdetails.php?orderid='.$POID,'';
    }

?>