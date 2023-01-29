<!DOCTYPE html>
<html>
<body>

<!-- Navigation bar -->
<div class="w3-top">
  <div id="myNavbar" class="w3-bar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right w3-text-dark-gray" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/jessicaguetre_website/index.php" class="w3-bar-item w3-button w3-text-dark-gray"><i class="fa fa-home"></i> HOME</a>
    <a href="/jessicaguetre_website/aboutme.php" class="w3-bar-item w3-button w3-hide-small w3-text-dark-gray"><i class="fa fa-th"></i> ABOUT ME</a>
    <a href="/jessicaguetre_website/academics.php" class="w3-bar-item w3-button w3-hide-small w3-text-dark-gray"><i class="fa fa-user"></i> ACADEMICS</a>
    <a href="/jessicaguetre_website/contact.php" class="w3-bar-item w3-button w3-hide-small w3-text-dark-gray"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="smallNavbar" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/jessicaguetre_website/aboutme.php" class="w3-bar-item w3-button w3-text-dark-gray" onclick="toggleFunction()">ABOUT ME</a>
    <a href="/jessicaguetre_website/academics.php" class="w3-bar-item w3-button w3-text-dark-gray" onclick="toggleFunction()">ACADEMICS</a>
    <a href="/jessicaguetre_website/contact.php" class="w3-bar-item w3-button w3-text-dark-gray" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>

<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
  var navbar = document.getElementById("myNavbar");
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
  } else {
      navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
  }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
  var x = document.getElementById("smallNavbar");
  if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
  } else {
      x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>