
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
		<title>Sportscar Brand</title>
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
		
		<div class="hamb_wrap">
			<span class="hamburger" onclick="openNav()"><!-- &#9776; -->
				<img src="graphics/hamburger.png" alt="Hamburger Menu">
			</span>
		</div>

			<div class="graph_wrap">
				<div class="info_wrap">
					<div class="p_bar_2"></div>
					<div class="p_bar">
						<p>Porsche</p>
					</div>

					<div class="b_bar_2"></div>
					<div class="b_bar">
						<p>Bugatti</p>
					</div>
				</div>

				<ul class="skill-list">
					<p class="graph_text">Porsche 911 Turbo against Bugatti Veyron Super Sport (World Record Holder for Average Top Speed) in MPH</p>
				  <li class="skill_1">
				    <h3>268 mph</h3>
				    <progress class="skill-1" max="300" value="268">
				      <strong>Skill Level: 50%</strong>
				    </progress>
				  </li>
				  <li class="skill_2">
				    <h3>205 mph</h3>
				    <progress class="skill-2" max="300" value="205">
				      <strong>Skill Level: 75%</strong>
				    </progress>
				  </li>
					<div class="length">
						<div>
							<p>0</p>
						</div>
						<div class="end">
							<p>300</p>
						</div>
					</div>
					<div class="stat_info">
						<p>(Miles Per Hour)</p>
					</div>
				</ul>

				<ul class="skill-list">
				<p class="graph_text">Porsche 911 Turbo against Bugatti Veyron Super Sport in Acceleration Time</p>
				  <li class="skill_1">
				    <h3>0 to 60 mph (2.4s)</h3>
				    <progress class="skill-1" max="5" value="2.4">
				      <strong>Skill Level: 50%</strong>
				    </progress>
				  </li>
				  <li class="skill_2">
				    <h3>0 to 60 mph (2.5s)</h3>
				    <progress class="skill-2" max="5" value="2.5">
				      <strong>Skill Level: 75%</strong>
				    </progress>
				  </li>

					<div class="length">
						<div>
							<p>0</p>
						</div>
						<div class="end">
							<p>5</p>
						</div>
					</div>
					<div class="stat_info">
						<p>(Seconds)</p>
					</div>
				</ul>

				<ul class="skill-list">
					<p class="graph_text">Porsche 911 Turbo against Bugatti Veyron Super Sport in Power</p>
				  <li class="skill_1">
				    <h3>1199 hp</h3>
				    <progress class="skill-1" max="2000" value="1199">
				      <strong>Skill Level: 50%</strong>
				    </progress>
				  </li>
				  <li class="skill_2">
				    <h3>560 hp</h3>
				    <progress class="skill-2" max="2000" value="560">
				      <strong>Skill Level: 75%</strong>
				    </progress>
				  </li>
					<div class="length">
						<div>
							<p>0</p>
						</div>
						<div class="end">
							<p>2000</p>
						</div>
					</div>
					<div class="stat_info">
						<p>(Horsepower)</p>
					</div>
				</ul>
			</div>
		
		<div class="bottom_wrap">
			<h2 class="stat_title">Porsche Technical Stats</h2>
		</div>
		<div class="bottom_wrap">
			<div class="divider"></div>
		</div>

		<ul class="data">
			<li>Height: 1.30 m</li>
			<li>Width: 1.88 m</li>
			<li>Wheelbase: 2.45 m</li>
			<li>Length: 4.51 m</li>
			<li>Number of Cylinders: 6</li>
			<li>Permissible Gross Weight: 4431 lb</li>
			<li>Fuel Tank: 16.9 gal</li>
		</ul>

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>