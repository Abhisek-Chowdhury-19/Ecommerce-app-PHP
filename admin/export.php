<?php  
//export.php  

include("connection.php");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM userlogin";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
   <tr>
  
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>

   
   

</tr>
  ';
  while($row = mysqli_fetch_array($result))
  {

    if ($row["otp"]!='verified') {
      $row["otp"]='Not verified';
    }
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["Name"].'</td>  
                         <td>'.$row["Email"].'</td>  
                         <td>'.$row["Phone"].'</td>  
                         <td>'.$row["otp"].'</td>
                         
        
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