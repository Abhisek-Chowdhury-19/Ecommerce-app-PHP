<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('connection.php');
include('function.php');
$userdata = login($con);
?>
<head>
    <meta charset="utf-8">
    <title>Green Indien Restaurant - Menu</title>
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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
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
                    <a href="menu.php" class="nav-item nav-link active">Menu</a>
                   
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
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Menu</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Menu</a></li>
                   
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <!-- Mittagsmenü -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Menu</h1>
                        <p>Discover the Rich Flavors of India at Green Indien Restaurant</p>
                        <h1 class="display-5 mb-3">Bio Green Mittagsmenü</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Mittagsmenü" ORDER BY RAND() ');
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
                                                    ?>
                                        <?php echo $productdata['item_name']; ?>
                                    </a>
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
                                </div>
                                <div class="d-flex border-top">
                                   
                                    <small class="w-100 text-center py-2">
                                    <?php
                                                    if ($userdata=='NULL') {
   
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Suppen -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Suppen</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Suppen" ORDER BY RAND() ');
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
                                                    ?>
                                        
                                    <?php echo $productdata['item_name']; ?></a>
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Vorspeisen -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Vorspeisen</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Vorspeisen" ORDER BY RAND() ');
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
                                                    ?>
                                        
                                    <?php echo $productdata['item_name']; ?></a>
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Salate -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Salate</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Salate" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>


    <!-- Vegetarische Hauptspeisen -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Vegetarische Hauptspeisen</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Vegetarische Hauptspeisen" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Hühnerfleischgerichte -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Hühnerfleischgerichte</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Hühnerfleischgerichte" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Lammfleischgerichte -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Lammfleischgerichte</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Lammfleischgerichte" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Rinderfleischgerichte -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Rinderfleischgerichte</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Rinderfleischgerichte" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

   
    
    <!-- Reisgerichte -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Reisgerichte</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Reisgerichte" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Thali -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Thali</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Thali" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Beilagen -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Beilagen</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Beilagen" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Chutney -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Chutney</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Chutney" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Nachspeisen -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Nachspeisen</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Nachspeisen" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Ayurvedische Getränke -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Ayurvedische Getränke</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Ayurvedische Getränke" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Getränke -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Getränke</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Getränke" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>

    <!-- Alkoholische Getränke -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                       
                   
                        <h1 class="display-5 mb-3">Bio Green - Alkoholische Getränke</h1>

                    </div>
                </div>
           
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                    $product=mysqli_query($con,'select * from menu WHERE category="Alkoholische Getränke" ORDER BY RAND() ');
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
                                    <span class="text-primary me-1">€<?php echo $productdata['Price']; ?></span>
                                    <div class="text-body"><?php echo $productdata['disc']; ?></div>
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
                       
                    </div>
                </div>
          
            </div>
        </div>
    </div>


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
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        let custId;
        function popclose() {
    document.querySelector('.spicepopup').style.scale=0;
    document.querySelector('.spicepopup').style.opacity=0;

   }
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
    </script>
</body>

</html>