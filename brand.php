<?php

  require_once 'connect.inc.php';
  // include('connect.inc.php');

  // Step 2: Preform Database Query

  if (isset($_GET['brand'])) {
  $brand = $_GET['brand'];
  } else {
  	header("Location: http://kamkutz.com/idm232/IDM232_project/");
  }
  
  $query = "SELECT * FROM cars WHERE brand = '{$brand}' LIMIT 1";
  //  Select everything from cars where brand is what I got up top where the Limit is 1 so I only see 1 car at a time 

  $result = mysqli_query($connection, $query);
  // Check there are no errors with our SQL statement
  if (!$result) {
    die ("Database query failed.");
  }

	while ($row = mysqli_fetch_assoc($result)) {
	        $bg_picture = $row['bg_picture'];
	        $brand = $row['brand'];
	        $phrase_1 = $row['phrase_1'];
	        $phrase_2 = $row['phrase_2'];
	        // Want to see everything available? Uncomment these lines for some debug info:
	        // echo "<pre>";
	        // print_r($row);
	        // echo "</pre>";
	        	$url_page_1 = "company.php";
		$param_1   = $row['id'];

		$url_1 = rawurlencode($url_page_1);
		$url_1 .= "?" . "id=" . urlencode($param_1);
	};

	mysqli_free_result($result);


 ?>






<!DOCTYPE html>

<html class="<?php echo $bg_picture; ?> " lang="en">
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
	

	

	<body class="">

			<div class="header_1">
				<div class="title">
					<h1 class="brand_title"> <?php echo $brand; ?></h1>
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
					<a class="nav" href="<?php echo $url_1 ?>">Company</a>
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

					 // if (isset($phrase)) {
					 //      echo "<p class=\"brand_title\">" . $row['phrase_1'] . "<br>" . $row['phrase_2'] . "</p>" ;
					 //    } else {
					 //      echo "<p class=\"brand_title\">" . "</p>";
					 //    }	

				 ?>
					<p><?php echo $phrase_1; ?> <br> <?php echo $phrase_2; ?></p>
			</div>
    			
    			<?php mysqli_close($connection); ?>

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>