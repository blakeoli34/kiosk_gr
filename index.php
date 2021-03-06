<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kiosk GR</title>
	<link rel="stylesheet" href="css/global.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/glyphs.css" type="text/css" media="screen">
	<!--[if IE]><script type="text/javascript" src="js/ie.js"></script><![endif]-->
</head>
<body>
  <div class="page">
    <?php $pageTitle = 'Home'; include("inc/header.php"); ?> 
	<div class="focus home">
		<h2><span class="large">Spring</span>Commencement Ceremony</h2>
		<h4>Friday, May 6 and Saturday, May 7<br>at the Ewigleben Sports Complex</h4>
	</div>
	<div class="buttonbar">
	</div>
	<div class="row">
		<a href="whereto_eat.php"><div id="food" class="col-3 fill gold">
			<img class="icon" src="images/burger-white.png" alt="food" />
			<h3>Food</h3>
		</div></a>
		<a href="campusmap.php"><div id="campusmap" class="col-4 fill red">
			<img class="icon" src="images/map-white.png" alt="map" />
			<h3>Campus Map</h3>
		</div></a>
		<a href="RSOHome.php"><div id="rso" class="col-2 fill gray">
			<img class="icon" src="images/rso.png" alt="rso" />
			<h3>RSO's</h3>
		</div></a>
	</div>
	<div class="row">
		<a href="calendar_day.php"><div id="events" class="col-6 fill gray">
			<img class="icon" src="images/events-white.png" alt="events" />
			<h3>Events</h3>
		</div></a>
		<a href="faculty.php"><div id="faculty" class="col-3 fill gold">
			<img class="icon" src="images/apple.png" alt="faculty" />
			<h3>Faculty</h3>
		</div></a>
	</div>
	<div class="row">
		<a href="sports.php"><div id="sports" class="col-9 fill red">
			<img class="icon" src="images/sports.png" alt="sports" />
			<h3>Sports</h3>
		</div></a>
	</div>
	<div class="row">
		<a href="busschedule.php"><div id="bus" class="col-4 fill gold">
			<img class="icon" src="images/bus.png" alt="bus" />
			<h3>Bus Schedule</h3>
		</div></a>
		<a href="campusinfo.php"><div id="campusinfo" class="col-5 fill gray">
			<img class="icon" src="images/campus-information.png" alt="campus info" />
			<h3>Campus Information</h3>
		</div></a>
	</div>	
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>