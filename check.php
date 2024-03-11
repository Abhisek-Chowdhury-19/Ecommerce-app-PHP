<?php 
session_start();
include("connection.php");

if(isset($_POST["Name"]))  
{
    if($_POST["Name"] != '')  
      {  
        $sql = "SELECT * FROM userlogin WHERE Email = '".$_POST["Name"]."'";  
        $result = mysqli_query($con, $sql); 
        if(mysqli_num_rows($result) > 0) {
             echo "Email Already Exist";
        }
        else{
            echo "ok";
        }
      }
    }
?>