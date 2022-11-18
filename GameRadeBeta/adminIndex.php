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
<p align = "center" id = "Desc" class = "body-font">Nightingale Chart - Number of request records in each age group.</p>
<div id="ageCountPieContainer" align = "center" style= "height:700%; width:98%"></div>
<br><br><br>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.0/dist/echarts.min.js"></script>

  <script type="text/javascript">
  
  let ageCountArray = <?php echo json_encode(include("inc_adminIndexEChart.php"));?>;
  
    var dom = document.getElementById('ageCountPieContainer');
    var myChart = echarts.init(dom, null, {
      renderer: 'canvas',
      useDirtyRect: false
    });
    var app = {};
    
    var option;

    option = {
  legend: {
    top: 'bottom'
  },
  toolbox: {
    show: true,
    feature: {
      mark: { show: true },
      dataView: { show: true, readOnly: false },
      restore: { show: true },
      saveAsImage: { show: true }
    }
  },
  series: [
    {
      name: 'Nightingale Chart',
      type: 'pie',
      radius: [50, 250],
      center: ['50%', '50%'],
      roseType: 'area',
      itemStyle: {
        borderRadius: 8
      },
      data: [
        { value: ageCountArray[0], name: '2years to 5years' },
        { value: ageCountArray[1], name: '6years to 12years' },
        { value: ageCountArray[2], name: '13years to 18years' },
        { value: ageCountArray[3], name: '19years to 30years' },
        { value: ageCountArray[4], name: '31years and above' },
      ]
    }
  ]
};

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }

    window.addEventListener('resize', myChart.resize);
  </script>

  <p align= "center" id = "Desc1" class = "body-font">Data of all the users that have signed-up</p>
<?php 
include("inc_adminIndexDataDisplay.php");
?>
<br><br><br>
<footer class = "footer" id = "footer">
	<p> &#169; : Sameer Krishna &emsp;&emsp;&emsp; &#128222; : +1 (913) 378 3336 &emsp;&emsp;&emsp; &#128231; : sameerkrishna.j@gmail.com &emsp;&emsp;&emsp; &#128271; : <a href = "privacyPolicy.php">Privacy Policy</a>&emsp;&emsp;&emsp; &#128187; : <a href = "aboutUs.php">About Us</a></p>
</footer>
</body>
</html>