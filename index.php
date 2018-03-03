<?php
if (!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['phone'])&&!empty($_POST['eduname'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $eduname = $_POST['eduname'];
  $std = $_POST['std'];
  $un = "2583419_db"; $pd="Abc123h4"; $servername = "fdb18.awardspace.net"; $dbname = "2583419_db";
  $conn = mysqli_connect($servername, $un, $pd, $dbname);
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "INSERT INTO regdata (regname,email,phone,istname,class) VALUES ('".$name."','".$email."','".$phone."','".$eduname."','".$std."')";
  if(mysqli_query($conn, $sql)) { header("Location: success.html"); }
  else { header("Location: error.html"); }
  mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
  <title>"C" The Change</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
  .jumbotron {
      /*background-color: #f4511e;*/
      background-image: url("img.png");
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #404040;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #404040 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="cthechange.cf">"C" The Change</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#agenda">AGENDA</a></li>
        <li><a href="#rewards">REWARDS</a></li>
        <li><a href="#venue">VENUE & TIME</a></li>
        <li><a href="#register">REGISTER</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1><strong>"C" The Change</strong></h1>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <h2>Why the Event</h2>
      <h4>C is the most fundamental language in the field of computers and learning it is very essential for a Computer Science engineer. By attending this event We assure you that you will get a head start not just from  your examination point of view but in the field of programming language as C holds all the fundamental of all programming language.</h4><br>
      <br> <a href="#agenda"> <button class="btn btn-default btn-lg">Learn More</button></a>
      <a href="#register"><button class="btn btn-default btn-lg">Register</button></a>
    </div>
  </div>
</div>


<!-- Container (Services Section) -->
<div id="agenda" class="container-fluid text-center bg-grey">
  <h2 class="text-center">AGENDA</h2>
  <div style="font-size: 20px;">
    <p>Introduction to C</p>
    <p>Control and Looping Structures</p>
    <p>Arrays and Strings</p>
    <p>Pointers</p>
    <p>Functions</p>
    <p>Structures</p>
    <p>File Handling</p>
    <p>Dynamic Memory Allocation Routines</p>
    <p>Introduction to Data Structures</p>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="rewards" class="container-fluid text-center">
  <h2 class="text-center">What Do You Get?</h2>
  <div style="font-size: 20px;">
    <p>Certificate</p>
    <p>Gift Coupons</p>
    <p>Gifts</p>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="venue" class="container-fluid bg-grey">
  <div class="text-center">
    <h2>Venue and Timing</h2>
    <p style="font-size: 20px;"><strong>IIT-Madras Research Park</strong> </p>
    <p style="font-size: 20px;"><strong>11 Feb, 2018</strong></p>
    <p style="font-size: 20px;"><strong>9 am - 4 pm</strong> </p>
  </div>

</div>

<!-- Container (Contact Section) -->
<div id="register" class="container-fluid " style="background-image: url('img.png');">
  <h2 class="text-center" style="color: #ffffff">Register</h2>
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 slideanim">
      <form class="" action="" method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="tel" name="phone" placeholder="Phone Number" type="tel" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="eduname" name="eduname" placeholder="Educational Institute Name" type="text" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="std" placeholder="Class/Year" type="text" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm- form-group">
          <input class="btn btn-default pull-right" type="submit" value="Register">
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>UNIQUE SERVICES<br>For more information contact : +91-9092215570 </p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
