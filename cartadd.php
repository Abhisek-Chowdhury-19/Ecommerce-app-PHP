<?php
session_start();
error_reporting(0);
include("connection.php");
include("function.php");
$userdata = login($con);
$mail=$userdata['id'];
if(isset($_POST['custId'])){
$pid= $_POST['custId'];
$spice=$_POST['spice'];
$qu=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM cart WHERE p_id='$pid'"));
if ($qu>0) {
    $quantity=$qu['quantity'];
    
    $newquan=$quantity+1;
   
    $addprodu=mysqli_query($con,"UPDATE cart set quantity='$newquan'  WHERE p_id=$pid");
    $check=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM cart WHERE p_id='$pid'"));
    if ($check['quantity']==$newquan) {
        echo "YES";
    }
}
else{
   $addproduct=mysqli_query($con,"INSERT INTO cart (c_id,p_id,spice_level,quantity) values ('$mail','$pid','$spice','1')");
   $check=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM cart WHERE c_id='$mail' AND p_id='$pid'"));
   if ($check>0) {
    echo "YES";
}
}

}

?>