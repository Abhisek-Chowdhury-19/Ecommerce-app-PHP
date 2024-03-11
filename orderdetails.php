<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('connection.php');
include('function.php');
$userdata = login($con);
if ($userdata=='NULL') {
    ?>
<script>
    window.location.href='login.php'
</script>
    <?php
}
?>
<head>
    <meta charset="utf-8">
    <title>Green Indien Restaurant - Order</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="Bio Green Logo.png" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        table{
            width: 100%;
        }
        th{
            padding: 8px;
        }
        td{
            padding: 8px;
            
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
                <small class=" black"><i class="fa fa-map-marker-alt me-2 black"></i>Geiselbergstraße 14, 1110 Wien</small>
                <small class="ms-4  black"><i class="fa fa-envelope me-2 black"></i>support@greenindienrestaurant.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end  black">
                <small class=" black">Follow us:</small>
                <a class="text-body ms-3  black" target="_blank" href="https://www.facebook.com/profile.php?id=61551254630943"><i class="fab fa-facebook-f"></i></a>
                <!-- <a class="text-body ms-3  black" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3 black" href=""><i class="fab fa-linkedin-in"></i></a> -->
                <a class="text-body ms-3 black" target="_blank" href="https://instagram.com/biogreen.vienna?igshid=NzZlODBkYWE4Ng=="><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <!-- <h1 class="fw-bold text-primary m-0">L<span class="text-secondary">og</span>o</h1> -->
                <img src="Bio Green Logo.png" height="70px">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="menu.php" class="nav-item nav-link">Menu</a>
                   
                    <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                    <a href="contact.php" class="nav-item nav-link ">Contact Us</a>
                    <?php
                    if ($userdata=='NULL') {
                       ?>
 <a href="login.php" class="nav-item nav-link">Log-in</a>
                       <?php
                    }
                    else{
                       ?>
<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><?php echo $userdata['Name']; ?></a>
                        <div class="dropdown-menu m-0">
                            <a href="liveorder.php" class="dropdown-item ">Live Orders</a>
                            <a href="allorder.php" class="dropdown-item">All Orders</a>
                            <a href="logout.php" class="dropdown-item">Log-out</a>
                            <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                        </div>
                    </div>
                       <?php
                    }
                    ?>
    
                    <a href="cart.php" class="nav-item nav-link"><i class="fa fa-shopping-cart" aria-hidden="true" style="float:left"></i> <span id="cartitemnumber" style="margin-left: 20px;text-align: center;position: absolute;float: left;color: white;display: block;background-color: red;border-radius:50%;width:15px;height:15px;overflow:hidden;font-size:10px">0</span></a>

                </div>
                <!-- <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-search text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-shopping-bag text-body"></small>
                    </a>
                </div> -->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


  

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Orders Details</h1>
                <?php
                   if ($_SERVER['REQUEST_METHOD']=='GET') {
                    $orderid=$_GET['orderid'];
                 
                
                    }
                ?>
                <p><?php echo $orderid;?></p>
                <p>
                    For more Information regarding this order contact <a href="tel:06767215256">06767215256</a>
                </p>
            </div>
         
                <table>
                    <tr>

                        <th>Sno</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                  
                    <?php
        error_reporting(0);
        $item=  mysqli_query($con,"select * from orderitem where oid='".$orderid."'");
        while ($orderitem=mysqli_fetch_array($item)) {
      

        ?> 
             

                    <tr>
                       

                            <td><i class="fa fa-shopping-cart" aria-hidden="true" style="float:left"></i> </td>
                            <td>  <?php echo $orderitem['name']; ?>(<?php echo $orderitem['spice_level']; ?> ) <br> €<?php echo $orderitem['price']; ?>
                        </td>
                            <td><?php echo $orderitem['quantity']; ?></td>
                            <td>€<?php echo $orderitem['quantity']*$orderitem['price']; ?></td>
                  
                    </tr>
                    <?php

}
$id=$userdata['id'];
$totaldetails=mysqli_fetch_array(mysqli_query($con,"select * from bgorder where c_id='".$id."' and orderid='".$orderid."'" ));
?>
<tr>

    <td></td>
    <td></td>
    <th>
        Delivery Fees
    </th>
    <td>
    € <?php echo $totaldetails['delivery_charge']; ?>
    </td>
</tr>
<tr>

    <td></td>
    <td></td>
    <th>
        Total
    </th>
    <td>
    € <?php echo $totaldetails['delivery_charge']+$totaldetails['amount'];
    $addressdata=mysqli_fetch_array(mysqli_query($con,"SELECT * from address where orderid='$orderid'"));
    ?>
    </td>
</tr>
                </table>
                <table>
                    <tr>
                        
                   
                    <th>
                        Shipping Details:-
                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                    <th>
</tr>
                   
                    <tr>
                    <th>Nr</th>
                        <th>Straße</th>
                        <th>Stock</th>
                        <th>Ort / Stadt</th>
                        <th>Top</th>


                      
                       
                    </tr>
                    <tr>
                        <td><?php echo $addressdata['No'] ?></td>
                        <td><?php echo $addressdata['Street']; ?></td>
                        <td><?php echo $addressdata['floor'] ?></td>

                        <td><?php echo $addressdata['Location']; ?></td>
                        <td><?php echo $addressdata['Top']; ?></td>



                       

                       

                    </tr>
<tr>

  
        <th>Postleitzahl</th>
        <th>Phone Number</th>
   
</tr>

<tr>
<td><?php echo $totaldetails['zipcode']; ?></td>
    
<td><?php echo $totaldetails['phone']; ?></td>
</tr>
</table>
                    <table>

                   
                    <tr>
                    <th>Email </th>
                   
                    </tr>
                    <tr>
                    <td><?php echo $totaldetails['email']; ?></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        
                   
                    <th>
                       Payment Mode:-
                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                    </tr>
                    <tr>
                        <th><?php echo $totaldetails['Payment_mode']; ?></th>
                      
                        <th><?php echo $totaldetails['transationid']; ?></th>
                        <th><?php echo $totaldetails['transactionstatus']; ?></th>
                       
                    </tr>
                  
                </table>
        </div>
    </div>
    <!-- Contact End -->




    <!-- Footer Start -->
   <?php
include 'footer.php'
   ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
         function cartdata() {
       var datad=0;
            $.ajax({
          url: 'cartcheck.php',
          type: 'post',
          data: { datad: datad },
          success: function (response) {
              
              let test=document.querySelector('#cartitemnumber').innerHTML=response;
            //   console.log(test);
            
          
          }
        });
        
   }
   cartdata();
    </script>
</body>
</html>