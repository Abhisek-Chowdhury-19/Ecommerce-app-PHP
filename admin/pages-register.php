<?php
session_start();

include("connection.php");
include("function.php");
$userdata= check_login($con);

if ($userdata['Role']=='Owner') {



}
else{
  ?>
<script>
  window.location.href='index.php';
</script>
  <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
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
              <span>Admin</span>
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
      </li><!-- End Forms Nav -->

     <!-- End Tables Nav -->

      


      
     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Order Manage</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-gorder.php">
              <i class="bi bi-circle"></i><span>Open Order</span>
            </a>
          </li>
          <li>
            <a href="components-gpo.php">
              <i class="bi bi-circle"></i><span>All Order</span>
            </a>
          </li>
          <li>
            <a href="components-ginvoice.php">
              <i class="bi bi-circle"></i><span>Pincode Manager</span>
            </a>
          </li>
          <!-- <li>
            <a href="components-ginvoice.php">
              <i class="bi bi-circle"></i><span>Brands</span>
            </a>
          </li> -->
          
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
        <a class="nav-link " href="pages-register.php">
          <i class="bi bi-person"></i>
          <span>Add Account</span>
        </a>
      </li><!-- End Profile Page Nav -->

      

    </ul>

  </aside>
  
  
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" enctype="multipart/form-data">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                 
                  
                    
                   
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="upload" type="submit">Create Account</button>
                    </div>

                   
                  </form>
                  <?php
                
                    if (isset($_POST['upload'])) {

                         $name=$_POST['name'];
                                    $username=$_POST['username'];
                                    $password=md5($_POST['password']);
                                 
                                  
                                    
                            
                                          $query ="INSERT INTO adminlogin (Name,Email,Password,Role) VALUES ('$name','$username','$password','Admin')";
                                          $query_run = mysqli_query($con, $query);

                                          ?>
                                                <div class="alert alert-success">
  
  <script>          
  alert("Account Created Sucessfull")
                    
                     window.location.href='pages-register.php';
                </script>
 

</div>
                                          <?php
                                       
                                          
                                 
            
                        }
                            ?>
                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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

</html>