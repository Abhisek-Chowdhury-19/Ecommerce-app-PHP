<?php
session_start();

include("../connection.php");
include("../function.php");
$userdata= check_login($con);

if(isset($_POST['update_status']))
{ 
    $sno=$_GET['pid'];
    $minorder=$_POST['minorder'];
    $Productname=$_POST['Productname'];
    $Productname=str_replace("'","",$Productname);
    $category=$_POST['price'];
    $que=mysqli_query($con,"UPDATE pincode set pincode='$Productname' ,min_order='$minorder' ,deliveryfee='$category' WHERE sno='$sno'"); 


                echo '<script>alert("pincode Update Sucessfully '.$Productname.'")</script>';
?>
<script>
    window.location.href='../components-ginvoice.php';
</script>
<?php
           

}