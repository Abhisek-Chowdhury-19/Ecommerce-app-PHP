<?php  
session_start();

include("connection.php");
include("function.php");
if(isset($_POST['custId'])){
	$id = $_POST['custId'];
	
	$sql = "select * from products where sno='".$id."'";
	$result = mysqli_query($con,$sql);
	
	
           
	$output2 = '
              

<table class="table table bordered">
<h2>Products Details</h2>
<tr>
<th>Name</th>

<th>Category</th>
 <th>Brand</th>
<th>Price</th>
<th>Offer Price</th>
 <th>Short Disp</th>
<th>Long</th>
<th>Status</th>



</tr>';

$output = '
              
<div class="table-responsive">
<table class="table table bordered">

<tr>
<th>Img1</th>

<th>IMG2</th>
<th>IMG3</th>
<th>IMG4</th>




</tr>';

           
		  
                    while($row1 = mysqli_fetch_array($result))  
                    {   

          
           $output2 .= '
     <tr>
		
		<td>'.$row1["Name"].'</td>
		<td>'.$row1["Category"].'</td>
		<td>'.$row1["Brand"].'</td>
          <td>'.$row1["P_Price"].'</td>
          <td>'.$row1["O_price"].'</td>
          <td>'.$row1["S_disp"].'</td>
          <td>'.$row1["L_disp"].'</td>
          <td>'.$row1["status"].'</td>
		
		
		</tr>
		    ';
               $output .= '
 <tr>
      
      <td><img src="assets/img/products/'.$row1["C_img"].'.jpg" height=200px></td>
      <td><img src="assets/img/products/'.$row1["B_img"].'.jpg" height=200px></td>
      <td><img src="assets/img/products/'.$row1["img1"].'.jpg" height=200px></td>
      <td><img src="assets/img/products/'.$row1["img2"].'.jpg" height=200px></td> </tr>';
			 
      }
      
 

	 echo $output2; 
      echo $output;
     }