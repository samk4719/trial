<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<link rel = "stylesheet" type = "text/css" href = "style.css">
<title>GameRade - Home</title>
</head>
<body class = "bgGradient">
	<a href = "home.php"><img class = "GLogoClass" src = images/G-transparentBg.png></a>
	<div class = "formClass">
		<form method = "POST" action = "">
			First Name: <input type = "text" id = "firstName" name = "firstName">
			Last Name: <input type = "text" id = "lastName" name = "lastName">
			Username:  <input type = "text" id = "userName" name = "userName">
			Email: <input type = "email" id = "eMail" name = "eMail">
			Phone: <input type = "tel" id = "phoneNo" name = "phoneNo" pattern="[0-9]{10}">
			Date of Birth <input type = "date" id = "doBirth" name = "doBirth" max = "2013-12-31">
			Password: <input type = "password" id = "password" name = "password">
			Confirm Password: <input type = "password" id = "passwordConf" name = "passwordConf">
			<input type = "submit" id = "submitButton" name = "submitButton" value = "Register">
		</form>
		<?php
		  include ('inc_signUp.php'); // including signUp   
		?>
	</div>
	<br><br><br><br><br><br><br><br>
<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>