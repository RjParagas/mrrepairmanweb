<?php
 include('../dbConnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body { 
  background-image: url('https://miro.medium.com/max/2952/1*fl4ouB85LznXpG20xd3pLQ.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover; 
}
.designer{
  background-color:white;
  color: black;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
  margin-top:20%;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.w3-quarter{
  background-color:white;
  color: black;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
  margin-left:5%;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
</style>
</head>
<body>
<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close</a>
  <a href="../Requester/RequesterProfile.php" onclick="w3_close()" class="w3-bar-item w3-button">MyDashboard</a>
  <a href="../Requester/servicecategory.php" onclick="w3_close()" class="w3-bar-item w3-button">Service Category</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16">Service Category</div>
  </div>
</div>


<div class="designer">
<h2 style="margin-left:45%;">Massage Service</h2>
<p>Massage therapy is the scientific manipulation of the soft tissues of the body, consisting primarily of manual (hands-on) techniques such as applying fixed or movable pressure, holding, and moving muscles and body tissues.</p>
</div> 

<div class="w3-quarter">
      <img src="../images/services/massage1.jpg" alt="Sandwich" style="width:100%">
      <h3>Name: Timmy Turner</h3>
      <p>About: Professional Massage Caretaker</p>
      <p>Contact: 0932434534</p>
      <p>Status: Available</p>
      <p>Service Fee: P1,500 <p>
      <p>Quotes: I will release your Pain even your bad mood</p>
    </div>

    <div class="w3-quarter">
      <img src="https://1.bp.blogspot.com/-morplK_rjg0/YEIqLUoXbKI/AAAAAAAAUCM/GjZl610WXYwbxZKN6GjKLjON0XflJukuQCPcBGAsYHg/s16000/252021195428.jpg" alt="Sandwich" style="width:100%">
      <h3>Name: Swaggy Sensei</h3>
      <p>About: Professional Healer User</p>
      <p>Contact: 09645231671</p>
      <p>Status: Available</p>
      <p>Service Fee: P1,000 <p>
      <p>Quotes: I Can release every pain of your body with using swaggy jutsu</p>
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
