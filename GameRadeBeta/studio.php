<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<link rel = "stylesheet" type = "text/css" href = "style.css">
<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Josefin Slab">
<script type = "text/javascript" src = "darkModeToggle.js"></script>
<script type = "text/javascript" src = "displayStudio.js"></script>
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

	    <div id="content">
        <form method="POST" action="" enctype="multipart/form-data" class = "formClass">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="Choose file">
            </div>
            <div class="form-group">
                <input type="submit" name="upload" id = "upload" value = "Upload & Display!">
            </div>
             <?php
                include("inc_studio.php");
            ?>
        </form>
        <br>
        	<!-- input type="button" class = "buttonType" name="display" id = "display" value = "Display Studio" style = "max-width: 33%; margin-left: 33.5%" -->
    </div>
   
    <div class="display-image">
        <?php
        
            $query = "select * from studio";
            $result = mysqli_query($db, $query);
            
            while ($data = mysqli_fetch_assoc($result)) {
                
                ?>
            <img class = "studioImages" src="./images/studio/<?php echo $data['filename']; ?>">
        	<?php 
            }
        ?>
    </div>
    
<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>