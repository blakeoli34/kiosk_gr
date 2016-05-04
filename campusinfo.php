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
		<a href="index.php">HOME</a> > <a class="active" href="campusinfo.php">CAMPUS INFORMATION</a>
	</div>	
	<div class="row">
		<h1 class="center">Campus Information</h1>
	</div>
	<div class="row">
		<div id="safety" class="col-half filltall darkgray">
			<h3>Safety</h3>
		</div>
		<div id="parking" class="col-half filltall gold">
			<h3>Parking</h3>
		</div>
	</div>
	<div class="row">
		<div id="dps" class="col-half filltall gold">
			<h3>Department of <br>Public Safety</h3>
		</div>
		<div id="finaid" class="col-half filltall red">
			<h3>Financial<br>Aid</h3>
		</div>
	</div>
	<div class="row">
		<div id="housing" class="col-9 filltall darkgray">
			<h3>Housing</h3>
		</div>
	</div>
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>