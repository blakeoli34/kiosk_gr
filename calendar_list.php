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
	<div class="focus calendarimage"></div>
	</div>
	<div class="buttonbar">
	</div>
	<div class="breadcrumbs">
		<a href="index.php">HOME</a> > <a href="events.php">EVENTS</a> > <a class="active" href="calendar_month.php">ATHLETIC EVENTS</a>
	</div>	
	<div class="row">
		<h1 class="center">Athletic Events</h1>
	</div>
	<div class="row">
		<div class="topfilters">
			<ul class="cal_filter">
				<a href="#/"><li>Month</li></a>
				<a href="#/"><li>Week</li></a>
				<a href="#/"><li>Day</li></a>
				<a href="#/"  class="active"><li>List</li></a>
			</ul>
		</div>
	</div>
	<div class="row">
		<h1 class="centermonth"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>May<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h1>
	</div>
	<div class="row">
    	<div class="col-margin fill"></div>
		<div class="col-5">
			<div class="col-9 calendar_container">
	        	<div class="calsquare">04</div>
	        	<h5 class="month">May</h5>
	            <h4 class="weekday">Wednesday</h4>
			</div>
			<div class="col-9 horizontal_line">
	                <p class="event_headline">Men's & Women's Track Host GLIAC Outdoor Championships</p>
	                <p class="event_time">Event Time: 1:30 PM</p>
	                <p class="event_location">Location: Top Taggart Field</p>
                    <p class="event_details">Event Details ></p>
			</div>
            <div class="row">
            	<div class="col-9 fillmargin"></div>
            </div>
            <div class="col-9 calendar_container">
	        	<div class="calsquare">05</div>
	        	<h5 class="month">May</h5>
	            <h4 class="weekday">Thursday</h4>
			</div>
			<div class="col-9 horizontal_line">
	                <p class="event_headline">Men's & Women's Track Host GLIAC Outdoor Championships</p>
	                <p class="event_time">Event Time: 9:00 AM</p>
	                <p class="event_location">Location: Top Taggart Field</p>
                    <p class="event_details">Event Details ></p>
			</div>
            <div class="row">
            	<div class="col-9 fillmargin"></div>
            </div>
            <div class="col-9 calendar_container">
	        	<div class="calsquare">06</div>
	        	<h5 class="month">May</h5>
	            <h4 class="weekday">Friday</h4>
			</div>
			<div class="col-9 horizontal_line">
	                <p class="event_headline">Men's & Women's Track Host GLIAC Outdoor Championships</p>
	                <p class="event_time">Event Time: 11:00 AM</p>
	                <p class="event_location">Location: Top Taggart Field</p>
                    <p class="event_details">Event Details ></p>
			</div>
            <div class="row">
            	<div class="col-9 fillmargin"></div>
            </div>
            <div class="col-9 calendar_container">
	        	<div class="calsquare">07</div>
	        	<h5 class="month">May</h5>
	            <h4 class="weekday">Saturday</h4>
			</div>
			<div class="col-9 horizontal_line">
	                <p class="event_headline">Club Baseball Hosts Central Michigan</p>
	                <p class="event_time">Event Time: 11:00 AM</p>
	                <p class="event_location">Location: Win Kellum Field</p>
                    <p class="event_details">Event Details ></p>
			</div>
		</div>	
	     <div class="col-1 fill"></div>
	     <div class="col-2">
	        <div class="filter_box">
	        	<h4 class="filter">Filter:</h4>
				<form class="filter_list">
				  <input id="allevents" type="radio" name="filter" value="allevents">
				  <label for="allevents">All Events</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
				  <label for="academic">Academic</label><br>
				  <input id="alumni" type="radio" name="filter" value="alumni">
				  <label for="alumni">Alumni</label><br>
				  <input id="campus" type="radio" name="filter" value="campus">
				  <label for="campus">Campus</label><br>
				  <input id="community" type="radio" name="filter" value="community">
				  <label for="community">Community</label><br>
				  <input id="meetings" type="radio" name="filter" value="meetings">
				  <label for="meetings">Meetings</label><br>
				  <input id="athletics" type="radio" name="filter" value="athletics" checked>
				  <label for="athletics">Athletics</label><br>
				  <input id="students" type="radio" name="filter" value="students">
				  <label for="students">Student</label><br>
				  <input id="asc" type="radio" name="filter" value="asc">
				  <label for="asc">ASC</label><br>
				  <input id="faculty" type="radio" name="filter" value="faculty">
				  <label for="faculty">Faculty</label><br>
				  <input id="cable" type="radio" name="filter" value="ferriscable">
				  <label for="cable">Ferris Cable</label><br>
				  <input id="culture" type="radio" name="filter" value="culture">
				  <label for="culture">Multicultural</label><br>
				  <input id="online" type="radio" name="filter" value="online">
				  <label for="online">Online</label><br>
				  <input id="williams" type="radio" name="filter" value="williams">
				  <label for="williams">Williams</label><br>
				  <input id="emeriti" type="radio" name="filter" value="emeriti">
				  <label for="emeriti">Emeriti</label>
				</form>
	        </div>
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