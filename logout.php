<?php
session_start();
if (isset($_SESSION['biogreenlogindata'])) {
   unset($_SESSION['biogreenlogindata']);
}
header("Location: index.php");
die;