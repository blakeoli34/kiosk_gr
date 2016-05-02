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
  <div class="page2">
    <?php include("inc/header.php"); ?> 
	<div class="focus">
    	<img alt="" src="" />
	</div>
	<div class="buttonbar">
	</div>
	<div class="row">
		<h1 class="center">Sport Events</h1>
	</div>
	<div class="row">
    	<div class="col-margin fill"></div>
		<div class="col-5 fill calendar_container">
        	<div class="calsquare">03</div>
        	<h5 class="month">April</h5>
            <h4 class="weekday">Sunday</h4>
		</div>
        <div class="col-1 fill"></div>
        <div class="col-2">
        	<div class="filter_box">
        		<h4 class="filter">Filter</h4>
            </div>
        </div>
        <div class="col-margin fill"></div>	
	</div>
	<div class="row">
            <div class="col-margin fill"></div>	
		<div class="col-5 horizontal_line">
                <p class="event_headline">Bulldog Club Baseball Hosts Bowling Green</p>
                <p class="event_time">Event Time: 12:00 PM</p>
                <p class="event_location">Location: Win Kellum Field</p>
		</div>
        
        <div class="col-margin fill"></div>	
	</div>
	<div class="row">
		<div class="col-4">
		</div>
		<div class="col-5">
		</div>
	</div>	
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>