<?php
session_start();

include('connection.php');
$pass=md5($_POST['pass']);
$email = $_SESSION['biogreenforgot'];

mysqli_query($con,"update userlogin set Password='$pass' where Email='$email'");

echo "done";
unset($_SESSION['biogreenforgot']);
?>