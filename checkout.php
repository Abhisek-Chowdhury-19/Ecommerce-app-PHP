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
    <title>Green Indien Restaurant - Checkout</title>
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
                <h1 class="display-5 mb-3"> Checkout</h1>
                <p>Checkout</p>
            </div>
            <?php
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
                <td><?php echo $pdata['item_name']; ?>
            <br>
            €<?php echo $pdata['Price']; ?>(<?php echo $cartdata['spice_level'];?>)
            </td>
                <td>  
                     <div class="quantity-container">
        <div class="quantity-btn btn-delete"  data-cartid="<?php echo $cartdata['sno'];?>">-</div>
     
        <input type="number" id="quantity" class="quantity-input" value="<?php echo $cartdata['quantity']; ?>" min="1" disabled>
        <div class="quantity-btn add-btn" data-cartid="<?php echo $cartdata['sno'];?>">+</div>
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
    €  <?php
    $sql = "SELECT * FROM pincode WHERE pincode = '".$_POST["pincode"]."'";  
    $result = mysqli_fetch_array(mysqli_query($con, $sql)); 
    if ($result==0) {
        ?>
<script>
    window.location.href='cart.php'
</script>

        <?php
    }
    $deliveryfees=$result['deliveryfee'];
    echo $result['deliveryfee'];
    ?>
</span></h5>
<h5 class="text-white p-3">Total <span class="itemprice" style='float:right'>
€ <?php echo $total; ?>
</span></h5>


                      
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <form method='post' onsubmit="$(this).find('input').prop('disabled', false); $(this).find('textarea').prop('disabled', false);$(this).find('select').prop('disabled', false)">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="<?php echo $_POST['name']; ?>" id="name" name="name" placeholder="Your Name" required disabled>
                                    <label for="name">Your Name</label>
                                    <div id="namebill" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" value="<?php echo $_POST['email']; ?>" id="email" placeholder="Your Email" required disabled>
                                    <label for="email">Your Email</label>
                                    <div id="add-ress" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" value="<?php echo $_POST['phonenumber']; ?>" class="form-control"  name="phonenumber" id="phonenumber" placeholder="phonenumber" required disabled>
                                    <label for="phonenumber">Phone Number</label>
                                    <div id="add-phone" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" name="pincode" id="pincode" placeholder="pincode" value="<?php echo $_POST['pincode']; ?>"  required disabled>
                                    <label for="pincode">Postleitzahl *</label>
                                    <span id="pin_error" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="Street" id="Street" placeholder="Street" value="<?php echo $_POST['Street']; ?>"  required disabled>
                                    <label for="Street">Straße</label>
                                   
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="No" id="No" placeholder="No" value="<?php echo $_POST['No']; ?>"  required disabled>
                                    <label for="No ">Nr *</label>
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="floor" id="floor" placeholder="floor" value="<?php echo $_POST['floor']; ?>"  required disabled>
                                    <label for="floor">Stock</label>
                                    <span id="pin_error" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text"  class="form-control" name="Stairs" id="Stairs" placeholder="Stairs" value="<?php echo $_POST['Stairs']; ?>"  required disabled>
                                    <label for="Stairs">Stiege</label>
                                    
                                </div>
                            </div>
                          
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" value="" class="form-control" name="Top" id="Top" placeholder="Top" value="<?php echo $_POST['Top']; ?>"  required disabled>
                                    <label for="Top">Top</label>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text"  class="form-control" name="Location" id="Location" placeholder="Location" value="<?php echo $_POST['Location']; ?>"  required disabled>
                                    <label for="Location">Ort / Stadt *</label>
                                    
                                </div>
                            </div>
                          
                            

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Notes" name="Notes" id="Notes"  style="height: 100px" disabled><?php echo $_POST['Notes']; ?></textarea>
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
                                <button class="btn btn-primary rounded-pill py-3 px-5 mb-3" type="submit" name="CODORDER">Cash on Delivery</button>
                              
                                <div id="paypal-button-container"></div>
                            </div>
                            <div id="errornew" style="color: red;">

                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </form>

                    <?php
                              if(isset($_POST['CODORDER'])){
                                ?>
                          
                                <?php
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $address1=$_POST['message'];
                                $zip=$_POST['pincode'];
                                $Street=$_POST['Street'];
                                $floor=$_POST['floor'];
                                $Location=$_POST['Location'];
                                $Top=$_POST['Top'];
                                $No=$_POST['No'];
                                $Stairs=$_POST['Stairs'];


                                $zip=$_POST['pincode'];

                                $phone=$_POST['phonenumber'];
                                $date=date("jS \of F Y");
                                $notes=$_POST['Notes'];
                                if ($_POST['spicebg']=='') {
                                    $spice='NA';
                                }
                                else{
                                    $spice=$_POST['spicebg'];
                                }
                                $delivery=mysqli_fetch_array(mysqli_query($con,"select * from pincode where pincode = '$zip'"));
                                $deliverycharhge=$delivery['deliveryfee'];
                                $query2 = "select * from bgorder order by sno desc limit 1";
                                $result2 = mysqli_query($con,$query2);
                                $row = mysqli_fetch_array($result2);
                                $last_id = $row['orderid'];
                                
                                
                                
                                if ($last_id == "")
                                {
                                    $POID = "OD/BGR/1";

                                }
                                else
                                {
                                    $POID = substr($last_id, 7);
                                    $POID = intval($POID);
                                    $POID = "OD/BGR/" . ($POID + 1);
                                }
                                
                                $html='<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
                                <div style="margin:0px;width:70%;padding:20px 0">
                             
                                  <div style="border-bottom:1px solid #eee">
                                    <a href="" style="font-size:1.4em;color: #1cc0a0;text-decoration:none;font-weight:600">Bio Green Indien Restaurant</a>
                                  </div>
                                  <p style="font-size:1.1em">Hi,</p>
                                  <p>We are thrilled to confirm that your order has been successfully processed!, we would like to express our heartfelt gratitude for choosing us for your recent purchase..</p>
                                    
                                  
                                Order Number: '.$POID.'<br>
                                Order Date: '.$date.'<br>
                                Shipping Address: '.$address1.', <br>'.$zip.'<br>
                                Payment Method: Cash<br>
                                Order Details: <br>
                                <table style="border-collapse: collapse; width: 100%; border: 1px solid #ddd;">
                                <thead>
                                  <tr style="background-color: #f2f2f2;">
                                    <th style="border: 1px solid #ddd; padding: 8px;">Sno</th>
                                    <th style="border: 1px solid #ddd; padding: 8px;">Order Name</th>
                                    <th style="border: 1px solid #ddd; padding: 8px;">Quantity</th>
                                    <th style="border: 1px solid #ddd; padding: 8px;">Price</th>

                                  </tr>
                                </thead>
                          
                          
                                <tbody>';   
                                    $id=$userdata['id'];
                                    $placeorder="INSERT into bgorder (orderid,date,Payment_mode,paye_name,transationid,transactionstatus,name,address,zipcode,phone,email,c_id,order_notes,spicelevel,amount,delivery_charge,status) Values ('$POID','$date','COD','$name','CASH','NA','$name',' ','$zip','$phone','$email','$id','$notes','$spice','$total','$deliverycharhge','Under process')";
                                    $insertorder=mysqli_query($con,$placeorder);
                                    $add=mysqli_query($con,"INSERT INTO `address` ( `orderid`, `Street`, `No`, `Stairs`, `floor`, `Top`, `Location`) VALUES ( '$POID', '$Street', '$No', '$Stairs', '$floor', '$Top', '$Location')");
                                    $cartitem=mysqli_query($con,"SELECT * from cart WHERE c_id='$id'");
                                                $i=1;
                                               while ($result=mysqli_fetch_array($cartitem)) {
                                                        $pid=$result['p_id'];
                                                        $qua=$result['quantity'];
                                                        $spicelevel=$result['spice_level'];
                                                        $productname=mysqli_fetch_array(mysqli_query($con,"SELECT * from menu WHERE item_id='$pid'"));
                                                        $html .='<tr>
                                                        <td style="border: 1px solid #ddd; padding: 8px;">'.$i.'</td>
                                                        <td style="border: 1px solid #ddd; padding: 8px; ">'.$productname['item_name'].'('.$spicelevel.')</td>
                                                        <td style="border: 1px solid #ddd; padding: 8px; ">'.$qua.'</td>

                                                        <td style="border: 1px solid #ddd; padding: 8px; font-weight: bold;">€'.$productname['Price']*$qua.'</td>
                                                      </tr>';
                                                      $i=$i+1;
                                                      $pname=$productname['item_name'];
                                                      $pprice=$productname['Price'];
                                                        $additem=mysqli_query($con,"INSERT into orderitem (oid,name,price,spice_level,quantity) values ('$POID','$pname','$pprice','$spicelevel','$qua')");
                                                        $deletecart=mysqli_query($con,"DELETE from cart WHERE c_id='$id' AND p_id='$pid'");
                                               }
                                               $html .=' <tr>
                                               <td style=" padding: 0px;"></td>
                                               
                                               <td style=" padding: 8px;"></td>
                                              

                                               <td style="border: 1px solid #ddd; padding: 8px; font-weight: bold;">Delivery Charge: </td>
                                               <td style="border: 1px solid #ddd; padding: 8px; font-weight: bold;">€'.$deliverycharhge.'</td>
                                               <td style=" padding: 8px;"></td>
                                             </tr>
                                             <tr>
                                               <td style=" padding: 0px;"></td>
                                               
                                               <td style=" padding: 8px;"></td>
                                              

                                               <td style="border: 1px solid #ddd; padding: 8px; font-weight: bold;">Total: </td>
                                               <td style="border: 1px solid #ddd; padding: 8px; font-weight: bold;">€'.$deliverycharhge+$total.'</td>
                                               </tr>
                                              </tbody>
                                               </table>
                                               <p style="font-size:0.9em;">   Your trust in our products/services means a lot to us, and we are committed to delivering the best quality and customer experience. Our team is working diligently to prepare your order for shipment, and you can expect it to be dispatched soon.</p>
  <p style="font-size:0.9em;">Regards,<br /> Bio Green Indien Restaurant</p>
  <hr style="border:none;border-top:1px solid #eee" />
  <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
    <p> Bio Green Indien Restaurant</p>
    <p>Geiselbergstraße 14, 1110 Wien, Austria</p>
    <p></p>
  </div>
</div>
</div>';
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

$mail->addAddress($userdata['Email']);
$mail->isHTML (true);
$mail->Subject = "Order Confirmed";
$mail->Body = $html;
$mail->send();

                                              
                                               ?>
                                                <script>
                                                    window.location.href="orderdetails.php?orderid=<?php echo $POID; ?>";
                                                </script>
                                               <?php
                                }
                        ?>
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
       <script src="https://www.paypal.com/sdk/js?client-id=[YOUR_CLIENT_ID]-YlVduc1mlqvFLe5I6ecddbR8Cwlp_uNj&currency=EUR"></script>

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
            value: '<?php echo $total + $deliveryfees ?>'
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

var email=$('#email').val();
var address2=$('#message').val();
var Street=$('#Street').val();
var floor=$('#floor').val();
var Location=$('#Location').val();
var Top=$('#Top').val();
var No=$('#No').val();
var Stairs=$('#Stairs').val();

var zip=$('#pincode').val();
var phone=$('#phonenumber').val();
var notes=$('#Notes').val();
        var data={
            'name':name,
            'address2':address2,
            'zip':zip,
            'email':email,
            'phone':phone,
            'notes':notes,
            'status':transaction.status,
            'id':transaction.id,
            'subtotal':'<?php echo $total ?>',
            'Street':Street,
            "floor":floor,
            "Location":Location,
            'Top':Top,
            "No":No,
            "Stairs":Stairs,
            'placeorder': true



        }
      
        $.ajax({
                                            url:'orderplace.php',
                                            type:'POST',
                                            data:data,  
                                            success:function(result){  
                                              alert(result)
                                                
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