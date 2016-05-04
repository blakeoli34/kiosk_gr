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
		<a href="index.php">HOME</a> > <a href="calendar_day.php">EVENTS</a> > <a class="active" href="calendar_month.php">ATHLETIC EVENTS</a>
	</div>	
	<div class="row">
		<h1 class="center">Athletic Events</h1>
	</div>
	<div class="row">
		<div class="topfilters">
			<ul class="cal_filter">
				<a href="calendar_month.php" class="active"><li>Month</li></a>
				<a href="calendar_week.php"><li>Week</li></a>
				<a href="calendar_day.php"><li>Day</li></a>
				<a href="calendar_list.php"><li>List</li></a>
			</ul>
		</div>
	</div>
	<div class="row">
		<h1 class="centermonth"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>May<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h1>
	</div>
	<div class="row">
		<div class="col-margin fill"></div>	
	    <div class="col-6">
			<table class="calendar">
		    <thead class="calendar_weekdays">
		        <th>Sun</span></th>
		        <th>Mon</span></th>
		        <th>Tue</span></th>
		        <th>Wed</span></th>
		        <th>Thu</span></th>
		        <th>Fri</span></th>
		        <th>Sat</span></th>
		    </thead>
		    <tbody id="calbody">
		        <tr>
		            <td><div class="box tgray">27</div></td>
		            <td><div class="box tgray">28</div></td>
		            <td><div class="box tgray">29</div></td>
		            <td><div class="box tgray">30</div></td>
		            <td><div class="box">01</div></td>
		            <td><div class="box">02</div></td>
		            <td><div class="box">03</div></td>
		        </tr>
		        <tr>
		            <td><div class="box">04</div></td>
		            <td><div class="box">05</div></td>
		            <td><div class="box">06</div></td>
		            <td><div class="box">07</div></td>
		            <td><div class="box">08</div></td>
		            <td><div class="box">09</div></td>
		            <td><div class="box">10</div></td>
		        </tr>
		        <tr>
		            <td><div class="box">11</div></td>
		            <td><div class="box">12</div></td>
		            <td><div class="box">13</div></td>
		            <td><div class="box">14</div></td>
		            <td><div class="box">15</div></td>
		            <td><div class="box">16</div></td>
		            <td><div class="box">17</div></td>
		        </tr>
		         <tr>
		            <td><div class="box">18</div></td>
		            <td><div class="box">19</div></td>
		            <td><div class="box">20</div></td>
		            <td><div class="box">21</div></td>
		            <td><div class="box">22</div></td>
		            <td><div class="box">23</div></td>
		            <td><div class="box">24</div></td>
		        </tr>
		           <tr>
		            <td><div class="box">25</div></td>
		            <td><div class="box">26</div></td>
		            <td><div class="box">27</div></td>
		            <td><div class="box">28</div></td>
		            <td><div class="box">29</div></td>
		            <td><div class="box">30</div></td>
		            <td><div class="box">31</div></td>
		        </tr>
		    </tbody>
		</table>
	</div>	
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
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>