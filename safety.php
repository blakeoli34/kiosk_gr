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
    <?php $pageTitle = 'Campus Info'; include("inc/header.php"); ?> 
	<div class="focus campusinfo">
	</div>
	<div class="buttonbar">
	</div>
	<div class="breadcrumbs">
		<a href="index.php">HOME</a> > <a href="campusinfo.php">CAMPUS INFO</a> > <a class="active" href="safety.php">SAFETY</a>
	</div>
<center>
	<div class="rsoinfo">
		<h1 class="rso">SAFETY</h1>
		<p class="lead">
			<b>Emergency Boxes</b> allow for students to get help from over 30 different spots on campus.<br><br>
			<b>Campus Police</b> are always present on campus, ready to help should a situation arrive.<br><br>
			<b>Five Police Stations</b> in the area guarantees the safety of our students.
		</p>
	</div>
</center>
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>