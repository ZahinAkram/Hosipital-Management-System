<?php
	include("navbar.php");
	include("background.php");
?>

<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	* {box-sizing: border-box;}
	body {font-family: Verdana, sans-serif;}
	.mySlides {display: none;}
	img {vertical-align: top;}

	/* Slideshow container */
	.slideshow-container {
		margin-top: -20px;
	  display: grid;
	   height: 100%;
	}
	/*image class*/
	.img {
	    width: 100%;
	    height: 630px;
	}

	/* Caption text */
	.text {
	  color: /*#f2f2f2*/black;
	  font-size: 50px;
	  font-weight: bold;
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
	  transition: background-color 0.0s ease;
	}

	.active {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 2.5s;
	  animation-name: fade;
	  animation-duration:2.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: 1} 
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
		
		<div class="slideshow-container">

		<div class="mySlides fade">
		  <img class="img" src="Home_Page_1.jpg">
		  <div class="text">Welcome</div>
		</div>

		<div class="mySlides fade">
		  <img class="img" src="Home_Page_2.jpg">
		  <div class="text">Save Data</div>
		</div>

		<div class="mySlides fade">
		  <img class="img" src="Home_Page_3.jpg">
		  <div class="text">Save Lives</div>
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
