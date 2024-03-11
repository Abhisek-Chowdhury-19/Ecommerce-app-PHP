<?php
session_start();
if (isset($_SESSION['biogreenemail'])) {
   unset($_SESSION['biogreenemail']);
}
header("Location: pages-login.php");
die;