<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('includes/head.php') ?>
    <link rel="stylesheet" href="css/index.css">
    <title>Brismed</title>
</head>

<body>
    <?php include('includes/navbar.php') ?>
    <main>
        <div id="images/parallax.gif" style="position: relative;">
            <div class="parallax__center">
                <!-- <img class="logo_bhilai" src="Webp.net-resizeimage.png" alt=""> -->
                <div class="white-text caption" style="margin: 0px auto">
                    <span class="flow-text" style="margin: 0px auto 3px auto;">Get medication delivered to wherever you are on the go!</span>
                    <h1 style="margin: 0px auto 3px auto; font-size: 3.3em; font-weight: bold;font-family: 'Damion', cursive;">Brismed</h1>
                </div>
            </div>
            <div style="position:absolute; bottom: 120px; width: 100%; text-align: center;">
                <!-- <a class="btn-large btn waves-effect" href="index.php" style="margin: 7.5px;"><i class="left material-icons">move_to_inbox</i>Make Complaint</a>; -->
                <a class="btn-large btn waves-effect" style="margin: 7.5px;" id="signinbutton2" href="login.php"><i class="fa fa-sign-in left" aria-hidden="true"></i>Sign in</a>
                <!-- <div style="width:100%;">
                    <p class="flow-text white-text signin" style="text-align:center !important;margin: 0px auto 3px auto; font-size:1.1rem;font-family: 'Caveat', cursive;">Sign in to make your complaint</p>
                </div> -->
            </div>
        </div>

        <div class="container">
            <!-- About Us stuff here -->
        </div>
    </main>

    <!-- TODO: add hero image credit
    Photographer:Alexey Sokolov https://photos.icons8.com/photographers/alexey-sokolov
    -->

    <?php include_once('includes/scripts.php') ?>
</body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<h2>Join Brismed Today</h2>
<p>get started Now</p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/signup.png" style="width:40%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/order.png" style="width:40%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/choose.png" style="width:40%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>

</html>
