<?php session_start(); 

include("connection.php");
include("function.php");
$userdata= check_login($con);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/nav.css">
	<title>Web-dev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       
		<link rel="stylesheet" href="css/style.css">
  <style>
    .button{
      padding: 30px;
    }
  </style>
  </head>
<body>
	
<div class="wrapper d-flex align-items-stretch">
<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(profile/<?php echo $userdata['img'];?>);"></div>
	  			
            <h3><?php echo $userdata['Fullname'];echo "<br>"; echo $userdata['username']; ?> </h3>


	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
              <a href="download.php"><span class="fa fa-download mr-3"></span> Download</a>
          </li>
          <li>
            <a href="search.php"><span class="fa fa-search mr-3"></span> All Orders</a>
          </li>
          <?php
				if ($userdata['level']== 'Admin') {
				
				?>
		 
          <li>
            <a href="signup.php"><span class="fa fa-plus mr-3"></span> Add Account</a>
          </li>
		  <?php
		  }
		  ?>
          <li>
            <a href="add.php"><span class="fa fa-database mr-3"></span> Place Order</a>
          </li>
          <li>
            <a href="listde.php"><span class="fa fa-list mr-3"></span> Add data in list</a>
          </li>
          <li>
            <a href="logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>
      <div class="container">
        <div class="">
            <div class="">

               

                <div class="">
                    <div class="card-header">
                        <h4>Update Status
                            
                        </h4>
                    </div>
                 <?php
                if ($_SERVER['REQUEST_METHOD']=='GET') {
                    if (!isset($_GET['id'])) {
                        header("Location: index.php");
                    }
                    $INID=$_GET['id'];
                    $sql="SELECT * FROM invoices WHERE InvoiceID='".$INID."'";
                    $run=mysqli_query($con,$sql);
                    $row1 = mysqli_fetch_array($run);

                    $sql2="SELECT * FROM po WHERE POID='".$row1['POID']."'";
                    $run2=mysqli_query($con,$sql2);
                    $row2 = mysqli_fetch_array($run2);

                    $sql3="SELECT * FROM orders WHERE OID='".$row2['OID']."'";
                    $run3=mysqli_query($con,$sql3);
                    $row3 = mysqli_fetch_array($run3);
                }

                
                 ?>
                <h4>Order details</h4>
                <form method="POST" action="command/status.php?id=<?php echo $_GET['id'];?>">
                <div class="form-row">
                <div class="col-xs-1">
                    <label for="">OID</label>
      <input type="text" class="form-control" value="<?php echo $row3['OID']?>" disabled>
    </div>
    <div class="col">
        <label for="">Pattern</label>
      <input type="text" class="form-control" value="<?php echo $row3['PATTERN']?>" disabled>
    </div>
    <div class="col">
        <label for="">Fabric</label>
      <input type="text" class="form-control" value="<?php echo $row3['FABRIC']?>" disabled>
    </div>
    <div class="col">
        <label for="">Colour</label>
      <input type="text" class="form-control" value="<?php echo $row3['COLOUR']?>" disabled>
    </div>
    <div class="col">
        <label for="">Shortname</label>
      <input type="text" class="form-control" value="<?php echo $row3['SHORTNAME']?>" disabled>
    </div>
    
  </div> 
  <div class="form-row">
  <div class="col-xs-4">
        <label for="">Quantity</label>
      <input type="text" class="form-control" value="<?php echo $row3['QUANTITY']?>" disabled>
    </div>
                <div class="col-md-3">
                    <label for="">Unit</label>
      <input type="text" class="form-control" value="<?php echo $row3['UNIT']?>" disabled>
    </div>
  </div>
        <h4>PO</h4>  
        
        
        <div class="form-row">
                <div class="col-xs-1">
                    <label for="">POID</label>
      <input type="text" class="form-control" value="<?php echo $row2['POID']?>" disabled>
    </div>
    <div class="col">
        <label for="">Supplier name</label>
      <input type="text" class="form-control" value="<?php echo $row2['SUPPLIERNAME']?>" disabled>
    </div>
    <div class="col">
        <label for="">Quantity</label>
      <input type="text" class="form-control" value="<?php echo $row2['QUNTITY']?>" disabled>
    </div>
    <div class="col">
                    <label for="">Unit</label>
      <input type="text" class="form-control" value="<?php echo $row2['UNIT']?>" disabled>
    </div>
    <div class="col">
        <label for="">GSM</label>
      <input type="text" class="form-control" value="<?php echo $row2['GSM']?>" disabled>
    </div>
  
  
   
  </div> 
  <div class="form-row">
  <div class="col-xs-4">
        <label for="">WIDTH</label>
      <input type="text" class="form-control" value="<?php echo $row2['WIDTH']?>" disabled>
    </div>
  <div class="col-xs-4">
        <label for="">EDFD</label>
      <input type="text" class="form-control" value="<?php echo $row2['EDFD']?>" disabled>
    </div>
    <div class="col-xs-4">
        <label for="">EDLD</label>
      <input type="text" class="form-control" value="<?php echo $row2['EDLD']?>" disabled>
    </div>   
     
  </div>


  <h4>Invoice</h4>


  <div class="form-row">
                <div class="col-xs-1">
                    <label for="">INVOICE ID</label>
      <input type="text" class="form-control" name="INID" value="<?php
      $INID=$row1['InvoiceID'];
      
      echo $INID;?>" disabled>
    </div>
    <div class="col">
        <label for="">Invoice Number</label>
      <input type="text" class="form-control" value="<?php echo $row1['Invoicenumber']?>" disabled>
    </div>
    <div class="col">
        <label for="">Quantity</label>
      <input type="text" class="form-control" value="<?php echo $row1['Quantity']?>" disabled>
    </div>
    <div class="col">
        <label for="">Unit</label>
         <input type="text" class="form-control" value="<?php echo $row1['Unit']?>" disabled>
    </div>
    <div class="col">
        <label for="">Status</label>
         <input type="text" class="form-control" value="<?php echo $row1['Status']?>" disabled>
    </div>
  </div>  

  <div class="form-row">
  <div class="col-xs-1">
  <label for="">Status</label>
                                            <select name="status" class="form-select" required>
                                            <option value="">Select Status</option>
                                                <?php
                                                    if ($row1['Status']=='Open') {
                                                     
                                                ?>

                                                <option value="Dispatch">Dispatch</option>

                                                <?php


}
?>

                                                  <?php
                                                    if ($row1['Status']=='Dispatch') {
                                                     
                                                    ?>

                                                    <option value="In Transit">In Transit</option>

                                                    <?php


                                                              }
                                                        ?>
                                                        <?php
                                                    if ($row1['Status']=='In Transit') {
                                                     
                                                    ?>

                                                      <option value="With Transport">With Transport</option>

                                                    <?php


                                                              }
                                                        ?>
                                                  <?php
                                                    if ($row1['Status']=='With Transport') {
                                                     
                                                    ?>

<option value="Received">Received</option>

                                                    <?php


                                                              }
                                                        ?>

<?php
                                                    if ($row1['Status']=='Received') {
                                                     
                                                    ?>

<option value="Closed">Closed</option>

                                                    <?php


                                                              }
                                                        ?>
                                                
                                                <option value="Closed">Closed</option>
                                            </select>
    </div>

    <button type="submit" name="update_status" class="btn btn-primary" style="height:45px; width: 150px; margin-top: 30px;">Update Status</button>
  </div>
                
 

                                    
                </form>
</div>
    </div>
</div>
      </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    
  <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>