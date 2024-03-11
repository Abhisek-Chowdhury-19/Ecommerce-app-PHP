<?php  
//export.php  

include("connection.php");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM po";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
   <tr>
   <th>POID</th>
                    
                    <th>ORDERID</th>
                    <th>Username</th>
                    <th>SUPPLIER Name</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Rate</th>
                    <th>GSM</th>
                    <th>Width</th>
                    <th>EDFD</th>
                    <th>EDLD</th>
                    <th>Notes</th>
                    <th>POSTATUS</th>

</tr>
  ';
  while($row3 = mysqli_fetch_array($result))
  {
   $output .= "
    <tr>  
    <td>".$row3["POID"]."</td>
    <td>".$row3["OID"]."</td>
    <td>".$row3["USERNAME"]."</td>
    <td>".$row3["SUPPLIERNAME"]."</td>
    <td>".$row3["QUNTITY"]."</td>
    <td>".$row3["UNIT"]."</td>
    <td>".$row3["Rate"]."</td>
    <td>".$row3["GSM"]."</td>
    <td>".$row3["WIDTH"]."</td>
    <td>".$row3["EDFD"]."</td>
    <td>".$row3["EDLD"]."</td>
    <td>".$row3["Notes"]."</td>
    <td>".$row3["POSTATUS"]."</td>
                    </tr>
   ";
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>