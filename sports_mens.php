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
	<div class="focus sports">
	</div>
	<div class="buttonbar">
	</div>
	<div class="breadcrumbs">
		<a href="index.php">HOME</a> > <a href="sports.php">SPORTS</a> > <a class="active" href="sports_mens.php">MENS SPORTS</a>
	</div>	
	<div class="row">
		<h1 class="center">Mens Sports</h1>
	</div>
	<div class="row">
		<div class="col-9 sport darkgray">
			<h2>Football</h2>
		</div>
		<div class="col-9 sport gray">
			<h2>Basketball</h2>
		</div>
		<div class="col-9 sport darkgray">
			<h2>Hockey</h2>
		</div>
		<div class="col-9 sport gray">
			<h2>Golf</h2>
		</div>
		<div class="col-9 sport darkgray">
			<h2>Cross Country</h2>
		</div>
		<div class="col-9 sport gray">
			<h2>Track and Field</h2>
		</div>
		<div class="col-9 sport darkgray">
			<h2>Tennis</h2>
		</div>
	</div>
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>