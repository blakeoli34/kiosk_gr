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
	<div class="focus bus">
	</div>
	<div class="buttonbar">
	</div>
	<div class="breadcrumbs">
		<a href="index.php">HOME</a> > <a class="active" href="BusSchedule.php">BUS SCHEDULE</a>
	</div>
	<div class="sidemenu">
		<a href="">MAPS</a> - <a class="active" href="BusSchedule.php">DOWNSTATE</a> <a href="BusSchedule.php">BIG RAPIDS</a>
	</div>
	<div class="row">
		<h1 class="center">Bus Schedule</h1>
	</div>
	<div class="row">
		<center>
		<table>
			<tr>
				<th class="stop">Bond Court</th>
				<th class="time">Arrivals</th>
				<td class="time">7:41 AM</td>
				<td class="time">10:26 AM</td>
				<td class="time">2:16 PM</td>
				<td class="time">6:06 PM</td>
			</tr>
			<tr>
				<th class="stop"></th>
				<th class="time">Departures</th>
				<td class="time">7:39 AM</td>
				<td class="time"> 10:24 AM</td>
				<td class="time"> 2:14 PM</td>
				<td class="time">6:04 PM</td>
			</tr>
			<tr>
				<th class="stop">Science Building</th>
				<th class="time">Arrivals</th>
				<td class="time">7:45 AM</td>
				<td class="time">10:30 AM</td>
				<td class="time">2:20 PM</td>
				<td class="time">6:10 PM</td>
			</tr>
			<tr>
				<th class="stop"></th>
				<th class="time">Departures</th>
				<td class="time">7:50 AM</td>
				<td class="time">10:35 AM</td>
				<td class="time">2:25 PM</td>
				<td class="time">6:15 PM</td>
			</tr>
			<tr>
				<th class="stop">Cedar Springs</th>
				<th class="time">Arrivals</th>
				<td class="time">8:37 AM</td>
				<td class="time">11:22 AM</td>
				<td class="time">3:12 PM</td>
				<td class="time">7:02 PM</td>
			</tr>
			<tr>
				<th class="stop"></th>
				<th class="time">Departures</th>
				<td class="time">8:39 AM</td>
				<td class="time"> 11:24 AM</td>
				<td class="time">3:14 PM</td>
				<td class="time">7:04 PM</td>
			</tr>
			<tr>
				<th class="stop">Grand Rapids</th>
				<th class="time">Arrivals</th>
				<td class="time">9:05 AM</td>
				<td class="time">11:50 AM</td>
				<td class="time">3:40 PM</td>
				<td class="time">7:30 PM</td>
			</tr>
			<tr>
				<th class="stop"></th>
				<th class="time">Departures</th>
				<td class="time">6:25 AM</td>
				<td class="time">9:10 AM</td>
				<td class="time">1:00 PM</td>
				<td class="time">4:50 PM</td>
			</tr>
			<tr>
				<th class="stop">Cedar Springs</th>
				<th class="time">Arrivals</th>
				<td class="time">6:51 AM</td>
				<td class="time">9:36 AM</td>
				<td class="time">1:26 PM</td>
				<td class="time">5:16 PM</td>
			</tr>
			<tr>
				<th class="stop"></th>
				<th class="time">Departures</th>
				<td class="time">6:53 AM</td>
				<td class="time"> 9:38 AM</td>
				<td class="time">1:28 PM</td>
				<td class="time">5:18 PM</td>
			</tr>
		</table>
		<div class="maps">
		<img src="./images/bus1.jpg">
		<img src="./images/bus2.jpg">
	</div>
	</center>
	</div>
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>