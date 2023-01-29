<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require_once('navbar.php'); ?>

<!-- Parallax -->
<div class="bgimg-5 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity" style="border-radius: 15px">CONTACT</span>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-content w3-padding-64 w-row-padding-128 container" id="contact">
  <!-- Message Form -->
  <form name="contact-form" method="POST" action="process.php">
    <h5 class="w3-row-padding-64 w3-center">Send me a message</h5>
      <!-- First Name -->
      <div class="w3-col l6 m6 s12 w3-padding-large">
        <div>
          <?php 
            if ( isset( $_POST['first-name'] ) && empty( trim( $_POST['first-name'] ) ) ) {
            echo "<p class=\"alert\">First name is required</p>"; 
            $form_complete = false;
            }
          ?>
          <input class="w3-input w3-border" type="text" name="first-name" required name="First Name">
          First Name
        </div>
      </div>
      <!-- Last Name -->
      <div class="w3-col l6 m6 s12 w3-padding-large">
        <?php 
          if ( isset( $_POST['last-name'] ) && empty( trim( $_POST['last-name'] ) ) ) {
          echo "<p class=\"alert\">Last name is required</p>"; 
          $form_complete = false;
          }
        ?>
        <input class="w3-input w3-border" type="text" name="last-name" required name="Last Name">
        Last Name
      </div>
    <!-- Email -->
    <div class="w3-row w3-padding-large">
      <?php 
        if ( isset( $_POST['email'] ) && empty( trim( $_POST['email'] ) ) ) {
        echo "<p class=\"alert\">Email is required</p>"; 
        $form_complete = false;
        }
      ?>
      <input class="w3-input w3-border" type="text" name="email" required name="Email">
      Email
    </div>
    <!-- Message -->
    <div class="w3-row w3-padding-large">
      <input class="w3-input w3-border" type="text" name="message" required name="Message">
        Message
    </div>
    <!-- Submit Button -->
    <div class="w3-row w3-padding-large w3-center">
      <button class="submit-button" type="submit">
        <i class="fa fa-paper-plane"></i>  SUBMIT
      </button>
    </div>
  </form>
  </div>
  <!-- Contact Info -->
  <div class="w3-col l4 m12 w3-center w3-padding-16 container">
    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge"></i> Vancouver, BC<br>
    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge"></i> jessguetre@mail.com<br>
  </div>
</div>

  <?php require_once('footer.php'); ?>

</body>

<style>
  .alert {
    color: red;
    font-weight: bold;
  }
</style>

<?php
$form_complete =  (! is_null($form_complete) ) ? $form_complete : true;
if ( $form_complete ) {
  foreach( $_POST as $name => $value ) {
    if ( 'submit' != $name ) {
      if ( is_array( $value ) ) {
        $value = implode( ', ', $value );
      }
      echo "<p><b>" . ucfirst( $name ) ."</b> is $value.</p>";
    }
  }
}