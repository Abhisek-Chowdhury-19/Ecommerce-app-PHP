<?php
session_start();
include("connection.php");
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];

$res=mysqli_query($con,"select * from userlogin where Email='$email' and otp='$otp'");
$count=mysqli_num_rows($res);

if($count>0){
	$newdata=mysqli_fetch_array(mysqli_query($con,"select * from userlogin where Email='$email'"));
	mysqli_query($con,"update userlogin set otp='verified' where Email='$email'");

	
	echo "yes";
	$_SESSION['biogreenlogindata']=$newdata['id'];
}
else{
	echo "not_exist";
}

?>