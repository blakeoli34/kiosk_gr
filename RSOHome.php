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
    <?php $pageTitle = 'RSO'; include("inc/header.php"); ?> 
	<div class="focus RSO">
	</div>
	<div class="buttonbar">
	</div>
	<div class="breadcrumbs">
		<a href="index.php">HOME</a> > <a class="active" href="RSOHome.php">RSOS</a>
	</div>
	<div class="sidemenu">
		<a href="">SORT</a> - <a class="active" href="BusSchedule.php">ALL</a> <a href="BusSchedule.php">A - Z</a>
	</div>
	<div class="row">
		<h1 class="center">RSOS</h1>
	</div>
	<div class="row">
		<div id="uke" class="col-half filltall">
			<h3>Uke Club</h3>
		</div>
		<a href="RSOSecondary.php"><div id="aiga" class="col-half filltall">
			<h3>AIGA</h3>
		</div></a>
	</div>
	<div class="row">
		<div id="volunteer" class="col-half filltall">
			<h3>Volunteer Center</h3>
		</div>
		<div id="blackgreek" class="col-half filltall gray">
			<h3>Black Greek Council</h3>
	</div>
	<div class="row">
		<div id="eu" class="col-half filltall">
			<h3>Entertainment Unlimited</h3>
		</div>
		<div id="diversity" class="col-half filltall">
			<h3>Diversity </h3>
		</div>
	</div>
	</div>
	</div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>