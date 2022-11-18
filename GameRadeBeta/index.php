<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "style.css">
	<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Josefin Slab">
	<script type = "text/javascript" src = "darkModeToggle.js"></script>
	<title>GameRade - Home</title>
</head>
<body class = "bgGradient">
<header>
	<div class = "container">
	<nav>
    	<h1 class = "logo">
    		<a href = "index.php"><img src= "images/gamerade-high-resolution-logo-black-on-transparent-background.png" height = 50px/></a> 
    	</h1>
    	<ul class = "navList">
    		<li><a href = "index.php">HOME</a></li>
    		<li><a href = "post.php">POST</a></li>
    		<li><a href = "history.php">HISTORY</a></li>
    		<li><a href = "gameGuru.php">GAME GURU</a></li>
    		<li><a href = "empore.php">EMPORE</a></li>
    		<li><a href = "studio.php">STUDIO</a></li>
    		<li><a href = "fixtures.php">FIXTURES</a></li>
    		&emsp;&emsp;
    		<li><input type = "button" class = "darkModeButton" id = "toggleButton" value = "Dark mode"></li>
    	</ul>
	</nav>
	</div>
</header>

<div class="slideshow-container">

<div class="mySlides fade">
  <img id = "ssimg" src="images/index/one.jpg" style="width:100%">
  <div class="text">Alone? Don't have anyone to play with?</div>
</div>

<div class="mySlides fade">
  <img id = "ssimg" src="images/index/two.jpg" style="width:100%">
  <div class="text">Want to find a partner? Find one through GameRade</div>
</div>

<div class="mySlides fade">
  <img id = "ssimg" src="images/index/three.jpg" style="width:100%">
  <div class="text">Where old folks can find a young partner!!</div>
</div>

<div class="mySlides fade">
  <img id = "ssimg" src="images/index/four.jpg" style="width:100%">
  <div class="text">And children can find a their game partners and play under Adult supervision.</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  slides[slideIndex-1].style.display = "block";
}
</script>

<?php
include("inc_indexPostsDisplay.php");
?>
<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>