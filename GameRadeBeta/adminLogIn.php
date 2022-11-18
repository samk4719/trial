<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<link rel = "stylesheet" type = "text/css" href = "style.css">
<title>GameRade - Home</title>
</head>
<body class = "bgGradient">
	<a href = "home.php"><img class = "GLogoClass" src = images/GBlack-transparentBg.png></a>
	<div class = "formClass">
		<form method = "POST" action = "">
			Admin User Name: <input type = "text" id = "adminUserName" name = "adminUserName">
			Admin Password: <input type = "password" id = "adminPassword" name = "adminPassword">
			<input type = "submit" id = "submitAdmin" name = "submitAdmin" value = "Admin LogIn">
		</form>
		<?php
		  include('inc_adminLogIn.php');
		?>
	</div>
<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>