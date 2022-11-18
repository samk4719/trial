<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "style.css">
	<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Josefin Slab">
	<script type = "text/javascript" src = "darkModeToggle.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/echarts@5.4.0/dist/echarts.min.js"></script>
	<!-- script type = "text/javascript" src = "ageGroupPie.js"></script-->
	<title>GameRade - Home</title>
</head>
<body class = "bgGradient">
<header>
	<div class = "container">
	<nav>
    	<h1 class = "logo">
    		<a href = "adminIndex.php"><img src= "images/gamerade-high-resolution-logo-black-on-transparent-background.png" height = 50px/></a> 
    	</h1>
    	<ul class = "navList">
    		<li><a href = "adminIndex.php">ADMIN HOME</a></li>
    		<li><a href = "adminUserRating.php">USER RATING</a></li>
    		&emsp;&emsp;
    		<li><input type = "button" class = "darkModeButton" id = "toggleButton" value = "Dark mode"></li>
    	</ul>
	</nav>
	</div>
</header>
<form method = "POST" action = "">
<table class = "postsDisplayTable" style = "margin-top: 10px; padding: 10px">
<tr>
<th>User Full Name</th>
<th>User Rating</th>
</tr>
<tr>
<td><input type = "text" id = "userFullName" name = "userFullName"></td>
<td><input type = "number" id = "userRating" name = "userRating" min = "1" max = "5">
</tr>
</table>
<br>
<input type = "submit" id = "ratingButton" name = "ratingButton" value = "Submit Rating!" style = "max-width: 33.3%; margin-left: 33.3%">
</form>
<br>
<?php 
    include("inc_adminUserRating.php");
?>
<br><br><br>
<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>