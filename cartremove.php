<?php
session_start();
include("connection.php");
include("function.php");
$userdata = login($con);

if(isset($_POST['custId'])){
$pid= $_POST['custId'];
$qu=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM cart WHERE p_id='$pid'"));
if ($qu['quantity']>1) {
    $quantity=$qu['quantity'];
    $newquan=$quantity-1;
    $addprodu=mysqli_query($con,"UPDATE cart set quantity='$newquan' WHERE p_id=$pid");
    echo 'remove';
}
else{
    $addprodu=mysqli_query($con,"DELETE from cart WHERE p_id='$pid'");
    echo "remove";
}
}