<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "style.css">
	<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Josefin Slab">
	<script type = "text/javascript" src = "darkModeToggle.js"></script>
	
	<title>GameRade - Post</title>
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
<div class = "formClass">
<form method = "POST" action = "">
<p>
			<label for = "userNameBox">User name :</label>
			<input type = "text" name = "userNameBox" id = "userNameBox" value = <?php if(isset($_POST['userNameBox'])) echo $_POST['userNameBox'];?>>
		</p>
	  	<p>
			<label for = "dateBox">Date of play :</label>
			<input type = "date" min = "2022-11-18" name = "dateBox" id = "dateBox" value = <?php if(isset($_POST['dateBox'])) echo $_POST['dateBox'];?>>
		</p>
		<p>
			<label for = "timeBox">Time window :</label>
			<input type = "time" name = "timeBox" id = "timeBox" value = <?php if(isset($_POST['timeBox'])) echo $_POST['timeBox'];?>>
		</p>
		<p>
			<label for = "gameNameBox">Game being played :</label>
			<input type = "text" name = "gameNameBox" id = "gameNameBox" value = <?php if(isset($_POST['gameNameBox'])) echo $_POST['gameNameBox'];?>>
		</p>
		
		<p>
			<label for="ageGroupSelect">Select the age group of your GameRADE :</label> 
			<select name = "ageGroupSelect" id = "ageGroupSelect">
			
				<option value="SELECT">Select</option>
				<option 
				<?php if(isset($_POST['ageGroupSelect']) && ($_POST['ageGroupSelect'])=='2to5years') echo 'selected="selected"'; ?> value="2to5years">2years to 5years
				</option>
				<option 
				<?php if(isset($_POST['ageGroupSelect']) && ($_POST['ageGroupSelect'])=='6to12years') echo 'selected="selected"'; ?> value="6to12years">6years to 12years
				</option>
				<option 
				<?php if(isset($_POST['ageGroupSelect']) && $_POST['ageGroupSelect']=='13to18years') echo 'selected="selected"'; ?>value="13to18years">13years to 18years
				</option>
				<option 
				<?php if(isset($_POST['ageGroupSelect']) && $_POST['ageGroupSelect']=='19to30years') echo 'selected="selected"'; ?> value="19to30years">18years to 30years
				</option>
				<option 
				<?php if(isset($_POST['ageGroupSelect']) && $_POST['ageGroupSelect']=='31andAbove') echo 'selected="selected"'; ?>value="31andAbove">30years and above
				</option>
				
			</select>	
		</p>
		<p>
			<label for = "venueBox">Venue* :</label>
			<input type = "text" name = "venueBox" id = "venueBox" value = <?php if(isset($_POST['venueBox'])) echo $_POST['venueBox'];?>>
		</p>
		<p>
			<label for = "numGRBox"> Number of GameRADEs needed* :</label>
			<input type = "number" name = "numGRBox" id = "numGRBox" value = <?php if(isset($_POST['numGRBox'])) echo $_POST['numGRBox'];?>>
		</p>
		<p>
			<input type = "radio" id = "forRadio" name = "forRadio" value = "mySelf" checked>For myself
			&emsp;&emsp;
			<input type = "radio" id = "forRadio" name = "forRadio" value = "myKin">For my kin
		</p>
		<p>
			<label for = "notesBox">NOTE :</label>
			<input type = "text" id="notesBox" name="notesBox"><?php if(isset($_POST['notesBox'])) echo $_POST['notesBox']?>
			<br>(Example: For my kid, We have a cricket bat need a ball, NA if nothing.)
		</p>
		<p>
			<input type= "submit" value="Submit" name="submitButton" id = "submitButton">
			<input type= "reset" value="Reset" name="resetButton" id = "resetButton">
		</p>

</form>
<?php
    include ('inc_post.php');  
?>

</div>
<br><br><br><br><br><br><br><br>

<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>