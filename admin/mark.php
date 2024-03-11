<?php 
include('connection.php');
$oid= $_GET['oid'];
$qu=mysqli_query($con,"UPDATE bgorder set transactionstatus='COMPLETED'  WHERE sno='$oid'");

?>
<script>

    window.location.href=' components-updateorder.php?pid=<?php echo $oid ?>';
</script>
