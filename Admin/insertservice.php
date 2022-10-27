<?php
define('TITLE', 'Add New Service');
define('PAGE', 'services');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
if(isset($_REQUEST['reqsubmit'])){
 // Checking for Empty Fields
 if(($_REQUEST['servtype'] == "") || ($_REQUEST['price'] == "") || ($_REQUEST['details'] == "")){
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
 } else {
   // Assigning User Values to Variable
   $stype = $_REQUEST['servtype'];
   $price = $_REQUEST['price'];
   $details = $_REQUEST['details'];
   $img=$_FILES['images']['name'];
   $sql = "INSERT INTO services_tb (servtype, price, details,image) VALUES ('$stype', '$price', '$details',$img)";
   move_uploaded_file($_FILES['images']['tmp_name'],"../images/services/".$_FILES['images']['name']);
   if($conn->query($sql) == TRUE){
    // below msg display on form submit success
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Added Successfully </div>';
   } else {
    // below msg display on form submit failed
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add </div>';
   }
 }
 }
?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Service</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="servtype">Service Type</label>
      <input type="text" class="form-control" id="servtype" name="servtype">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="form-group">
      <label for="details">details</label>
      <input type="text" class="form-control" id="details" name="details">
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="image" name="images">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="reqsubmit" name="reqsubmit">Submit</button>
      <a href="services.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>

<?php
include('includes/footer.php'); 
?>