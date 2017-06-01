<?php

  include('connect.inc.php');

  // Step 2: Preform Database Query
  $query = "SELECT * FROM cars";
  $result = mysqli_query($connection, $query);
  // Check there are no errors with our SQL statement
  if (!$result) {
    die ("Database query failed.");
  }

  if (isset($_GET['id'])) {
  $id = $_GET['id'];
  } else {
  	header("Location: http://kamkutz.com/idm232/IDM232_project/");
  }

  $query = "SELECT * FROM cars WHERE id = '{$id}' LIMIT 1";

	while ($row = mysqli_fetch_assoc($result)) {
	        $desc = $row['description'];
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
				<p><?php echo $desc; ?></p>
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

		<?php mysqli_close($connection); ?>

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>