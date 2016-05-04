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
		<a href="index.php">HOME</a> > <a class="active" href="sports.php">SPORTS</a>
	</div>	
	<div class="row">
		<h1 class="center">Sports</h1>
	</div>
	<div class="row">
		<div id="mens" class="col-half filltall red">
			<h3>Mens Sports</h3>
		</div>
		<div id="womens" class="col-half filltall gold">
			<h3>Womens Sports</h3>
		</div>
	</div>
	<div class="row">
		<div id="results" class="col-half filltall gold">
			<h3>Sports Results</h3>
		</div>
		<div id="clubs" class="col-half filltall darkgray">
			<h3>Club Sports</h3>
		</div>
	</div>
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>