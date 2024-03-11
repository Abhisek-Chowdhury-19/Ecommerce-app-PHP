<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('connection.php');
include('function.php');
$userdata = login($con);
if ($userdata!='NULL') {
    ?>
<script>
    window.location.href='index.php'
</script>
    <?php
}
?>
<head>
    <meta charset="utf-8">
    <title>Green Indien Restaurant - Forgot Password</title>
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
                <small class=" black"><i class="fa fa-map-marker-alt me-2 black"></i>123 Street, New York, USA</small>
                <small class="ms-4  black"><i class="fa fa-envelope me-2 black"></i>info@example.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end  black">
                <small class=" black">Follow us:</small>
                <a class="text-body ms-3  black" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3  black" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3 black" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3 black" href=""><i class="fab fa-instagram"></i></a>
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
                   
                    <a href="gallery.php" class="nav-item nav-link ">Gallery</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    <a href="login.php" class="nav-item nav-link active">Log-in</a>

                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Username</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div> -->
                    </div>
                    <a href="cart.php" class="nav-item nav-link"><i class="fa fa-shopping-cart" aria-hidden="true" style="float:left"></i> <span style="margin-left: 20px;text-align: center;position: absolute;float: left;color: white;display: block;background-color: red;border-radius:50%;width:15px;height:15px;overflow:hidden;font-size:10px">0</span></a>


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




    <div class="container-xxl py-5">
        <div class="container">
           
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Forgot Password</h1>
                <!-- <p>Contact Now</p> -->
            </div>
            <div class="row g-5 justify-content-center">
            <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible;animation-delay: 0.1s;animation-name: fadeInUp;background-repeat: no-repeat;background-size: 100%;background-image: url(&quot;img/login-1.jpg&quot;);border-radius: 10px;">
                    
                    </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s" style="height:90vh;">
                    <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <form method="post" class="loginmain" onsubmit='return logindata()'>
                        <div class="row g-3">
                            <h1>
                                Verify Email
                            </h1>
                            <div class="col-12 " style="margin-top:10%">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="bioemail-login" name="bioemail-login" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                    <span id="emailerror" style="color:red;"></span>

                                </div>
                            </div>
                            
                           
                            <div class="col-12" style="margin-top:10%">
                                <button class="btn btn-primary rounded-pill py-3 px-5" name="login" type="submit">GET OTP</button>
                            </div>
                        </div>
                    </form>
                        <form class="login-otpv" onsubmit='return otpv2()' style="display: none;">
                        <div class="col-12 " style="margin-top:10%">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="otp-login" name="bioemail-login" placeholder="Your Email" required>
                                    <label for="otpv">Please Check your Mail for OTP Verification</label>
                                    <span id="otplog" style="color:red;"></span>
                                </div>
                                <div class="col-12" style="margin-top:10%">
                                <button class="btn btn-primary rounded-pill py-3 px-5" name="otpv" type="submit">Verify OTP</button>
                            </div>
                            </div>

                        </form>
                        <form class="password-form" onsubmit='return newpass()' style="display: none;">
                        <div class="col-12 " style="margin-top:10%">
                        <div class="form-floating">
                                    <input type="Password" class="form-control" id="biopassword-login" name="biopassword-login" placeholder="biopassword" required>
                                    <label for="subject">New Password</label>
                                </div>
                                <div class="col-12" style="margin-top:10%">
                                <button class="btn btn-primary rounded-pill py-3 px-5" name="newpassword" type="submit">Change Password</button>
                            </div>
                            </div>

                        </form>
                        <div class="sucess" style="display:none;">
                            <h1>
                                
                                <i class="fa fa-check" aria-hidden="true" style="color: lightgreen;"></i>
                                Your Password has been Updated Sucessfully
                            </h1>
                        </div>

                 <script>
                    function newpass() {
                        var pass=document.getElementById('biopassword-login').value;
                      $.ajax({
                                                url:'changepassword.php',
                                                type:'post',
                                                data:{pass:pass},
                                                success:function(check){
                                                
                                           
                                                    if(check=='done'){
                                              
                                                      
                                                        $('.password-form').hide()
                                                        document.querySelector('.sucess').style.display='block';


                                                      
                                                    }
                                                    else{
                                                        // $('#otplog').html('Please enter valid otp');
                                                        // return false;
                                                        
                                                    }
                                                }
                                            });
                        return false;
                    }
                     function otpv2(){
                                            
                                            var x='no';
                                            var otp=$('#otp-login').val();
	                                            $.ajax({
                                                url:'forgototpv.php',
                                                type:'post',
                                                data:{otp:otp},
                                                success:function(check){
                                                
                                                 
                                                    if(check=='done'){
                                              
                                                        $('#otplog').html('');
                                                        $('.password-form').show()
                                                        document.querySelector('.login-otpv').style.display='none';


                                                      
                                                    }
                                                    else{
                                                        $('#otplog').html('Please enter valid otp');
                                                        return false;
                                                        
                                                    }
                                                }
                                            });
                                           
                                            return false;
                                            

                                        }
                      function logindata() {
                            var email=$('#bioemail-login').val();
                                //  alert(email)         
                                            // var contact=$('#bionum-signup').val();
                            // alert(email)
                            // alert(name)
                            // alert(contact)
                            // alert(password)
                            

                            $.ajax({
                                                url:'forgototp.php',
                                                type:'POST',
                                                data:{email:email},  
                                                success:function(result){ 
                                                    console.log(result);
                                                    if (result=='done') {
                                                        document.querySelector('#emailerror').innerHTML="";
                                                        document.querySelector('.loginmain').style.display='none';
                                                        document.querySelector('.login-otpv').style.display='block';
                                                        return false;
                                                       
                                                       
                                                    }
                                        
                                                    else{
                                                        document.querySelector('#emailerror').innerHTML="Enter a valid email";
                                                    }
                                                }
                                            });
                                          
                            return false;
                                        }

                 </script>
                </div>
            </div>
        </div>
    </div>
                </div>
               
           
            </div>
        </div>
    </div>


    <!-- Footer Start -->
   <?php
    include ('footer.php')
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
</body>

</html>