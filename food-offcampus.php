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
		<a href="index.php">HOME</a> > <a href="whereto_eat.php">FOOD</a> > <a class="active" href="food-offcampus.php">OFF CAMPUS</a>
	</div>	
	<div class="row">
		<h1 class="center">Off Campus</h1>
	</div>
	
	<div class="row">
    	<div class="col-margin fill"></div>
		<div class="col-5">
     		<div class="col-9">   
                <div class="col-margin fill"></div>
                <div class="col-65 horizontal_line">
                <img src="images/tbell.png">
                <br>
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
             <div class="col-1 fill"></div>
	     <div class="col-2">
	        <div class="filter_box">
	        	<h4 class="filter">Filter:</h4>
				<form class="filter_list">
				  <input id="fastfood" type="radio" name="filter" value="fastfood" checked>
				  <label for="fastfood">Fast Food</label><br>
				  <input id="sitdown" type="radio" name="filter" value="sitdown">
				  <label for="sitdown">Sit-down Restraunts</label><br>
				  <input id="downtown" type="radio" name="filter" value="downtown">
				  <label for="downtown">Downtown</label><br>
                  <input id="popularrest" type="radio" name="filter" value="popularrest">
				  <label for="popularrest">Popular Restraunts</label><br>
				 
				</form>
	        </div>
	     </div>	
        <div class="col-margin fill"></div>
		</div>	
	  </div>		
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>