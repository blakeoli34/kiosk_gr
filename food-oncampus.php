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
	<div class="focus wheretoeat">
	</div>
	<div class="buttonbar">
	</div>
	<div class="breadcrumbs">
		<a href="index.php">HOME</a> > <a href="whereto_eat.php">FOOD</a> > <a class="active" href="food-oncampus.php">ON CAMPUS</a>
	</div>	
	<div class="row">
		<h1 class="center">On Campus</h1>
	</div>
    <div class="row">
		<div id="thequad" class="col-9 filltall gold">
			<h3>THE QUAD CAFE</h3>
		</div>
	</div>
     <div class="row">
		<div id="oncampus" class="col-9 filltall red">
			<h3>THE ROCK</h3>
		</div>
	</div>
	<div class="row">
		<a href="starbucks.php"><div id="starbucks" class="col-half filltall gold">
			<h3>STARBUCKS</h3>
		</div></a>
		<div id="themarket" class="col-half filltall darkgrey">
			<h3>THE MARKET</h3>
		</div>
	</div>
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>