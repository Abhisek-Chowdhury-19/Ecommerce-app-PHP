<?php  
//export.php  

include("connection.php");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM invoices";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
   <tr>
		<th>Invoice ID</th>
		
		<th>POID</th>
          <th>Invoice Number</th>
          <th>Challan</th>
		<th>Username</th>
		<th>Quantity</th>
          <th>Unit</th>
          <th>Date</th>
          <th>Notes</th>
          <th>Status</th>
		
		
		

	</tr>
  ';
  while($row1 = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
          <td>'.$row1["InvoiceID"].'</td>
		      <td>'.$row1["POID"].'</td>
		
		      <td>'.$row1["Invoicenumber"].'</td>
          <td>'.$row1["Challan"].'</td>
          <td>'.$row1["User"].'</td>
          <td>'.$row1["Quantity"].'</td>
          <td>'.$row1["Unit"].'</td>
          <td>'.$row1["Date"].'</td>
          <td>'.$row1["Notes"].'</td>
          
          <td>'.$row1["Status"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>