<?php
session_start();

include("connection.php");
include("function.php");
$userdata= check_login($con);

?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dellivery Update-admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="assets/bio.png" alt="" height="70px">
    
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->



<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

   

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

     

      

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $userdata['Name']; ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $userdata['Name']; ?></h6>
          <span> Admin</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-order.php">
              <i class="bi bi-circle"></i><span>All Items</span>
            </a>
          </li>
          <!-- <li>
            <a href="components-po.php">
              <i class="bi bi-circle"></i><span>Manage Items</span>
            </a>
          </li> -->
</ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Order Manage</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-gorder.php"  class="active">
              <i class="bi bi-circle"></i><span>Open Order</span>
            </a>
          </li>
          <li>
            <a href="components-gpo.php" >
              <i class="bi bi-circle"></i><span>All Order</span>
            </a>
          </li>
          <li>
            <a href="components-ginvoice.php">
              <i class="bi bi-circle"></i><span>Pincode Manager</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Forms Nav -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Slider and Banner</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="pslider.php">
              <i class="bi bi-circle"></i><span>Product Slider</span>
            </a>
          </li>
          <li>
            <a href="cslider.php">
              <i class="bi bi-circle"></i><span>Category Slider</span>
            </a>
          </li>
          <li>
            <a href="bone.php">
              <i class="bi bi-circle"></i><span>Banner 1</span>
            </a>
          </li>
          <li>
            <a href="btwo.php">
              <i class="bi bi-circle"></i><span>Banner 2</span>
            </a>
          </li>
          <li>
            <a href="bthree.php">
              <i class="bi bi-circle"></i><span>Banner 3</span>
            </a>
          </li>
          <li>
            <a href="bfour.php">
              <i class="bi bi-circle"></i><span>Banner 4</span>
            </a>
          </li>
          <li>
            <a href="bfive.php">
              <i class="bi bi-circle"></i><span>Banner 5</span>
            </a>
          </li>
        </ul>
      </li> -->
      

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-user.php">
          <i class="bi bi-list"></i>
          <span>User-info</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-person"></i>
          <span>Add Account</span>
        </a>
      </li>

    </ul>



  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Order</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Manage List</li>
          <li class="breadcrumb-item active">Update Order</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php
    if ($_SERVER['REQUEST_METHOD']=='GET') {
    $sno= $_GET['pid'];
    $query2 = "select * from bgorder where sno='$sno' limit 1";
    $result2 = mysqli_query($con,$query2);
    $row = mysqli_fetch_array($result2);


    ?>

    <?php
  }
  ?>
    <section class="section">
      <?php

      ?>
    <form class="row g-3" action="command/update.php?orderid=<?php echo $row['orderid']; ?>" method="post">
               
    
               
               <div class="col-3">
                 <label for="inputName5" class="form-label">Order ID</label>
                 <input type="text" class="form-control" id="Productname" name="Productname" value="<?php echo $row['orderid'];?>" placeholder="Product name" disabled>
               </div>
               <div class="col-md-4">
                 <label for="input" class="form-label">Date</label>
                 <input type="text" id="Category" class="form-control" value="<?php echo $row['date'];?>"  name="Category" disabled >
                
               </div>
               <div class="col-md-3">
               <label for="input" class="form-label">Fullname</label>
                 <input type="text" id="Category" class="form-control" value="<?php echo $row['name'];?>"  name="Category" disabled >
                
                   
               </div>
               <div class="col-md-3">
               <label for="input" class="form-label">Status</label>
                 <input type="text" id="Category" class="form-control" value="<?php echo $row['status'];?>"  name="Category" disabled >
                
                   
               </div>
               <div class="col-md-3">
               <label for="input" class="form-label">Transation id</label>
                 <input type="text" id="Category" class="form-control" value="<?php echo $row['transationid'];?>"  name="Category" disabled >
                
                   
               </div>
               <div class="col-md-3">
               <label for="input" class="form-label">Transation Status</label>
                 <input type="text" id="Category" class="form-control" value="<?php echo $row['transactionstatus'];?>"  name="Category" disabled >
                
                   
               </div>
               <div class="col-md-3">
               <label for="input" class="form-label">Amount</label>
                 <input type="text" id="Category" class="form-control" value="<?php echo "€".$row["amount"]+$row["delivery_charge"]?>"  name="Category" disabled >
                
                   
               </div>
               <div class="col-md-4">
               <label for="input" class="form-label">Phone</label>
                 <input type="text" id="Category" class="form-control" value="<?php echo $row['phone'];?>"  name="Category" disabled >
                
                   
               </div>
               <div class="col-md-7">
               <label for="input" class="form-label">Email</label>
                 <input type="text" id="Category" class="form-control" value="<?php echo $row['email'];?>"  name="Category" disabled >
                
                   
               </div>
               
             
               <div class="col-8">
                 <label for="inputName5" class="form-label">address</label>
                 <textarea class="form-control" value="" name="short" style="height: 100px" required disabled><?php echo $row['address'].", ".$row['zipcode'];?></textarea>
               </div>
               <div class="col-10">
                 <label for="inputName5" class="form-label">Notes</label>
                 <textarea class="form-control" name="long" maxlength="2000" style="width: 100%;height:100px" disabled><?php echo $row['order_notes'];?></textarea>
               </div>
            <table class="table table-bordered">
              <tr>
                <td>Products</td>
                <td>Price</td>
                <td>Quantity</td>
              </tr>

              <tr>
                <?php
                $orderid=$row['orderid'];
                $product=mysqli_query($con,"SELECT * FROM orderitem WHERE oid='$orderid'");
 
                while($prodata = mysqli_fetch_array($product))  
                
                {
                   
                    $output3 ='
                    <tr>
             
              <td>'.$prodata["name"].'</td>
              <td>€'.$prodata["price"].'</td>

          
                    <td>'.$prodata["quantity"].'</td>
                  
              
              
              </tr>';
              echo $output3;

                }
                ?>
              </tr>
            </table>
               
               <div class="col-md-4">
                 <label for="inputState" class="form-label">Status</label>
                 <select id="status" class="form-select"  name="Unit" required>
                   <option value="">Status</option>
                   
                   <option value="Order Packed">Order Packed</option>
                   <option value="Out For Delivery">Out For Delivery</option>
                   <option value="Delivered">Delivered</option>
                   
                 </select>
                 <?php

                 if ($row['transactionstatus']!='COMPLETED'  &&  $row['transationid']!='CASH') {
?>
                
                 <a  class="btn btn-primary" href="mark.php?oid=<?php echo $_GET['pid']; ?>">
               mark Payment COMPLETED</a>
               <?php
                }
                 ?>
               </div>
               
               <br><br>
               
               <div class="text-center">
                 <button type="submit" name="update_status" class="btn btn-primary">Submit</button>
                 <button type="reset" class="btn btn-secondary">Reset</button>
               </div>
             </form>
             <?php
        if(isset($_POST['update_status']))
{
  $status=$_POST['Unit'];
  $que="UPDATE groorder set status='$status'  WHERE orderid='$orderid'"; 
  echo $que;
}
?>
             
    </section>

  </main><!-- End #main -->
  

  

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>  
 $(document).ready(function(){  
      $('#OID').change(function(){  
           var OID = $(this).val();  
           $.ajax({  
                url:"searchresult.php",  
                method:"POST",  
                data:{OID:OID},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 }); 
 </script>
     <script>
      
      document.getElementById("Category").value = "<?php echo $row['Category'] ?>"
      document.getElementById("Brands").value = "<?php echo $row['Brand'] ?>"
      document.getElementById("status").value = "<?php echo $row['status'] ?>"
   </script>
</html>