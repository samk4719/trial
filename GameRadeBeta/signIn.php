<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<link rel = "stylesheet" type = "text/css" href = "style.css">
<script type = "text/javascript" src = "resetPassword.js"></script>
<title>GameRade - Home</title>
</head>
<body class = "bgGradient">
	<a href = "home.php"><img class = "GLogoClass" src = images/G-transparentBg.png></a>
	<div class = "formClass">
	
		<form method = "POST" action = "">
			User Name: <input type = "text" id = "userName" name = "userName">
			Password: <input type = "password" id = "signInPassword" name = "signInPassword">
			<input type = "submit" id = "submitSignIn" name = "submitSignIn" value = "Sign In">
			<input class = "buttonType" type = "button" id = "resetPwd" name = "resetPwd" value = "Reset Password">
		</form>
		<p id = "resetFormArea"></p>
		<?php
		  include ('inc_signIn.php');
		  include ('inc_resetPassword.php');
		?>
	</div>
	<br><br><br><br><br>
<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>