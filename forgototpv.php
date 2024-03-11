<?php
session_start();
include('connection.php');
$otp=$_POST['otp'];
$email = $_SESSION['biogreenforgot'];
$query=mysqli_fetch_array(mysqli_query($con,"select * from userlogin where Email='$email' and otp='$otp'"));
if ($query>0) {
    mysqli_query($con,"update userlogin set otp='verified' where Email='$email' ");
    echo "done";

}else{
    echo 'error';
}
?>