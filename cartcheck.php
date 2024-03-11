<?php
       session_start();
       include("connection.php");
       include("function.php");
$userdata = login($con);

       if ($userdata=='NULL') {
           $cartcount=0;
           echo '0';
       }
       else{
           $mail=$userdata['id'];
           $order="SELECT COUNT(sno) FROM cart Where c_id='$mail'";
           $run=mysqli_query($con,$order);
           $row=mysqli_fetch_array($run);
           echo $row['COUNT(sno)'];
           
       }
       ?>