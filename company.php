<?php

  include('connect.inc.php');

  // Step 2: Preform Database Query
  $query = "SELECT * FROM cars";
  $result = mysqli_query($connection, $query);
  // Check there are no errors with our SQL statement
  if (!$result) {
    die ("Database query failed.");
  }

if (isset($_GET['description'])) {
	
}

 ?>


<!DOCTYPE html>
<html class="comp_bg" lang="en">
	<head>
		<meta name="viewport"
		content="initial-scale=1.0,
		width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<meta charset="UTF-8">
		<title>Sportscar Company</title>
	</head>
	
	<body>
		
		<div class="header_1">
			<div class="title">
				<h1 class="brand_title">Porsche 911 Turbo</h1>
			</div>
			<div class="left_nav">
				<a href="#">
					<img  class="left_arrow_s" src="graphics/left_arrow_s.png" alt="Left Arrow">
				</a>
			</div>
			<div class="right_nav">
				<a href="#">
					<img class="right_arrow_s" src="graphics/right_arrow_s.png" alt="Right Arrow">
				</a>
			</div>
		</div>

		<div class="header_desktop_1">
			<div class="home">
				<a class="nav" href="index.php">Home</a>
			</div>
			<div>
				<a class="nav" href="company.php">Company</a>
			</div>
			<div>					
				<a class="nav" href="videos.php">Videos</a>
			</div>
			<div>
				<a class="nav" href="pics.php">Pictures</a>
			</div>
			<div class="stats">
				<a class="nav" href="stats.php">Stats</a>
			</div>
		</div>

		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="index.php">Home</a>
		  <a href="company.php">Company</a>
		  <a href="videos.php">Videos</a>
		  <a href="pics.php">Pictures</a>
		  <a href="stats.php">Stats</a>
		</div>


		<div class="white_contain">
			<div class="white_box">
				<p>	Shaping the future of the sportscar this is the theme of Strategy 2025. At the heart of the strategy is our future product portfolio. The sportscar of the future will blend the history and values of the Porsche brand with innovative technologies, while at the same time ensuring sustainability. In achieving this, topics such as electromobility, digitalisation and connectivity will play an important role. Embracing these topics will allow us to shape the exclusive and sporty mobility of tomorrow. Nevertheless, with all the innovations and modifications in front of us, one thing remains constant: Anything that carries the Porsche crest will also feature the excellent quality that is synonymous with Porsche.</p>
			</div>
		</div>


		<div class="hamb_wrap">
			<span class="hamburger" onclick="openNav()"><!-- &#9776; -->
				<img src="graphics/hamburger.png" alt="Hamburger Menu">
			</span>
		</div>

		<div class="website">
			<div class="contain_web">
				<h5>Website</h5>
			</div>
		</div>

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>