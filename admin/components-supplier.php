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

  <title>Supplier</title>
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
          <i class="bi bi-menu-button-wide"></i><span>Search & Update</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
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
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Manage List</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-supplier.php"  class="active">
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
     <!-- End Tables Nav -->

      
           <?php
      
           if($userdata['level']=='Admin')
      {
      
      ?>

      <li class="nav-heading">Admin</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Force Closer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
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
      <h1>Supplier</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Manage List</li>
          <li class="breadcrumb-item active">Supplier</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">

        <?php
        if(isset($_POST['save_multiple_data']))
{
    $name = $_POST['name'];
    $phone = $_POST['phonenumber'];
    $address = $_POST['Address'];
    $pincode = $_POST['Pincode'];
    $GST=$_POST['gst'];
    $alterphone = $_POST['alternum'];
    $email = $_POST['Email'];
    $whatsapp = $_POST['whatsapp'];
    $item = $_POST['item'];
    $notes=$_POST['note'];
      

        $query = "INSERT INTO suppliers (Name,Contact,Address,Pincode,GST,Item,AlterContact,Email,WhatsApp,Notes) VALUES ('$name','$phone','$address','$pincode','$GST','$item','$alterphone','$email','$whatsapp','$notes')";
        $query_run = mysqli_query($con, $query);
        echo"<h1>";
        echo '<script>alert("Supplier Updated Sucessfully '.$name.'")</script>';
        ?>
        
        <script>
    window.location.href='components-supplier.php';
</script>
<?php
}

?>

              <form class="row g-3" method="post">

                <div class="col">
                  <label for="inputName5" class="form-label">Name</label>
                  <input type="text" class="form-control" id="Name" name="name" placeholder="Name">
                  <span class="check" id="check" style="color:red;"></span>
                </div>
                
                <div class="col">
                  <label for="inputEmail5" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" id="Phonenumber" name="phonenumber" placeholder="Phone Number">
                </div>
                <div class="col-md-5">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="Email" placeholder="Email">
                </div>
                <div class="col-md-7">
                  <label for="Address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="Address" name="Address" placeholder="Address">
                </div>
                <div class="col">
                  <label for="whatsapp" class="form-label">Whats App Number</label>
                  <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Whats App Number">
                </div>
                <div class="col">
                  <label for="alternum" class="form-label">Alternative Number</label>
                  <input type="text" class="form-control" id="alternum" name="alternum" placeholder="Alternative Number">
                </div>
                
                <div class="col-4">
                  <label for="Pincode" class="form-label">Pincode</label>
                  <input type="text" class="form-control" id="Pincode" name="Pincode" placeholder="Pincode">
                </div>
                <div class="col-4">
                  <label for="GST" class="form-label">GST Number</label>
                  <input type="text" class="form-control" id="GST" name="gst" placeholder="GST Number">
                </div>
                <div class="col-4">
                  <label for="notes" class="form-label">Notes</label>
                  <input type="text" class="form-control" id="GST" name="note" placeholder="notes">
                </div>
                
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Item</label>
                  <select id="inputState" class="form-select"  name="item" required>
                    <option value="">Choose...</option>
                    <option value="Fabric"> Fabric</option>
                    <option value="Trims">Trims</option>
                  </select>
                </div>
                
                <div class="text-center">
                  <button type="submit" name="save_multiple_data" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>

              <!-- Table with stripped rows -->
              <table class="table  table-bordered datatable">
                <thead class="table-info"> 
                  <tr>
    <th>Sno</th>
		<th>Name</th>
		<th>Contact</th>
		<th>Address</th>
		<th>Pincode</th>
		<th>GST</th>
		<th>Item</th>
		<th>Alter Contact</th>
		<th>Email</th>
		<th>Whats App</th>
    <th>Notes</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php
           
            $query = "SELECT * FROM suppliers";
            $return = '';
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0)
            {
              

              while($row1 = mysqli_fetch_array($result))
	{
		$return .= '
	
<tr>


              <td>'.$row1["Sno"].'</td>
              <td>'.$row1["Name"].'</td>
              <td>'.$row1["Contact"].'</td>
              <td>'.$row1["Address"].'</td>
              <td>'.$row1["Pincode"].'</td>
              <td>'.$row1["GST"].'</td>
              <td>'.$row1["Item"].'</td>
              <td>'.$row1["AlterContact"].'</td>
              <td>'.$row1["Email"].'</td>
              <td>'.$row1["WhatsApp"].'</td>
                  <td>'.$row1["Notes"].'</td>
</tr>';
	}
	echo $return;

            }
        ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <div class="modal fade" id="fullscreenModal" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Order Details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Test
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
          </div>

  

  

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
 $(document).keyup(function(){  
      $('#Name').keyup(function(){  
           var Name = $(this).val();  
           $.ajax({  
                url:"supcheck.php",  
                method:"POST",  
                data:{Name:Name},  
                success:function(data){  
                  
                     $('#check').html(data);  
                }  
           });  
      }); 
      


      
      
 }); 

 
  </script>
</html>