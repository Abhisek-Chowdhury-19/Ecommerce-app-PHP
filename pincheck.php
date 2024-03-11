<?php 
session_start();
include("connection.php");

if(isset($_POST["pin"]))  
{
    if($_POST["pin"] !='')  
      {  
        $sql = "SELECT * FROM pincode WHERE pincode = '".$_POST["pin"]."'";  
        $result = mysqli_fetch_array(mysqli_query($con, $sql)); 
        if($result > 0) {
             echo $result['deliveryfee'];
        }
        else{
            echo "error";
        }
      }
    }
    else{
      echo "error";
    }
?>