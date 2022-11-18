<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "style.css">
	<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Josefin Slab">
	<script type = "text/javascript" src = "darkModeToggle.js"></script>
	<script type = "text/javascript" src = "empore.js"></script>
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
<br>
<div style = "width:100%;">
<div style = "width: 50%; float: left;" class = "emp-layout" class = "body-font" id = "Desc">
<div>
<div class = "image-desc">
<img class = "emporeImages" src = "images/empore/tennisracket.jpg" style = "margin-left: 10px">
</div> 
<div class = "image-desc" style = "margin-left: 10px">
<h2>Product : YONEX EZONE 98 Tennis Racket</h2>
<h1>$259.00</h1>
FREE delivery Sat, Nov 19<br>
Only <span id = "numberOf1">14</span> left in stock - order soon. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href = "#reviewArea">User Reviews</a>
</div>
<input type = "button" id = "addToCart1" value = "Add to cart" class= "buttonType">
</div>
<br>
<div>
<div class = "image-desc">
<img class = "emporeImages" src = "images/empore/carromboard.jpg" style = "margin-left: 10px">
</div> 
<div class = "image-desc" style = "margin-left: 10px">
<h2>Product : Precise 12mm Carrom Board</h2>
<h1>$154.99</h1>
FREE delivery Wed, Nov 23<br>
Only <span id = "numberOf2">13</span> left in stock - order soon. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href = "#reviewArea">User Reviews</a>
</div>
<input type = "button" id = "addToCart2" value = "Add to cart" class= "buttonType">
</div>
<br>
<div>
<div class = "image-desc">
<img class = "emporeImages" src = "images/empore/baseballglove.jpg" style = "margin-left: 10px">
</div> 
<div class = "image-desc" style = "margin-left: 10px">
<h2>Product : Franklin Sports Baseball Glove</h2>
<h1>$$58.20</h1>
FREE delivery Tue, Nov 22<br>
Only <span id = "numberOf3">6</span> left in stock - order soon. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href = "#reviewArea">User Reviews</a>
</div>
<input type = "button" id = "addToCart3" value = "Add to cart" class= "buttonType">
</div>
<br>
<div>
<div class = "image-desc">
<img class = "emporeImages" src = "images/empore/fishingrod.jpg" style = "margin-left: 10px">
</div> 
<div class = "image-desc" style = "margin-left: 10px">
<h2>Product : PLUSINNO Fishing Rod and Reel</h2>
<h1>$63.59</h1>
FREE delivery Tue, Nov 22<br>
Only <span id = "numberOf4">8</span> left in stock - order soon. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href = "#reviewArea">User Reviews</a>
</div>
<input type = "button" id = "addToCart4" value = "Add to cart" class= "buttonType">
</div>
<br>
<div>
<div class = "image-desc">
<img class = "emporeImages" src = "images/empore/basketball.jpg" style = "margin-left: 10px">
</div> 
<div class = "image-desc" style = "margin-left: 10px">
<h2>Product : WILSON NBA Series Basketballs</h2>
<h1>$27.97</h1>
FREE delivery Wed, Nov 23<br>
Only <span id = "numberOf5">11</span> left in stock - order soon. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href = "#reviewArea">User Reviews</a>
</div>
<input type = "button" id = "addToCart5" value = "Add to cart" class= "buttonType">
</div><br><br>
<p id = "reviewArea"></p>
<br><br>
</div>
<div class = "emp-layout" style="width: 50%; float: right;">
<h1 align = "center">Payment Gateway.</h1>
<form method = "POST" action = "" class = formClass>
Credit/Debit Card Number:<input type = "text" name = "cardNo" id = "cardNo" maxlength = "16">
Security Code:<input type = "text" name = "cvv" id = "cvv" maxlength = "3">
Valid Through - Month:<input type = "number" name = "month" id = "month" min = "1" max = "12"> 
Year <input type = "number" name = "year" id = "year" min = "2022" max = "2039">
<input type = "button" class = "buttonType" value = "Pay" id = "paymentButton" name = "paymentButton" disabled>
<input type = "reset" class = "buttonType" value = "Reset" id = "resetButton" name = "resetButton" disabled>
<p id = "payArea"></p>
</form>
</div>
</div>
<br><br>
<p id = "defaultCreds" align = "center" style = "cursor: pointer">Default Credentials</p>

<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>