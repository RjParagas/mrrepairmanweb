<?php
include('../dbConnection.php');
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close</a>
  <a href="./RequesterProfile.php" onclick="w3_close()" class="w3-bar-item w3-button">MyDashboard</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16">Service Category</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w2-main w3-content w3-padding" style="max-width:1300px;margin-top:100px">


  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="service">
    <div class="w3-quarter">
      <img src="https://www.thinkwood.com/wp-content/uploads/2021/03/Outdoor-Covered-Spaces-scaled-e1616072662643.jpg" alt="Sandwich" style="width:100%">
      <h3>Home Designer</h3>
      <a href="../services/homedesigner.php">View</a>
    </div>
    <div class="w3-quarter">
      <img src="https://5.imimg.com/data5/IV/BX/MY-55080567/body-massage-parlour-500x500.jpg" alt="Steak" style="width:110%">
      <h3>Massage Service</h3>
      <a href="../services/massage.php">View</a>
    </div>
    <div class="w3-quarter" style="padding-left:30px;">
      <img src="https://mrplumberindy.com/wp-content/uploads/2019/11/shutterstock_1419693749.jpg" alt="Cherries" style="width:110%">
      <h3>Plumber</h3>
      <a href="./services/plumber.php">View</a>
    </div>
    <div class="w3-quarter"style="padding-left:40px;">
      <img src="https://www.hindhead-dc.co.uk/wp-content/uploads/2020/06/Domicillary.jpg" alt="Pasta and Wine" style="width:115%">
      <h3>Home Service Dentist</h3>
      <a href="./services/dentis.php">View</a>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="https://thumbs.dreamstime.com/b/two-workers-handyman-uniform-installing-repairing-kitchen-extractor-replacing-filter-cooker-hood-construction-maintenance-191967374.jpg" alt="Popsicle" style="width:100%">
      <h3>Kitchen Repair</h3>
      <a href="./services/kitchen.php">View</a>
    </div>
    <div class="w3-quarter">
      <img src="https://bloximages.newyork1.vip.townnews.com/richmond.com/content/tncms/assets/v3/editorial/b/33/b33c6c00-fee9-5070-a5b2-6ac73923899f/5b3686ba3f9d6.image.jpg?resize=1200%2C800" alt="Salmon" style="width:100%">
      <h3>Tv Repair</h3>
      <a href="./services/tvrepair.php">View</a>
    </div>
    <div class="w3-quarter">
      <img src="https://www.nerdwallet.com/assets/blog/wp-content/uploads/2018/07/GettyImages-929976910-770x462.jpg" alt="Sandwich" style="width:110%">
      <h3>Laundry</h3>
      <a href="./services/laundry.php">View</a>
    </div>
    <div class="w3-quarter" style="padding-left:40px;">
      <img src="https://momcenter.com.ph/wp-content/uploads/sites/4/2014/12/Home-Tutoring-6-Tips-from-Real-Parents-res.jpg" alt="Croissant" style="width:125%">
      <h3>Home Tutor</h3>
      <a href="./services/tutor.php">View</a>
    </div>
  </div>

<!-- Third Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="https://bleuwire.com/wp-content/uploads/2019/03/computer-repair-services.jpg" alt="Popsicle" style="width:100%">
      <h3>PC Repair</h3>
      <a href="./services/computer.php">View</a>
    </div>
    <div class="w3-quarter">
      <img src="https://thumbs.dreamstime.com/b/close-up-male-hands-repair-smartphone-white-table-close-up-cellphone-repair-108412634.jpg" alt="Salmon" style="width:100%">
      <h3>Cellphone Repair</h3>
      <a href="./services/cellphone.php">View</a>
    </div>
    <div class="w3-quarter">
      <img src="https://www.roofworksinc.com/wp-content/uploads/2017/02/professional-home-repair-importance.jpg" alt="Sandwich" style="width:100%">
      <h3>Home Repair</h3>
      <a href="./services/house.php">View</a>
    </div>
    <div class="w3-quarter" style="padding-left:40px;">
      <img src="https://theautowarehouse.com/wp-content/uploads/2019/04/the-auto-warehouse-car-cleaning-tips-to-make-your-car-cleaner-in-a-snap.jpg" alt="Croissant" style="width:115%">
      <h3>Car Cleaner</h3>
      <a href="./services/carc.php">View</a>
    </div>
  </div>

  
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
