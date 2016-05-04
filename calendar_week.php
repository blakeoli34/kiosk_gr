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
    <?php $pageTitle = 'Events'; include("inc/header.php"); ?> 
	<div class="focus calendarimage"></div>
	<div class="buttonbar">
	</div>
	<div class="breadcrumbs">
		<a href="index.php">HOME</a> > <a href="calendar_day.php">EVENTS</a> > <a class="active" href="calendar_week.php">ATHLETIC EVENTS</a>
	</div>	
	<div class="row">
		<h1 class="center">Athletic Events</h1>
	</div>
	<div class="row">
		<div class="topfilters">
			<ul class="cal_filter">
				<a href="calendar_month.php"><li>Month</li></a>
				<a href="calendar_week.php" class="active"><li>Week</li></a>
				<a href="calendar_day.php"><li>Day</li></a>
				<a href="calendar_list.php"><li>List</li></a>
			</ul>
		</div>
	</div>
	<div class="row">
		<h1 class="centermonth"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>May<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h1>
	</div>
    <div class="row">
		<div class="topfilters">
			<ul class="cal_filter_week">
            	<p class="week">Week:</p>
				<a href="#/"  class="active"><li>03-09</li></a>
				<a href="#/"><li>10-16</li></a>
				<a href="#/"><li>17-23</li></a>
				<a href="#/"><li>24-30</li></a>
			</ul>
		</div>
	</div>		
	<div class="row">
    	<div class="col-margin fill"></div>
		<div class="col-5">
			<div class="col-9 calendar_container">
	        	<div class="calsquare">03</div>
	        	<h5 class="month">May</h5>
	            <h4 class="weekday">Sunday</h4>
			</div>
			<div class="col-9 horizontal_line">
	                <p class="event_headline">Bulldog Club Baseball Hosts Bowling Green</p>
	                <p class="event_time">Event Time: 12:00 PM</p>
	                <p class="event_location">Location: Win Kellum Field</p>
                    <p class="event_details">Event Details ></p>
			</div>
            <div class="col-9 horizontal_line">
	                <p class="event_headline">Blue Line Fitness Club</p>
	                <p class="event_time">Event Time: 6:00 PM</p>
	                <p class="event_location">Location: Win Kellum Field</p>
                    <p class="event_details">Event Details ></p>
			</div>
            <div class="row">
            	<div class="col-9 fillmargin"></div>
            </div>
            <div class="col-9 calendar_container">
	        	<div class="calsquare">08</div>
	        	<h5 class="month">May</h5>
	            <h4 class="weekday">Friday</h4>
			</div>
			<div class="col-9 horizontal_line">
	                <p class="event_headline">Women's Tennis Hosts Davenport</p>
	                <p class="event_time">Event Time: 2:00 PM</p>
	                <p class="event_location">Location: Racquet and Fitness Center</p>
                    <p class="event_details">Event Details ></p>
			</div>
            <div class="row">
            	<div class="col-9 fillmargin"></div>
            </div>
            <div class="col-9 calendar_container">
	        	<div class="calsquare">09</div>
	        	<h5 class="month">May</h5>
	            <h4 class="weekday">Saturday</h4>
			</div>
			<div class="col-9 horizontal_line">
	                <p class="event_headline">Men's Tennis Hosts Lake Superior</p>
	                <p class="event_time">Event Time: 10:00 AM</p>
	                <p class="event_location">Location: Racquet and Fitness Center</p>
                    <p class="event_details">Event Details ></p>
			</div>
            <div class="col-9 horizontal_line">
	                <p class="event_headline">Women's Softball Hosts Hillsdale</p>
	                <p class="event_time">Event Time: 1:00 PM</p>
	                <p class="event_location">Location: FSU Softball Field</p>
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