<!DOCTYPE html>
<html>
<head>
<title>Jessica Guetre</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require_once('navbar.php'); ?>

<!-- Front page parallax -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity" style="border-radius: 16px">JESSICA GUETRE</span>
  </div>
</div>

<!-- Homepage container -->
<div class="w3-content w3-padding-64" id="homepage">
  <h3 class="w3-center">ENGINEERING PHYSICS STUDENT</h3>
  <p class="w3-center"><em>Queen's University Class of 2024</em></p>
  <div class="w3-padding-16">
    <img src="images/me.jpg" class="translucent-image" alt="Jessica Guetre" style="width: 200px; height: 100%; float: right; margin: 0 0 0 16px">
    <p><?php include('homepage.txt'); ?></p>
  </div>
</div>

<!-- Thumbnails -->
<div class="w3-content w3-row" style="padding-bottom: 64px" id="thumbnails">
  <a href="academics.php">
    <div class="w3-col m6 container" style="padding-right: 16px">
      <img src="images/kingston.jpg" alt="Kingston, ON" class="clear-image" style="width:100%">
      <div class="middle-transparent">
        <div class="text">Academics</div>
      </div>
    </div>
  </a>
  <a href="aboutme.php">
    <div class="w3-col m6 container" style="padding-left: 16px">
      <img src="images/westVancouver.jpg" alt="West Vancouver, BC" class="clear-image" style="width:100%">
      <div class="middle-transparent">
        <div class="text">About Me</div>
      </div>
    </div>
  </a>  
</div>

<!-- Resume button -->
<div class="w3-row w3-center w3-dark-grey w3-padding-64">
  <a href="jessicaguetre_resume.pdf">
    <button class="resume-button"><i class="fa fa-file-text-o"></i>  RESUME</button>
  </a>
</div>

<!-- Bottom parallax -->
<div class="bgimg-2 w3-display-container w3-opacity-min"></div>

<?php require_once('footer.php'); ?>
 
</body>
</html>
