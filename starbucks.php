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
		<a href="index.php">HOME</a> > <a href="whereto_eat.php">FOOD</a> > <a href="food-oncampus.php">ON CAMPUS</a> > <a class="active" href="starbucks.php">STARBUCKS</a>
	</div>	
	<div class="row">
		<h1 class="center">Starbucks</h1>
	</div>
	
	<div class="row">
    	<div class="col-margin fill"></div>
		<div class="col-5">
     		<div class="col-9">   
                <div class="col-margin fill"></div>
                <div class="col-65 horizontal_line">
                        <p class="event_headline">The University Ceneter</p>
                        <p class="event_location">Hours: 7:00AM-9:00PM<br>Monday - Friday</p>
                        <p class="event_location">10:00AM until 9:00PM<br>Saturday & Sunday</p>
                        <p class="event_details">map ></p>
                </div>
            </div>    
           
            <div class="col-margin fill"></div>
			<div class="col-65 horizontal_line">
                        <p class="event_headline">Business/IRC</p>
                        <p class="event_location">Hours: 7:30AM-7:00PM<br>Monday - Thursday</p>
                        <p class="event_location">7:30AM until 2:30PM<br>Friday</p>
                        <p class="event_location">Closed Saturday and Sunday</p>
                        <p class="event_details">map ></p>
                </div>
           
			</div>
            <div class="col-1 fill"></div>
            <div class="col-3">
            	<img class="max" src="images/starbucks_logo.png">
            </div>
		</div>	
	  </div>		
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>