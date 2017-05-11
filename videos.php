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
				<a class="nav" href="index.html">Home</a>
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
		  <a href="index.html">Home</a>
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

		<div class="contain_vid">
			<div>
				<h3> Porsche 911 Turbo Review</h3>
				<iframe src="https://www.youtube.com/embed/kFKMPTIa3OI?ecver=2"></iframe>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dolorem quas quidem laborum non! Porro voluptate possimus nulla aspernatur doloribus harum. Autem doloribus quaerat impedit at, reiciendis ab eum, aperiam?</p>
			</div>
			<div>
				<h3> Porsche 911 Turbo Review</h3>
				<iframe src="https://www.youtube.com/embed/tD5iy5Zrg7o?ecver=2"></iframe>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dolorem quas quidem laborum non! Porro voluptate possimus nulla aspernatur doloribus harum. Autem doloribus quaerat impedit at, reiciendis ab eum, aperiam?</p>
			</div>
		</div>



		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>