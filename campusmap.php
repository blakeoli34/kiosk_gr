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
    <?php $pageTitle = 'Campus Map'; include("inc/header.php"); ?> 
	<div class="focus campusmap">
	</div>
	<div class="buttonbar">
	</div>
	<div class="breadcrumbs">
		<a href="index.php">HOME</a> > <a class="active" href="RSOHome.php">CAMPUS MAP</a>
	</div>
<center>
	<div class="rsoinfo">
		<h1 class="rso">Campus Map</h1>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1015.9932162584769!2d-85.4827694043665!3d43.683422297990944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1462388787453" width="100%" height="450" frameborder="0" style="border:3px solid #cc0033" allowfullscreen></iframe>
	</div>
</center>
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>