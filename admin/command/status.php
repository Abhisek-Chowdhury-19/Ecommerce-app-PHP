<?php
session_start();

include("../connection.php");
include("../function.php");
$userdata= check_login($con);

if(isset($_POST['update_status']))
{ 
  $sno=$_GET['pid'];
   $Productname=$_POST['Productname'];
   $category=$_POST['Category'];
   $subcat=$_POST['subCategory'];
   $disc=$_POST['disc'];

   
   $price=$_POST['price'];
  //  $short=$_POST['short'];
   $query2 = "select * from menu where item_id='$sno' limit 1";
   $result2 = mysqli_query($con,$query2);
   $row = mysqli_fetch_array($result2);
  
   $CID = $row['img'];

   $path="../assets/img/products/".$CID.".jpg";


   

             $filename = $_FILES["uploadfile1"]["name"];
             $tempname = $_FILES["uploadfile1"]["tmp_name"];
             $shortname=date("Ymd").date("his");
            
             $filename= str_replace("$filename","$shortname",$filename);
             
             $tempname = $_FILES["uploadfile1"]["tmp_name"];
             $folder = "../assets/img/products/".$filename.".jpg";


           

             if ($filename!="") {
              move_uploaded_file($tempname, $folder);
              unlink($path);
              $que="UPDATE menu set item_name='$Productname' ,category='$category',img='$shortname' WHERE item_id='$sno'"; 
              $run_que=mysqli_query($con,$que);
             }
            

            
               $que="UPDATE menu set item_name='$Productname' ,category='$category', sub_cat='$subcat' ,Price= '$price', disc='$disc' WHERE item_id='$sno'"; 
               
               $run_que=mysqli_query($con,$que);

               echo '<script>alert("Product Update Sucessfully '.$Productname.'")</script>';
               ?>

               <script>
           window.location.href='../components-order.php';
       </script>
       <?php
             
    



}
?>
