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
    <?php $pageTitle = 'Food'; include("inc/header.php"); ?> 
	<div class="focus wheretoeat">
	</div>
	<div class="buttonbar">
	</div>
	<div class="breadcrumbs">
		<a href="index.php">HOME</a> > <a class="active" href="whereto_eat.php">FOOD</a> 
	</div>	
	<div class="row">
		<h1 class="center">Where to Eat..</h1>
	</div>
    <div class="row">
		<a href="food-oncampus.php"><div id="oncampus" class="col-9 filltall red">
			<h3>ON CAMPUS</h3>
		</div></a>
	</div>
	<div class="row">
		<a href="food-offcampus.php"><div id="offcampus" class="col-half filltall gold">
			<h3>OFF CAMPUS</h3>
		</div></a>
		<div id="foodmap" class="col-half filltall darkgrey">
			<h3>MAPS</h3>
		</div>
	</div>
	<div class="page drop"></div>
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>