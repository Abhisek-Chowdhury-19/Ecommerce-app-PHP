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

  <title>Admin-Banner 1</title>
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
    <img src="assets/img/profile/GROCERY_LOGO.png" alt="" height="70px">
    
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
        
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $userdata['name']; ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $userdata['name']; ?></h6>
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
          <i class="bi bi-menu-button-wide"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-order.php">
              <i class="bi bi-circle"></i><span>All Order</span>
            </a>
          </li>
          <li>
            <a href="components-po.php">
              <i class="bi bi-circle"></i><span>Open Order</span>
            </a>
          </li>
          
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Product Manage</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-gorder.php">
              <i class="bi bi-circle"></i><span>Product</span>
            </a>
          </li>
          <li>
            <a href="components-gpo.php">
              <i class="bi bi-circle"></i><span>Category</span>
            </a>
          </li>
          <li>
            <a href="components-ginvoice.php">
              <i class="bi bi-circle"></i><span>Brands</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Forms Nav -->
         <!-- End Tables Nav -->


      <li class="nav-item">
        <a class="nav-link " data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Slider and Banner</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="pslider.php" >
              <i class="bi bi-circle"></i><span>Product Slider</span>
            </a>
            <li>
            <a href="cslider.php" >
              <i class="bi bi-circle"></i><span>Category Slider</span>
            </a>
          </li>
          <li>
            <a href="bone.php"    class="active">
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
     </li><!-- End Charts Nav -->

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
      </li><!-- End Profile Page Nav -->

     
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Banner 1</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Slider & Banner</li>
          <li class="breadcrumb-item active">Banner 1</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
    <section class="section">

    <?php
if(isset($_POST['save_multiple_data']))
{
  $pid=$_POST['Name'];
  $dimg='b1';
 
  $tname=$_POST['tname'];
  $from=$_POST['from'];
  $filename = $_FILES["uploadfile1"]["name"];
  $tempname = $_FILES["uploadfile1"]["tmp_name"];
  $shortname=$dimg;
  $filename= str_replace("$filename","$shortname",$filename);
  $tempname = $_FILES["uploadfile1"]["tmp_name"];
  $folder = "assets/img/Slider/".$filename.".jpg";


  

  if (move_uploaded_file($tempname, $folder)) {
    $qu="UPDATE banner1 set catid='$pid',title='$tname' ,img='$dimg' ,fro='$from' WHERE sno=1";
    $runqu=mysqli_query($con,$qu);

    ?>
<script>
  alert("New Product Slider Added");
  window.location.href='bone.php';

</script>
    <?php
  }

}

?>
    <form class="row g-3" method="post" enctype="multipart/form-data">
               
               
               
    <div class="col-10">
                 <label for="inputName5" class="form-label">Category name</label>
                 <select id="Name" class="form-select"  name="Name" required>
                   <option value="">Choose Category</option>
                   <?php
                         $query="SELECT * FROM `category`";  
                         $query_result= mysqli_query($con, $query);
                     while( $row_list = mysqli_fetch_array(
                         $query_result)){  
                             ?>
                             <option value="<?php echo $row_list['Category']; ?>">
                              <?php echo $row_list["Category"]; ?>
                              </option> 
                             <?php
                               
                         }
                    ?>
                 </select>
               </div>
               <br>
               <div class="col-4">
               <label for="inputName5" class="form-label">Cover Image 376 x 500</label>
               <input type="file" name="uploadfile1" value="" required>
                         
              </div>
              
              <div class="col-4">
                
               <label for="inputName5" class="form-label">Title</label>
               <input type="text" class="form-control" id="tname" name="tname" maxlength="90"  placeholder="Tilte name" required>
              
                         
              </div>

              <div class="col-4">
                
               <label for="inputName5" class="form-label">From</label>
               <input type="text" class="form-control" id="from" name="from" maxlength="90"  placeholder="FROM $ 2.40" required>
              
                         
              </div>

               <div class="text-center">
                 <button type="submit" name="save_multiple_data" class="btn btn-primary">Submit</button>
                 <button type="reset" class="btn btn-secondary">Reset</button>
               </div>
             </form>
             <img src="assets/img/Slider/banner_1.jpg" height=300px>
    

  </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
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

</html>