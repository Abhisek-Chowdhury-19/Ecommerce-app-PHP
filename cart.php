<!DOCTYPE html>
<html lang="en">

<?php
 use PHPMailer\PHPMailer\PHPMailer;

 use PHPMailer\PHPMailer\Exception;
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
    <title>Green Indien Restaurant - Cart</title>
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
        
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 0px solid #ddd;
            padding: 8px 0px 8px 8px;
            text-align: left;
        }

        /* Set the width for each column */
        th:nth-child(1),
        td:nth-child(1) {
            width: 10%;
        }

        th:nth-child(2),
        td:nth-child(2) {
            width: 20%;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 30%;
        }

        th:nth-child(4),
        td:nth-child(4) {
            width: 20%;
        }

        th:nth-child(5),
        td:nth-child(5) {
            width: 20%;
        }
        .quantity-container {
            display: flex;
            align-items: center;
        }

        .quantity-input {
            width: 40px;
            text-align: center;
        }

        .quantity-btn {
          cursor: pointer;
            padding: 5px;
            background-color: #4caf50; /* Green background color */
            color: white; /* White text color */
            border: 1px solid #4caf50; /* Green border */
            border-radius: 4px;
            margin: 0 5px;
      
        }

        .total-price {
            margin-left: 10px;
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
    
                    <a href="cart.php" class="nav-item nav-link active"><i class="fa fa-shopping-cart" aria-hidden="true" style="float:left"></i> <span id="cartitemnumber" style="margin-left: 20px;text-align: center;position: absolute;float: left;color: white;display: block;background-color: red;border-radius:50%;width:15px;height:15px;overflow:hidden;font-size:10px">0</span></a>

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
                <h1 class="display-5 mb-3">Your Cart</h1>
                <p>Checkout</p>
            </div>
            <?php
            $spicereq=true;
 $checkdata=mysqli_fetch_array(mysqli_query($con,"select * from status where sno=1"));

 if ($checkdata['status']=='Open') {

            ?>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary text-white d-flex flex-column  h-100 " style="
    background-image: url(img/cartback.jpg);
    border-radius: 10px;
    background-size: cover;
    box-shadow: inset 0 0 0 1000px rgb(0 10 0 / 77%);
">
                                             

                                             <table>
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <!-- Add your table rows and data here -->
            <?php
$id=$userdata['id'];
$total=0;
$i=0;
$product=mysqli_query($con,'select * from cart where c_id='.$id.'');
while($cartdata=mysqli_fetch_array($product))
{
    $pdata=mysqli_fetch_array(mysqli_query($con,'select * from menu where item_id='.$cartdata["p_id"].''));
    $itemtotal=$pdata['Price']*$cartdata['quantity'];
    if ($pdata['category']=='Alkoholische Getränke' || $pdata['category']=='Getränke' ||  $pdata['category']=='Ayurvedische Getränke' ||  $pdata['category']=='Nachspeisen' ) {
        $spicereq=false;
    }
    else{
        $spicereq=true;
    }
    $total=$itemtotal+$total;
    $i++;
?>
                        <tr>
                <td><?php echo $i;?></td>
                <td> <img src="admin/assets/img/products/<?php echo $pdata['img'];?>.jpg" width="50px" style="border-radius:10px"> </td>
                <td><?php echo $pdata['item_name']; ?>(<?php echo $cartdata['spice_level'];?>)
            <br>
            €<?php echo $pdata['Price']; ?>
            </td>
                <td>  
                     <div class="quantity-container">
        <div class="quantity-btn btn-delete"  data-cartid="<?php echo $pdata['item_id'];?>">-</div>
     
        <input type="number" id="quantity" class="quantity-input" value="<?php echo $cartdata['quantity']; ?>" min="1" disabled>
        <div class="quantity-btn add-btn" data-cartid="<?php echo $pdata['item_id'];?>">+</div>
    </div>
       
    </div></td>


                <td> €<?php echo $itemtotal; ?></td>
            </tr>
                        
                      <?php

}?>
   
           
             
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    <h5 class="text-white p-3">Delivery Fees <span class="deliveryprice" style='float:right'>
    €  0
</span></h5>
<h5 class="text-white p-3">Total <span class="itemprice" style='float:right'>
€ <?php echo $total; ?>
</span></h5>


                      
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <form method='post' action='checkout.php'>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="<?php echo $userdata['Name']; ?>" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Name  *</label>
                                    <div id="namebill" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" value="<?php echo $userdata['Email']; ?>" id="email" placeholder="Your Email" required>
                                    <label for="email">E-Mail Adresse *</label>
                                    <div id="add-ress" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" value="<?php echo $userdata['Phone']; ?>" class="form-control" name="phonenumber" id="phonenumber" placeholder="phonenumber" required>
                                    <label for="phonenumber">Telefon *</label>
                                    <div id="add-phone" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" name="pincode" id="pincode" placeholder="pincode" onkeyup="pincheck()" required>
                                    <label for="pincode">Postleitzahl *</label>
                                    <span id="pin_error" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" value="" class="form-control" name="Street" id="Street" placeholder="Street" required>
                                    <label for="Street">Straße  *</label>
                                   
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="No" id="No" placeholder="No" required>
                                    <label for="No ">Nr *</label>
                                    
                                </div>
                            </div>
                           
                            
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="floor" id="floor" placeholder="floor" required>
                                    <label for="floor">Stock *</label>
                                    <span id="pin_error" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text"  class="form-control" name="Stairs" id="Stairs" placeholder="Stairs" >
                                    <label for="Stairs">Stiege</label>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" value="" class="form-control" name="Top" id="Top" placeholder="Top" >
                                    <label for="Top">Top</label>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" value="" class="form-control" name="Location" id="Location" placeholder="Location" required>
                                    <label for="Location">Ort / Stadt *</label>
                                    
                                </div>
                            </div>
                          
                            
  
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Notes" name="Notes" id="Notes" style="height: 100px"></textarea>
                                    <label for="message">Notes</label>
                                </div>
                            </div>
                            <?php
                            if ($i==0) {
                              ?>
<span style="color:red;">Cart Cannot be Empty</span>
                              <?php
                            }
                            else{

                            
                            ?>
                            
                            <div class="col-12" id="subcod">
                                <button class="btn btn-primary rounded-pill py-3 px-5 mb-3" type="submit" >Checkout</button>
                              
                          
                            </div>
                            <div id="errornew" style="color: red;">

                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </form>

                 
                </div>
            </div>
            <?php

}
else{
    ?>
    <img src="close.png" alt="" style="width:50%; margin-left:25%;">
    
            <?php
    
}
?>
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
     
            $(document).ready(function () {
            $('.add-btn').click(function () {
                var custId = $(this).data('cartid');
                $.ajax({
          url: 'cartadd.php',
          type: 'post',
          data: { custId: custId },
          success: function (response) {
            console.log(response)
           if (response=="YES") {
          
       
            window.location.href="cart.php";
    
           }
            
          }
        });
            })
        });
      
        $(document).ready(function () {
 
 $('.btn-delete').click(function () {
  
   var custId = $(this).data('cartid');
  
   $.ajax({
     url: 'cartremove.php',
     type: 'post',
     data: { custId: custId },
     success: function (response) {
   console.log(response);
    if (response=="remove") {
       window.location.href="cart.php";
       
    }
       
     }
   });
 });

});
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
   function minordercheck() {
       var pin=document.getElementById('pincode').value;;
    $.ajax({
          url: 'minordercheck.php',
          type: 'post',
          data: { pin: pin },
          success: function (response) {
              
            if ( <?php echo $total;?> >= response) {
           
                $('#subcod').show();
                $('#errornew').hide();


            }
            else{
                $('#errornew').show();
                
                $('#subcod').hide();
                document.getElementById('errornew').innerHTML='The Minimum Order Value is €'+ response
            }
         
            
          
          }
        });
   }
   function pincheck(){
    var pin=document.getElementById('pincode').value;
    let total=<?php echo $total;?>;
    $.ajax({
       
          url: 'pincheck.php',
          type: 'post',
          data: { pin: pin },
          success: function (response) {
              
            if (response!='error') {
                $('#subcod').show();
                $('#pin_error').hide();
                document.querySelector('.deliveryprice').innerHTML='€'+response;
               
                total=parseInt(total)
                // response=;
if (response=parseInt(response)) {
    console.log('inside if  ')
 
    document.cookie="profile_viewer_uid="+response;
    document.querySelector('.itemprice').innerHTML='€'+( total + response);
    minordercheck();
   
}
else{
    document.querySelector('.itemprice').innerHTML='€'+total
    document.querySelector('.deliveryprice').innerHTML='€'+ '0';
}
                
            }
            else{
                $('#subcod').hide();
                $('#pin_error').show();
                document.querySelector('.itemprice').innerHTML='€'+total
                $('#pin_error').html('Sorry we are Not available in this area');
    document.querySelector('.deliveryprice').innerHTML='€'+ '0';

                // $('#sign-up-btn').hide();
            }
              console.log(response);
            
          
          }
        });
   }
   cartdata();


    </script>
       <script src="https://www.paypal.com/sdk/js?client-id=AcbGRO4W5ym1A02qVM0acr0xD7gf39GSzRp3gnkeGZzcE6R-YlVduc1mlqvFLe5I6ecddbR8Cwlp_uNj&currency=EUR"></script>

<script>
  paypal.Buttons({
    onClick(){
var name=$('#name').val();

var email=$('#email').val();
var address2=$('#message').val();

var zip=$('#pincode').val();
var phone=$('#phonenumber').val();
var notes=$('#Notes').val();

if (name=='') {
    $('#namebill').text("*this is required");
    return false;
}
else{
    $('#namebill').text("");
}
if (email=='') {
    $('#add-ress').text("*this is required");
    return false;
}
else{
    $('#add-ress').text("");
}
if (phone=='') {
    $('#add-phone').text("*this is required");
    return false;
}
else{
    $('#add-phone').text("");
}
if (zip=='') {
    $('#pin_error').text("*this is required");
    return false;
}
else{
    $('#add-zip').text("");
}
if (address2=='') {
    $('#add-add').text("*this is required");
    return false;
}
else{
    $('#add-add').text("");
}


var asd=12;
        },
    // Order is created on the server and the order id is returned echo $subtotal; ?>
    createOrder(data,action) {
      return action.order.create({
        purchase_units: [{
            amount: {
                currency_code: 'EUR',
            value: '<?php echo $itemtotal?>'
            }
           
        }]
      });
      
    },
    // Finalize the transaction on the server after payer approval
    onApprove(data,action) {
      return action.order.capture().then(function(orderData) {
        // Successful capture! For dev/demo purposes:
        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
        const transaction = orderData.purchase_units[0].payments.captures[0];
        // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
        // When ready to go live, remove the alert and show a success message within this page. For example:
        // const element = document.getElementById('paypal-button-container');
       
        var name=$('#name').val();
        var companyname=$('#companyname').val();
        var address1=$('#address1').val();
        var address2=$('#address2').val();
        var town=$('#town').val();
        var zip=$('#zip').val();
        var phone=$('#phone').val();
        var notes=$('#notes').val();
        var data={
            'name':name,
            'companyname':companyname,
            'address1':address1,
            'address2':address2,
            'town':town,
            'zip':zip,
            'phone':phone,
            'notes':notes,
            'status':transaction.status,
            'id':transaction.id,
            'subtotal':'10',
            'placeorder': true



        }
        $.ajax({
                                            url:'orderplace.php',
                                            type:'POST',
                                            data:data,  
                                            success:function(result){  
                                              
                                                console.log(result);
                                                if (result!='') {
                                                    window.location.href=result;
                                                    
                                                }
                                            }
                                        });

        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
        // Or go to another URL:  window.location.href = 'thank_you.html';
      });
    }
  }).render('#paypal-button-container');
</script>
</body>

</html>