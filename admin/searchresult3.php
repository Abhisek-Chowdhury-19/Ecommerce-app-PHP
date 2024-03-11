<?php  
session_start();

include("connection.php");
include("function.php");
if(isset($_POST['custId'])){
	$id = $_POST['custId'];
	$totalam=0;
	$sql = "select * from bgorder where sno='".$id."'";
	$result = mysqli_query($con,$sql);
	
	
           
	$output2 = '
              

<table class="table table bordered">
<h2>Order Details</h2>
<tr>
<th>Order ID</th>
<th>Name</th>
<th>Zipcode</th>
<th>subtotal</th>
<th>Delivery Charge</th>
<th>Total</th>
 <th>Phone</th>
<th>mail</th>
<th>Notes</th>
<th>spices</th>
<th>Status</th>



</tr>';

$output = '
              
<div class="table-responsive">
<table class="table table bordered">

<tr>
<th>Transation ID</th>

<th>Transation Status</th>
<th>Payee Name</th>





</tr>';

$output3 = '
              
<div class="table-responsive">
<table class="table table bordered">

<tr>
<th>sno</th>
<th>Product Name</th>
<th>Price</th>
<th>Spice level</th>



<th>Quantity</th>






</tr>';      
		  
                    while($row1 = mysqli_fetch_array($result))  
                    {   
                         $orderid=$row1['orderid'];
          
           $output2 .= '
     <tr>
		
		<td>'.$row1["orderid"].'</td>
		<td>'.$row1["name"].'</td>
         
          <td>'.$row1["zipcode"].'</td>
          <td>€'.$row1["amount"].'</td>
          <td>€'.$row1["delivery_charge"].'</td>
          <td>€'.$row1["delivery_charge"]+$row1["amount"].'</td>
          <td>'.$row1["phone"].'</td>
          <td>'.$row1["email"].'</td>
          <td>'.$row1["order_notes"].'</td>
          <td>'.$row1["spicelevel"].'</td>

          <td>'.$row1["status"].'</td>
		
		
		</tr>
		    ';
               $output .= '
 <tr>
      
      <td>'.$row1["transationid"].'</td>
      <td>'.$row1["transactionstatus"].'</td>
      <td>'.$row1["paye_name"].'</td>
      </tr>
      ';
			 
      $totalam=$row1["amount"]+$row1["delivery_charge"];
      }
      $addressdata=mysqli_fetch_array(mysqli_query($con,"SELECT * from address where orderid='$orderid'"));
      $output.="
      <tr>
      <th>Straße</th>
      <th>Nr</th>
      <th>Steige</th>
      <th>Stock</th>
      <th>Top</th>
      <th>Ort / Stadt</th>
      
      </tr>
      <tr>
      <td>".$addressdata['Street']."</td>
      <td>".$addressdata['No']."</td>
      <td>".$addressdata['Stairs']."</td>
      <td>".$addressdata['floor']."</td>
      <td>".$addressdata['Top']."</td>
      <td>".$addressdata['Location']."</td>
      

      </tr>";
      $product=mysqli_query($con,"SELECT * FROM orderitem WHERE oid='$orderid'");
      $i=0;
      while($row1 = mysqli_fetch_array($product))  
      {
           $i++;
         
          $output3 .='
          <tr>
		
		<td> '.$i.' </td>
		<td>'.$row1["name"].'</td>
		<td>€'.$row1["price"].'</td>

          <td>'.$row1["spice_level"].'</td>
          <td>'.$row1["quantity"].'</td>
        
		
		
		</tr>';
      }
      $output3.='<td>Total  €'.$totalam.'</td>';
	 echo $output2; 
      echo $output;
      echo $output3;
   
     }