<?php
session_start();

include("connection.php");
include("function.php");
$userdata= check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
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

  <!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/mc_logo_big.webp" alt="">
        
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
            <img src="assets/img/profile/<?php echo $userdata['img']; ?>.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $userdata['Fullname']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $userdata['Fullname']; ?></h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
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

  </header><!-- End Header -->

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
          <i class="bi bi-menu-button-wide"></i><span>Search & Update</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-order.php">
              <i class="bi bi-circle"></i><span>Requisition</span>
            </a>
          </li>
          <li>
            <a href="components-po.php">
              <i class="bi bi-circle"></i><span>PO</span>
            </a>
          </li>
          <li>
            <a href="components-invoice.php">
              <i class="bi bi-circle"></i><span>Invoice</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->
<?php 
if($userdata['level']!="Viewer")
{
?>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Generate</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-gorder.php">
              <i class="bi bi-circle"></i><span>Requisition</span>
            </a>
          </li>
          <li>
            <a href="components-gpo.php">
              <i class="bi bi-circle"></i><span>PO</span>
            </a>
          </li>
          <li>
            <a href="components-ginvoice.php">
              <i class="bi bi-circle"></i><span>Invoice</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Forms Nav -->
<?php

}
?>
     <!-- End Tables Nav -->

      <?php
      
           if($userdata['level']=='Admin')
      {
      
      ?>


      <li class="nav-heading">Admin</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Manage List</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-supplier.php">
              <i class="bi bi-circle"></i><span>Supplier</span>
            </a>
          </li>
          <li>
            <a href="components-Pattern.php">
              <i class="bi bi-circle"></i><span>Pattern</span>
            </a>
          </li>
          <li>
            <a href="components-fabric.php">
              <i class="bi bi-circle"></i><span>Fabric</span>
            </a>
          </li>
          <li>
            <a href="components-colour.php">
              <i class="bi bi-circle"></i><span>Colour</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Force Closer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-Forder.php" class="active">
              <i class="bi bi-circle"></i><span>Requisition</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>PO</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>Invoice</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-person"></i>
          <span>Add Account</span>
        </a>
      </li><!-- End Profile Page Nav -->

      

    </ul>
<?php

}

?>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">

        <?php
        if(isset($_POST['save_po']))
{


  $query2 = "select * from po order by sno desc limit 1";
    $result2 = mysqli_query($con,$query2);
    $row = mysqli_fetch_array($result2);
    $last_id = $row['POID'];
    if ($last_id == "")
    {
        $POID = "FPO1";
    }
    else
    {
        $POID = substr($last_id, 3);
        $POID = intval($POID);
        $POID = "FPO" . ($POID + 1);
    }



    $OID = $_POST['OID'];
    $username = $userdata['Fullname'];
    $supplier = $_POST['name'];
    $Quantity = $_POST['quantity'];
    $Unit = $_POST['unit'];
    $GSM = $_POST['gsm'];
    $WIDTH = $_POST['width'];
    $edfd = $_POST['edfd'];
    $status = "Open";
    $edld = $_POST['edld'];
    $rate = $_POST['rate'];
    $Notes = $_POST['Notes'];
    

        $query = "INSERT INTO po (POID,OID,USERNAME,SUPPLIERNAME,QUNTITY,UNIT,Rate,GSM,WIDTH,EDFD,EDLD,Notes,POSTATUS) VALUES ('$POID','$OID','$username','$supplier','$Quantity','$Unit','$rate','$GSM','$WIDTH','$edfd','$edld','$Notes','$status')";
        $query_run = mysqli_query($con, $query);

        echo '<script>alert("PO generated Sucessfully '.$POID.'")</script>';
        ?>
        
        <script>
    window.location.href='components-gpo.php';
</script>
<?php
}

?>
              <form class="row g-3" method="post">
              <div class="row" id="show_product">
                        
                        </div>
                        
                <div class="col-2">
                  <label for="inputState" class="form-label">FO ID</label>
                  <select name="OID" id="OID" required placeholder="select" class="form-select">
                                                   <option value="" >
                                                   Select Order ID
                                                   </option> 
                                                   <?php
                                                   
                   $query="SELECT * FROM `orders` WHERE OSTATUS='Open'";  
                   $query_result= mysqli_query($con, $query);
               while( $row_list = mysqli_fetch_array(
                   $query_result)){  
                       echo $row_list["OID"];
                       
                   ?>  
                      
                       <option value="<?php echo $row_list['OID']; ?>">
                       <?php echo $row_list["OID"]; ?>
                       </option>  
                   <?php  
                   }  
                   ?>  
                                                   </select>
                </div>
                
                <div class="col-4">
                  <label for="inputName5" class="form-label">Notes</label>
                  <input type="text" class="form-control" id="Notes" name="Notes" placeholder="Notes" required>
                </div>
                
                <div class="text-center">
                  <button type="submit" name="Force_close" class="btn btn-primary">Force Closer</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>

              

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
                url:"searchresult3.php",  
                method:"POST",  
                data:{OID:OID},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 }); 
 </script>
</html>