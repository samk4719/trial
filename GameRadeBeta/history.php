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
<br>
<p align = "center" class = "body-font" id = "Desc">Select the suitable filter from the dropdown and click the <b>FILTER</b> button for the requests view.<br><br>No need of giving the Username if you are filtering All Requests.</p>  
	  <form method="POST" action="" class= "formClass">
	  
	  	<label for = "userName">Username*:</label>
	  	<input type = 'text' name ='userName'></input>
	  	
		<label for="filterSelect">Filter the requests :</label> 
			<select name = "filterSelect" id = "filterSelect">
			
				<option value="FILTER">Select the Filter</option>
				<option value="ALL">All requests </option>
				<option value="ONLYMINE">Only my requests</option>
			</select>
		
			<input type= "submit" value="FILTER" name="filterButton">
			<br>
	  </form>
	  	  <br><br>
	  	<div align = "center" class = "font-div">
	  	<?php
	  	
		  include ('inc_filterRequests.php');
		   
		?>
		</div>
	  	<br>
	  	<br>
	<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>