<!DOCTYPE html>
<html lang="en">
<?php
 use PHPMailer\PHPMailer\PHPMailer;

 use PHPMailer\PHPMailer\Exception;
session_start();
include('connection.php');
include('function.php');
$userdata = login($con);
?>
<head>
    <meta charset="utf-8">
    <title>Green Indien Restaurant - Contact</title>
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
                    <a href="contact.php" class="nav-item nav-link active">Contact Us</a>
                    <?php
                    if ($userdata=='NULL') {
                       ?>
 <a href="login.php" class="nav-item nav-link">Log-in</a>
                       <?php
                    }
                    else{
                       ?>
<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $userdata['Name']; ?></a>
                        <div class="dropdown-menu m-0">
                            <a href="liveorder.php" class="dropdown-item">Live Orders</a>
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated text-white slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Contact Us</a></li>
                    <!-- <li class="breadcrumb-item text-dark active" aria-current="page">Contact Us</li> -->
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Contact Us</h1>
                <p>Contact Now</p>
            </div>
            <div class="messageconfirm">
            <i class="fa fa-check-square" aria-hidden="true" style="color:green"></i>
      
                Our team will contact you shortly

            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Call Us</h5>
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>+43 676 7215256</p>
                        <h5 class="text-white">Email Us</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i>support@greenindienrestaurant.com</p>
                        <h5 class="text-white"> Address</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>Geiselbergstraße 14, 1110 Wien, Austria</p>
                        <h5 class="text-white">Follow Us</h5>
                        <div class="d-flex pt-2">
                            <!-- <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a> -->
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" target="_blank" href="https://www.facebook.com/profile.php?id=61551254630943"><i class="fab fa-facebook-f"></i></a>
                            <!-- <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a> -->
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" target="_blank" href="https://instagram.com/biogreen.vienna?igshid=NzZlODBkYWE4Ng=="><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <form method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="cname" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="cemail" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="csubject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="cmessage" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" name="contact" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <?php
                              if(isset($_POST['contact'])){
                                $name=$_POST['cname'];
                                $cemail=$_POST['cemail'];
                        
                                $csubject=$_POST['csubject'];
                                $cmessage=$_POST['cmessage'];
                               
                                $html="<div>
                                Name : ".$name."
                                <br>
                                Email: ".$cemail."
                                <br>
                
                                Subject: ".$csubject."
                                <br>
                                Message: ".$cmessage."
                                <br>
                            </div>";
                               
                                require 'phpmailer/src/Exception.php';
                                require "phpmailer/src/PHPMailer.php";
                                require "phpmailer/src/SMTP.php";
                                $mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
include 'maildata.php';
$mail->SMTPSecure = 'ssl';
$mail->Port=465;




$mail->isHTML (true);
$mail->Subject = "Contact Form";
$mail->Body = $html;
$mail->send();
?>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    document.querySelector('.messageconfirm').style.display='block';
</script>
<?php
                            }
                              ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10642.585636770722!2d16.3990705!3d48.1748957!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476da91218d77c11%3A0xc3597236bf77249a!2sBioGreen%20(Green%20Indien%20Restaurant)-%20Indian%20Restaurant!5e0!3m2!1sen!2sin!4v1701852294167!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Google Map End -->


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