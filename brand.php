<?php

  require_once 'connect.inc.php';
  // include('connect.inc.php');

  // Step 2: Preform Database Query

  //   if (isset($_GET['bg_picture'])) {
  //   $class = $_GET['bg_picture'];
  // }

  //    if (isset($_GET['phrase_1'])) {
  //   $phrase = $_GET['phrase_1'];
  //   $phrase .= $_GET['phrase_2'];
  // }

  if (isset($_GET['brand'])) {
  $brand = $_GET['brand'];
  } else {
  	header("Location: http://kamkutz.com/idm232/IDM232_project/");
  }
  
  $query = "SELECT * FROM cars WHERE brand = '{$brand}' LIMIT 1";

  $result = mysqli_query($connection, $query);
  // Check there are no errors with our SQL statement
  if (!$result) {
    die ("Database query failed.");
  }

	while ($row = mysqli_fetch_assoc($result)) {
		 echo $row['brand'];
		 echo $row['class'];
		 echo $row['phrase'];
	};
 ?>





<!DOCTYPE html>

<?php  
    if (isset($class)) {
      echo "<html class=\"$class\" lang=\"en\">";
    } else {
      echo "<html lang=\"en\">";
    }
// <html class=\"$class\" lang="en">
?>
	<head>
		<meta name="viewport"
		content="initial-scale=1.0,
		width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<meta charset="UTF-8">
		<title>Sportscar Brand</title>
	</head>
	
	<body>
			<div class="header_1">
				<div class="title">
					<?php 

					    if (isset($brand)) {
					      echo "<h1 class=\"brand_title\">" . $row['brand'] . "</h1>" ;
					    } else {
					      echo "<h1 class=\"brand_title\">" . "</h1>";
					    }	

					 ?>
					<!-- 	<h1 class="brand_title">Porsche 911 Turbo</h1> -->
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
					<a class="nav" href="company.php?description=<?php echo $brand; ?>">Company</a>
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
			
			<div class="hamb_wrap">
				<span class="hamburger" onclick="openNav()"><!-- &#9776; -->
					<img src="graphics/hamburger.png" alt="Hamburger Menu">
				</span>
			</div>

			<div class="slogan">
				<?php 

					 if (isset($phrase)) {
					      echo "<p class=\"brand_title\">" . $row['phrase_1'] . "<br>" . $row['phrase_2'] . "</p>" ;
					    } else {
					      echo "<p class=\"brand_title\">" . "</p>";
					    }	

				 ?>
					<!-- <p>Shaping the future of the <br> sportscar, Strategy 2025</p> -->
			</div>


		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>