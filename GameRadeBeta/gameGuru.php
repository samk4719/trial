<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "style.css">
	<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Josefin Slab">
	<script type = "text/javascript" src = "darkModeToggle.js"></script>
	<!--  script type="text/javascript" src="gameGuruDesc.js"> </script-->
	
	<!--  script type = "text/javascript" src = "gamesDisplay.js"></script-->
	<script type = "text/javascript" src = "gamesDescDisplay.js"></script>
	
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
<div style = "width:100%;">
<div style = "width: 50%; float: left;" class = "gg-layout" id = "gg-layout">

<div class="ggcontainer-img"><img src="images/gameguru/backgammon.jpg" id = "backgammonButton" class="ggimage"><div class="overlay">Backgammon</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/badminton.jpg" id = "badmintonButton" class="ggimage"><div class="overlay">Badminton</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/baseball.jpg" id = "baseballButton" class="ggimage"><div class="overlay">Baseball</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/basketball.jpg" id = "basketballButton" class="ggimage"><div class="overlay">Basketball</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/bowling.jpg" id = "bowlingButton" class="ggimage"><div class="overlay">Bowling</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/carrom.jpg" id = "carromButton" class="ggimage"><div class="overlay">Carrom</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/catan.jpg" id = "catanButton" class="ggimage"><div class="overlay">Catan</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/checkers.jpg" id = "checkersButton" class="ggimage"><div class="overlay">Checkers</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/chess.jpg" id = "chessButton" class="ggimage"><div class="overlay">Chess</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/cricket.jpg" id = "cricketButton" class="ggimage"><div class="overlay">Cricket</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/dart.jpg" id = "dartButton" class="ggimage"><div class="overlay">Dart</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/football.jpg" id = "footballButton" class="ggimage"><div class="overlay">Football</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/frisbee.jpg" id = "frisbeeButton" class="ggimage"><div class="overlay">Frisbee</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/hockey.jpg" id = "hockeyButton" class="ggimage"><div class="overlay">Hockey</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/ludo.jpg" id = "ludoButton" class="ggimage"><div class="overlay">Ludo</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/monopoly.jpg" id = "monopolyButton" class="ggimage"><div class="overlay">Monopoly</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/poker.jpg" id = "pokerButton" class="ggimage"><div class="overlay">Poker</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/rubikscube.jpg" id = "rubikscubeButton" class="ggimage"><div class="overlay">Rubiks Cube</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/rummy.jpg" id = "rummyButton" class="ggimage"><div class="overlay">Rummy</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/sequence.jpg" id = "sequenceButton" class="ggimage"><div class="overlay">Sequence</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/snooker.jpg" id = "snookerButton" class="ggimage"><div class="overlay">Snooker</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/soccer.jpg" id = "soccerButton" class="ggimage"><div class="overlay">Soccer</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/squash.jpg" id = "squashButton" class="ggimage"><div class="overlay">Squash</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/sudoku.jpg" id = "sudokuButton" class="ggimage"><div class="overlay">Sudoku</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/tabletennis.jpg" id = "tabletennisButton" class="ggimage"><div class="overlay">Table Tennis</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/tennis.jpg" id = "tennisButton" class="ggimage"><div class="overlay">Tennis</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/teqball.jpg" id = "teqballButton" class="ggimage"><div class="overlay">Teqball</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/uno.jpg" id = "unoButton" class="ggimage"><div class="overlay">UNO</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/volleyball.jpg" id = "volleyballButton" class="ggimage"><div class="overlay">Volley Ball</div></div>
<div class="ggcontainer-img"><img src="images/gameguru/wordle.jpg" id = "wordleButton" class="ggimage"><div class="overlay">Wordle</div></div>

<!-- input type = "button" id = "gamesButton" value = "Display Games" -->
<p id = "gamesDisplayArea"></p>

<br><br><br><br><br>
</div>
<div class = "gg-layout" style="width: 50%; float: right;"><p class = "body-font" id = "Desc"></p></div>
</div>


<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>