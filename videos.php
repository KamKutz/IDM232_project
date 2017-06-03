<?php

  include('connect.inc.php');

  if (isset($_GET['id'])) {
  $id = $_GET['id'];
  } else {
  	header("Location: http://kamkutz.com/idm232/IDM232_project/");
  }

  // Step 2: Preform Database Query
  $query = "SELECT * FROM cars WHERE id = '{$id}' LIMIT 1";

  $result = mysqli_query($connection, $query);
    // Check there are no errors with our SQL statement

    if (!$result) {
    die ("Database query failed.");
  }

	while ($row = mysqli_fetch_assoc($result)) {
	        $vids_1 = $row['video_1'];
	        $vids_2 = $row['video_2'];
	        $brand = $row['brand'];
	        $review = $row['review'];
	        // Want to see everything available? Uncomment these lines for some debug info:
	        // echo "<pre>";
	        // print_r($row);
	        // echo "</pre>";
	        	$url_page_1 = "company.php";
		$param_1   = $row['id'];

		$url_1 = rawurlencode($url_page_1);
		$url_1 .= "?" . "id=" . urlencode($param_1);

	        	$url_page_2 = "videos.php";
		$param_2   = $row['id'];

		$url_2 = rawurlencode($url_page_2);
		$url_2 .= "?" . "id=" . urlencode($param_2);

		$url_page_3 = "pics.php";
		$param_3   = $row['id'];

		$url_3 = rawurlencode($url_page_3);
		$url_3 .= "?" . "id=" . urlencode($param_3);

		$url_page_4 = "stats.php";
		$param_4   = $row['id'];

		$url_4 = rawurlencode($url_page_4);
		$url_4 .= "?" . "id=" . urlencode($param_4);
	};

    	mysqli_free_result($result);

 ?>









<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport"
		content="initial-scale=1.0,
		width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<meta charset="UTF-8">
		<title>Sportscar Videos</title>
	</head>
	
	<body>
		
		<div class="header_1">
			<div class="title">
				<h1 class="brand_title"><?php echo $brand; ?></h1>
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
				<a class="nav" href="<?php echo $url_1; ?>">Company</a>
			</div>
			<div>					
				<a class="nav" href="<?php echo $url_2; ?>">Videos</a>
			</div>
			<div>
				<a class="nav" href="<?php echo $url_3; ?>">Pictures</a>
			</div>
			<div class="stats">
				<a class="nav" href="<?php echo $url_4; ?>">Stats</a>
			</div>
		</div>

		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="index.php">Home</a>
		  <a href="<?php echo $url_1; ?>">Company</a>
		  <a href="<?php echo $url_2; ?>">Videos</a>
		  <a href="<?php echo $url_3; ?>">Pictures</a>
		  <a href="<?php echo $url_4; ?>">Stats</a>
		</div>

		<div class="hamb_wrap">
			<span class="hamburger" onclick="openNav()"><!-- &#9776; -->
				<img src="graphics/hamburger.png" alt="Hamburger Menu">
			</span>
		</div>

		<div class="contain_vid">
			<div>
				<div class="h3_wrap">
					<h3><?php echo $review; ?></h3>
				</div>
				<iframe src="<?php echo $vids_1; ?>"></iframe>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dolorem quas quidem laborum non! Porro voluptate possimus nulla aspernatur doloribus harum. Autem doloribus quaerat impedit at, reiciendis ab eum, aperiam?</p>
			</div>
			<div>
				<div class="h3_wrap">	
					<h3><?php echo $review; ?></h3>
				</div>
				<iframe src="<?php echo $vids_2; ?>"></iframe>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dolorem quas quidem laborum non! Porro voluptate possimus nulla aspernatur doloribus harum. Autem doloribus quaerat impedit at, reiciendis ab eum, aperiam?</p>
			</div>
		</div>

		<?php mysqli_close($connection); ?>

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>