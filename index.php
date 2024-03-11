<?php
session_start();
include('connection.php');
include('function.php');
$userdata = login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Indien Restaurant</title>
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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   
       <audio id="mySound" src='music.mp3'></audio>
<div class="popvideo" onclick="closevideo()" >
<i class="fa fa-times-circle" aria-hidden="true"></i>
        <div class="videopop" >
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/qVMc30aoMcQ?si=FYROdNeKe8gIcPRp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="menu.php" class="nav-item nav-link">Menu</a>
                   
                    <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
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
                   
                    <a href="cart.php" class="nav-item nav-link"><i class="fa fa-shopping-cart" aria-hidden="true" style="float:left"></i> <span style="margin-left: 20px;text-align: center;position: absolute;float: left;color: white;display: block;background-color: red;border-radius:50%;width:15px;height:15px;overflow:hidden;font-size:10px" id='cartitemnumber'>0</span></a>


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

 <div class="spicepopup">
   <div class="spiceinner">
    <div class="closebtn" onclick="popclose()">
    X
    </div>

    <div class="col-12 add-mar">

<div class="form-floating">


    <select class="form-control spice-level" name="spicebg" id="spice" style="background-color:white;margin-top:10%" required>
        <option value="">Wählen Sie Gewürzstufe</option>
        <option value="Mild">Mild</option>
        <option value="Pikant">Pikant</option>
        <option value="Scharf">Scharf</option>
        <option value="Extra scharf">Extra scharf</option>
    </select>
    <label for="spice">Gewürzstufe</label>
    <div class="addnewbtn" style="margin-top:10%">
    <div class="d-flex border-top" >
                                   
                                   <small class="w-100 text-center py-2">
                                       <a class="text-body add-to-cart-2" onclick="addtocart()" data-id="1" href="javascript:void(0)"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>

                                       </small>
                               </div>
    </div>
</div>
</div>
   </div>
 </div>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1-new.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="play-button" onclick="openvideo()">
                                <i class="fa fa-play play1"></i>
                                <i class="fa fa-play play2"></i>

                            </div>
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h3 class="display-2 mb-5 animated slideInDown">Welcome to Bio Green Indien Restaurant</h3>
                                    <a href="menu.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Menu</a>
                                    <a href="contact.php" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Natural Food Is Always Healthy</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                    <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
           
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Menu</h1>
                        <p>Discover the Rich Flavors of India at Green Indien Restaurant</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Our Recommendation</a>
                        </li>
                        <!-- <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Main Course </a>
                        </li> -->
                        <li class="nav-item me-2 mb-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Veg </a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-4">Non-Veg </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu  ORDER BY RAND() Limit 8');
                    while($productdata=mysqli_fetch_array($product))
                    {
                    
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="admin/assets/img/products/<?php echo $productdata['img']; ?>.jpg" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                <?php
                                                    if ($userdata=='NULL') {
                                                        ?>


                                    <a class="d-block h5 mb-2" href="login.php">
                                                    <?php
                                                    
                                                    }else{
                                                        if ($productdata['category']=='Alkoholische Getränke' || $productdata['category']=='Getränke') {                          
?>
  <a class="d-block h5 mb-2 add-to-cart-new" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0);">
<?php  
  }
  else{
   ?>
<a class="d-block h5 mb-2 add-to-cart" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0)">
   <?php
  }
}
                                                    ?><?php echo $productdata['item_name']; ?></a>
                                    <!-- <span class="text-body ">Helloasdjasd  </span> -->
                                    <!-- <br> -->

                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                </div>
                                <div class="d-flex border-top">
                                   
                                    <small class="w-100 text-center py-2">
                                    <?php
                                                    if ($userdata=='NULL') {
                                                        # code...
                                                  

?>
                                                                                   <a class="text-body" href="login.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>

                                        <?php

}else{
    if ($productdata['category']=='Alkoholische Getränke' || $productdata['category']=='Getränke') {
        ?>
        <a class="text-body add-to-cart-new" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0)"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
    <?php
    }
    else{


   
    ?>
    <a class="text-body add-to-cart" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0)"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>

    <?php
 }
}
?>
                                    </small>
                                </div>
                            </div>
                        </div>
                       <?php
                    }
                       ?>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="menu.php">Browse More</a>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                    <?php
                    $productmain=mysqli_query($con,'select * from menu where category="main-course" ORDER BY RAND() Limit 8');
                    while($productdatamain=mysqli_fetch_array($productmain))
                    {
                    
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 " data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="admin/assets/img/products/<?php echo $productdatamain['img']; ?>.jpg" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                <?php
                                                    if ($userdata=='NULL') {
                                                        ?>


                                    <a class="d-block h5 mb-2" href="login.php">
                                                    <?php
                                                    
                                                    }else{
                                                        if ($productdata['category']=='Alkoholische Getränke' || $productdata['category']=='Getränke') {                          
?>
  <a class="d-block h5 mb-2 add-to-cart-new" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0);">
<?php  
  }
  else{
   ?>
<a class="d-block h5 mb-2 add-to-cart" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0)">
   <?php
  }
}
                                                    ?><?php echo $productdatamain['item_name']; ?></a>
                                    <span class="text-primary me-1">€<?php echo $productdatamain['Price']; ?></span>
                                    <!-- <span class="text-body text-decoration-line-through">$</span> -->
                                </div>
                                <div class="d-flex border-top">
                                   
                                    <small class="w-100 text-center py-2">
                                    <?php
                                                    if ($userdata=='NULL') {
                                                        # code...
                                                  

?>
                                                                                   <a class="text-body" href="login.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>

                                        <?php

}else{
    ?>
    <a class="text-body add-to-cart" data-id="<?php echo $productdatamain['item_id'];?>" href="javascript:void(0)"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>

    <?php

}
?> </small>
                                </div>
                            </div>
                        </div>
                       <?php
                    }
                       ?>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="menu.php">Browse More </a>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE sub_cat="Veg" ORDER BY RAND() Limit 8');
                    while($productdata=mysqli_fetch_array($product))
                    {
                    
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 " data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="admin/assets/img/products/<?php echo $productdata['img']; ?>.jpg" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                <?php
                                                    if ($userdata=='NULL') {
                                                        ?>


                                    <a class="d-block h5 mb-2" href="login.php">
                                                    <?php
                                                    
                                                    }else{
                                                        if ($productdata['category']=='Alkoholische Getränke' || $productdata['category']=='Getränke') {                          
?>
  <a class="d-block h5 mb-2 add-to-cart-new" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0);">
<?php  
  }
  else{
   ?>
<a class="d-block h5 mb-2 add-to-cart" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0)">
   <?php
  }
}
                                                    ?><?php echo $productdata['item_name']; ?></a>
                                    <!-- <span class="text-body ">Helloasdjasd  </span> -->
                                    <!-- <br> -->

                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                </div>
                                <div class="d-flex border-top">
                                   
                                    <small class="w-100 text-center py-2">
                                    <?php
                                                    if ($userdata=='NULL') {
                                                        # code...
                                                  

?>
                                                                                   <a class="text-body" href="login.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>

                                        <?php

}else{
    ?>
    <a class="text-body add-to-cart" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0)"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>

    <?php

}
?></small>
                                </div>
                            </div>
                        </div>
                       <?php
                    }
                       ?>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="menu.php">Browse More </a>
                        </div>
                    </div>
                </div>
                <div id="tab-4" class="tab-pane fade show p-0">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu  WHERE sub_cat="Non-Veg" ORDER BY RAND() Limit 8');
                    while($productdata=mysqli_fetch_array($product))
                    {
                    
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6  " data-wow-delay="0s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="admin/assets/img/products/<?php echo $productdata['img']; ?>.jpg" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                <?php
                                                    if ($userdata=='NULL') {
                                                        ?>


                                    <a class="d-block h5 mb-2" href="login.php">
                                                    <?php
                                                    
                                                    }else{
                                                        if ($productdata['category']=='Alkoholische Getränke' || $productdata['category']=='Getränke') {                          
?>
  <a class="d-block h5 mb-2 add-to-cart-new" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0);">
<?php  
  }
  else{
   ?>
<a class="d-block h5 mb-2 add-to-cart" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0)">
   <?php
  }
}
                                                    ?><?php echo $productdata['item_name']; ?></a>
                                    <!-- <span class="text-body ">Helloasdjasd  </span> -->
                                    <!-- <br> -->

                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                </div>
                                <div class="d-flex border-top">
                                   
                                    <small class="w-100 text-center py-2">
                                    <?php
                                                    if ($userdata=='NULL') {
                                                        # code...
                                                  

?>
                                                                                   <a class="text-body" href="login.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>

                                        <?php

}else{
    ?>
    <a class="text-body add-to-cart" data-id="<?php echo $productdata['item_id'];?>" href="javascript:void(0)"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>

    <?php

}
?> </small>
                                </div>
                            </div>
                        </div>
                       <?php
                    }
                       ?>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="menu.php">Browse More </a>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Product End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden  pe-0" style="border-radius: 10px;">
                        <img class="img-fluid w-100" src="img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">About Green Indien Restaurant</h1>
                    <p class="mb-4">"Discover the Rich Flavors of India at Green Indien Restaurant"  Welcome to Green Indien Restaurant, where we invite you on a culinary journey to experience the vibrant and diverse flavors of Indian cuisine.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Special Events and Celebrations</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Exquisite Flavors and Ingredients</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Authenticity and Tradition</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="about.php">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Features</h1>
                <p>Why Choose Our Restaurant?</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/sv1.png" alt="">
                        <h4 class="mb-3">Exquisite Flavors and Ingredients</h4>
                        <p class="mb-4">Immerse yourself in a symphony of flavors meticulously crafted from a diverse array of ingredients sourced from across the Indian continent.</p>
                        <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/sv2.png" alt="">
                        <h4 class="mb-3">Warm Hospitality</h4>
                        <p class="mb-4">Experience the warmth and hospitality that is characteristic of Indian culture. Our attentive staff is dedicated to ensuring that your dining experience is not only delicious but also memorable. Feel at home in our inviting atmosphere that reflects the genuine spirit of Indian hospitality.</p>
                        <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/sv3.png" alt="">
                        <h4 class="mb-3">A Culinary Adventure</h4>
                        <p class="mb-4">Step outside the ordinary and embark on a culinary adventure with our carefully crafted menu. Whether you are a seasoned enthusiast of Indian cuisine or a first-time explorer, our menu offers a variety of options to suit every palate, promising a unique and delightful dining experience.</p>
                        <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->





    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Visit Our Place</h1>
                    <p class="text-white mb-0">Are you craving for some delicious and authentic Indian cuisine? If yes, then you should visit our place, the best Indian restaurant in town.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="https://maps.app.goo.gl/JuEFFbxBPxn2nXbA6" target='_blank'>Visit Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Customer Review</h1>
                <p>Testimonial</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Cinnamon Chai Euphoria at Green Indian Restaurant is a delightful escape into Indian tea culture. The Masala Chai is authentically spiced, and the street food selection is a nostalgic journey. The relaxed atmosphere makes it a perfect spot for a casual meal or a leisurely evening with friends."
</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Preeti's Culinary Escape</h5>
                            <!-- <span>Profession</span> -->
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Minty Mango Delights at Green Indian Restaurant offer a refreshing twist. The Mint Chutney paired with the Samosas is a burst of freshness. The restaurant's contemporary décor and friendly staff create a welcoming atmosphere. Be sure to try the Mango Lassi for a sweet and tangy treat!"</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Vikram's Fusion Retreat</h5>
                            <!-- <span>Profession</span> -->
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Turmeric Tango at Green Indian Restaurant is a culinary adventure for the taste buds. The Chicken Tikka Masala is a standout dish with its creamy tomato-based sauce and perfectly grilled chicken. The staff's attentiveness ensures a delightful dining experience. An absolute must-visit for Indian cuisine enthusiasts!"</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Turmeric Tango by Arjun:</h5>
                            <!-- <span>Profession</span> -->
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Cardamom Whispers at Green Indian Restaurant is a true culinary haven. The use of cardamom in the Chana Masala is a game-changer, adding depth and richness to the dish. The service is impeccable, and the restaurant's ambiance is cozy. Don't miss out on the Vegetable Korma – a symphony of vegetables in a luscious, nutty sauce!"

</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1"> Nisha's Spice Haven</h5>
                            <!-- <span>Profession</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


  

    <!-- Footer Start -->
    <?php
include('footer.php')
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
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script type="text/javascript">
        
         let custId;
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
   function popclose() {
    document.querySelector('.spicepopup').style.scale=0;
    document.querySelector('.spicepopup').style.opacity=0;

   }
    $(document).ready(function () {
 
      $('.add-to-cart').click(function () {
       
         custId = $(this).data('id');
            document.querySelector('.spicepopup').style.scale=1;
            document.querySelector('.spicepopup').style.opacity=1;

  
      });
 
    });
    $(document).ready(function () {
 
 $('.add-to-cart-new').click(function () {
  
    custId = $(this).data('id');
   
    $.ajax({
          url: 'cartadd.php',
          type: 'post',
          data: { custId: custId,
        spice:"" },
          success: function (response) {
            console.log(response);
               if (response=="YES") {
                
                alertify.set('notifier','position', 'top-right');
               alertify.success('Product Added to Cart').dismissOthers();
              
    
           }
            
           cartdata();
          }
        });

 });

});
    function addtocart(){
        var spicedata=$('#spice').val();
        console.log(custId,spicedata);
        $.ajax({
          url: 'cartadd.php',
          type: 'post',
          data: { custId: custId,
        spice:spicedata },
          success: function (response) {
            console.log(response);
               if (response=="YES") {
                
                alertify.set('notifier','position', 'top-right');
               alertify.success('Product Added to Cart').dismissOthers();
              
    
           }
            
           cartdata();
          }
        });
    }
    cartdata();
    function closevideo() {
        document.querySelector(".popvideo").style.scale=0;
        document.querySelector(".popvideo").style.opacity=0;


    }
    function openvideo()
    {
        document.querySelector(".popvideo").style.scale=1;
        document.querySelector(".popvideo").style.opacity=1;

    }
</script>

</body>

</html>