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
	<div class="focus">
    	<img alt="" src="" />
	</div>
	<div class="buttonbar">
	</div>
	<div class="breadcrumbs">
		<a href="index.php">HOME</a> </a> > <a class="active" href="calendar_month.php">Faculty</a>
	</div>	
	<div class="row">
		<h1 class="center">Faculty</h1>
	</div>
	<div class="row">
		<div class="col-3 topfilters">
			<ul class="cal_filter wider">
				<a href="#/" class="active"><li>Alphebetical</li></a>
				<a href="#/"><li>Department</li></a>
			</ul>
		</div>
	</div>
	</div>		
	<div class="row">
    	<div class="col-margin fill"></div>
        <div class="col-0">
	        <div class="alphabet_list">
				<form class="filter_list nobox">
				  <input id="allevents" type="radio" name="filter" value="allevents">
				  <label for="allevents">A</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
				  <label for="academic">B</label><br>
				  <input id="alumni" type="radio" name="filter" value="alumni">
				  <label for="alumni">C</label><br>
				  <input id="campus" type="radio" name="filter" value="campus">
				  <label for="campus">D</label><br>
				  <input id="community" type="radio" name="filter" value="community">
				  <label for="community">E</label><br>
				  <input id="meetings" type="radio" name="filter" value="meetings">
				  <label for="meetings">F</label><br>
				  <input id="athletics" type="radio" name="filter" value="athletics">
				  <label for="athletics">G</label><br>
				  <input id="students" type="radio" name="filter" value="students">
				  <label for="students">H</label><br>
				  <input id="asc" type="radio" name="filter" value="asc">
				  <label for="asc">I</label><br>
				  <input id="faculty" type="radio" name="filter" value="faculty">
				  <label for="faculty">J</label><br>
				  <input id="cable" type="radio" name="filter" value="ferriscable">
				  <label for="cable">K</label><br>
				  <input id="culture" type="radio" name="filter" value="culture">
				  <label for="culture">L</label><br>
				  <input id="online" type="radio" name="filter" value="online">
				  <label for="online">M</label><br>
				  <input id="williams" type="radio" name="filter" value="williams">
				  <label for="williams">N</label><br>
				  <input id="emeriti" type="radio" name="filter" value="emeriti">
				  <label for="williams">O</label><br>
				  <input id="emeriti" type="radio" name="filter" value="williams">				  
                  <label for="allevents">P</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">		
                  <label for="allevents">Q</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
                  <label for="allevents">R</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
                  <label for="allevents">S</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">	
                  <label for="allevents">T</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
                  <label for="allevents">U</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
                  <label for="allevents">V</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
                  <label for="allevents">W</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
                  <label for="allevents">X</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
                  <label for="allevents">Y</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
                  <label for="allevents">Z</label><br>
				  <input id="academic" type="radio" name="filter" value="academic">
                  	</form>
	        </div>
	     </div>
          <div class="col-2 scroll_box">
         <ul>
         <li>Stephen Allie</li>
         <li>Derek Ameel</li>
         <li>Billie Anderson</li>
         <li>Lori Armstrong</li>
         <li>Lawrence Bajor</li>
         <li>Barbra McNamara</li>
         <li>Robin Barraco</li>
         <li>Patrick Bishop</li>
         <li>Doug Blakemore</li>
         <li>Felix Bollou</li>
         <li>Trudy Borst</li>
         <li>Lynn Bowen</li>
         <li>Mark Brandly</li>
         <li>Lianne Briggs</li>
         <li>Timothy Brotherton</li>
         <li>Cathering Browers</li>
         <li>David Brown</li>
         <li>Maggie Brown</li>
         <li>Amy Buse</li>
         <li>Lewis Butler</li>
         <li>Linda Butler</li>
         </ul>
         </div>
         <div class="col-1 fill"></div>
		<div class="col-4">
<img src="images/trudy.jpg" alt="Trudy Borst" class="weekday max">
<h2>TRUDY BORST</h2>
                            <p>OFFICE: IRC 222</p>
                            <p>AVALIABLE: MON & WED 3:00-5:00</p>
                        
<p class="event_headline">Finance, Computer Information Systems</p>
			<div class="col-9 horizontal_line">
			</div>
            <div class="col-9 calendar_container">
            <div class="row">
     
        <div class="col-margin fill"></div>		
	</div>
	<div class="row">
		<div class="col-4">
		</div>
		<div class="col-5">
		</div>
	</div>	
  </div>
  <?php include("inc/btn.php"); ?>
  <?php include("inc/overlay.php"); ?>
  <?php include("js/scripts.php"); ?> 
</body>
</html>