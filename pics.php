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
	        $brand = $row['brand'];
	        $pic_1 = $row['picture_1'];
	        $pic_2 = $row['picture_2'];
	        $pic_3 = $row['picture_3'];
	        $pic_4 = $row['picture_4'];	
	        $pic_5 = $row['picture_5'];
	        $pic_6 = $row['picture_6'];	        	                	        
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
		<title>Sportscar Pictures</title>
	</head>
	
	<body>

		<div id="popup1" class="overlay">
			<div class="popup">
				<a class="close" href="#">&times;</a>
				<div class="contain_arrows">
					<a href="#popup6">
						<div class="left_next"> 
							<img src="graphics/left_arrow_p.png" alt="Left Arrow">
						</div>
					</a>
					<a href="#popup2">
						<div class="right_next">
							<img src="graphics/right_arrow_p.png" alt="Right Arrow">
						</div>
					</a>
				</div>
				<img src="<?php echo $pic_1; ?>" alt="Porsche Picture">
			</div>
		</div>

		<div id="popup2" class="overlay">
			<div class="popup">
				<a class="close" href="#">&times;</a>
				<div class="contain_arrows">
					<a href="#popup1">
						<div class="left_next"> 
							<img src="graphics/left_arrow_p.png" alt="Left Arrow">
						</div>
					</a>
					<a href="#popup3">
						<div class="right_next">
							<img src="graphics/right_arrow_p.png" alt="Right Arrow">
						</div>
					</a>
				</div>
				<img src="<?php echo $pic_2; ?>" alt="Porsche Picture">
			</div>
		</div>

		<div id="popup3" class="overlay">
			<div class="popup">
				<a class="close" href="#">&times;</a>
				<div class="contain_arrows">
					<a href="#popup2">
						<div class="left_next"> 
							<img src="graphics/left_arrow_p.png" alt="Left Arrow">
						</div>
					</a>
					<a href="#popup4">
						<div class="right_next">
							<img src="graphics/right_arrow_p.png" alt="Right Arrow">
						</div>
					</a>
				</div>
				<img src="<?php echo $pic_3; ?>" alt="Porsche Picture">
			</div>
		</div>

		<div id="popup4" class="overlay">
			<div class="popup">
				<a class="close" href="#">&times;</a>
				<div class="contain_arrows">
					<a href="#popup3">
						<div class="left_next"> 
							<img src="graphics/left_arrow_p.png" alt="Left Arrow">
						</div>
					</a>
					<a href="#popup5">
						<div class="right_next">
							<img src="graphics/right_arrow_p.png" alt="Right Arrow">
						</div>
					</a>
				</div>
				<img src="<?php echo $pic_4; ?>" alt="Porsche Picture">
			</div>
		</div>

		<div id="popup5" class="overlay">
			<div class="popup">
				<a class="close" href="#">&times;</a>
				<div class="contain_arrows">
					<a href="#popup4">
						<div class="left_next"> 
							<img src="graphics/left_arrow_p.png" alt="Left Arrow">
						</div>
					</a>
					<a href="#popup6">
						<div class="right_next">
							<img src="graphics/right_arrow_p.png" alt="Right Arrow">
						</div>
					</a>
				</div>
				<img src="<?php echo $pic_5; ?>" alt="Porsche Picture">
			</div>
		</div>

		<div id="popup6" class="overlay">
			<div class="popup">
				<a class="close" href="#">&times;</a>
				<div class="contain_arrows">
					<a href="#popup5">
						<div class="left_next"> 
							<img src="graphics/left_arrow_p.png" alt="Left Arrow">
						</div>
					</a>
					<a href="#popup1">
						<div class="right_next">
							<img src="graphics/right_arrow_p.png" alt="Right Arrow">
						</div>
					</a>
				</div>
				<img src="<?php echo $pic_6; ?>" alt="Porsche Picture">
			</div>
		</div>





		
		<div class="header_1">
			<div class="title">
				<h1 class="brand_title"><?php echo $brand; ?></h1>
			</div>
			<div class="left_nav">
				<a href="pics.php?id=<?php echo $id-1; ?>">
					<img  class="left_arrow_s" src="graphics/left_arrow_s.png" alt="Left Arrow">
				</a>
			</div>
			<div class="right_nav">
				<a href="pics.php?id=<?php echo $id+1; ?>">
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

		<div class="pic_wrap">
			<div>
				<a href="#popup1">
					<img class="pic1" src="<?php echo $pic_1; ?>" alt="Porsche Pic-1">
				</a>
			</div>
			<div>
				<a href="#popup2">
					<img class="pic2" src="<?php echo $pic_2; ?>" alt="Porsche Pic-2">
				</a>
			</div>
			<div>
				<a href="#popup3">
					<img class="pic3" src="<?php echo $pic_3; ?>" alt="Porsche Pic-3">
				</a>
			</div>
			<div>
				<a href="#popup4">
					<img class="pic4" src="<?php echo $pic_4; ?>" alt="Porsche Pic-4">
				</a>
			</div>
			<div>
				<a href="#popup5">
					<img class="pic5" src="<?php echo $pic_5; ?>" alt="Porsche Pic-5">
				</a>
			</div>
			<div>
				<a href="#popup6">
					<img class="pic6" src="<?php echo $pic_6; ?>" alt="Porsche Pic-6">
				</a>
			</div>
		</div>

		<?php mysqli_close($connection); ?>

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>