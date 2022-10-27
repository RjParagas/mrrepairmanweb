<?php    
define('TITLE', 'Update Services');
define('PAGE', 'services');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['servpdate'])){
  // Checking for Empty Fields
  if(($_REQUEST['service_id'] == "") || ($_REQUEST['servtype'] == "") || ($_REQUEST['price'] == "")|| ($_REQUEST['details'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $sid = $_REQUEST['service_id'];
    $stype = $_REQUEST['servtype'];
    $price = $_REQUEST['price'];
    $details = $_REQUEST['details'];

  $sql = "UPDATE services_tb SET service_id = '$sid', servtype = '$stype',price = '$price', details = '$details' WHERE service_id = '$sid'";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
  }
  }
 ?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Update Service Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM services_tb WHERE service_id = {$_REQUEST['service_id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="service_id">Service ID</label>
      <input type="text" class="form-control" id="r_login_id" name="service_id" value="<?php if(isset($row['service_id'])) {echo $row['service_id']; }?>">
    </div>
    <div class="form-group">
      <label for="servtype">Service type</label>
      <input type="text" class="form-control" id="servtype" name="servtype" value="<?php if(isset($row['servtype'])) {echo $row['servtype']; }?>">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" name="price" value="<?php if(isset($row['price'])) {echo $row['price']; }?>">
    </div>
    <div class="form-group">
      <label for="details">Details</label>
      <input type="text" class="form-control" id="price" name="details" value="<?php if(isset($row['details'])) {echo $row['details']; }?>">
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="servpdate" name="servpdate">Update</button>
      <a href="services.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>

<?php
include('includes/footer.php'); 
?>