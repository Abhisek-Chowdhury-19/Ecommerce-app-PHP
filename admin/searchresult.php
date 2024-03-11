<?php  
session_start();

include("connection.php");
include("function.php");
$output=" ";
$pat='<option value="" >
Select Fabric
</option> ';
$pattern="";
if(isset($_POST['custId'])){
     $id = $_POST['custId'];
	
	$sql = "select * from groorder where email='".$id."'";
	$result = mysqli_query($con,$sql);

     $view='<table class="table table bordered">
     <h2>Order Details</h2>
<tr>
<th>Order ID</th>


<th>Date</th>
 <th>Name</th>
<th>Address</th>
<th>Phone</th>
 <th>Email</th>
<th>Amount</th>
<th>Notes</th>
<th>Status</th>



</tr>
     ';
     while($row1 = mysqli_fetch_array($result))  
                    {  

                         $view .='
                         <tr>
		
                         <td>'.$row1["orderid"].'</td>
                         <td>'.$row1["date"].'</td>
                         <td>'.$row1["name"].'</td>
                         <td>'.$row1["address"].'</td>
                         
                         <td>'.$row1["phone"].'</td>
                         <td>'.$row1["email"].'</td>
                         <td>$'.$row1["amount"].'</td>
                         <td>'.$row1["order_notes"].'</td>
                         <td>'.$row1["status"].'</td>
                         
                         
                         </tr>
                         ';
                    }

                    $view.='</table>';
     
     
     echo $view;
 }

 ?>