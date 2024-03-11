<?php  
session_start();

include("connection.php");
include("function.php");

if(isset($_POST["Name"]))  
{
    if($_POST["Name"] != '')  
      {  
           $sql = "SELECT * FROM suppliers WHERE Name = '".$_POST["Name"]."'";  
           $result = mysqli_query($con, $sql); 
           if(mysqli_num_rows($result) > 0) {
                echo "Data Already Exist";
           }
           else{

           }
      }   
}
?>