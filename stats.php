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
	        $stat_1 = $row['stat_1'];
	        $stat_2 = $row['stat_2'];
	        $stat_3 = $row['stat_3'];	   
	        $value_1 = $row['stat_1_value'];
	        $value_2 = $row['stat_2_value'];
	        $value_3 = $row['stat_3_value'];
	        $height = $row['height'];	   
	        $width = $row['width'];
	        $wheelbase = $row['wheelbase'];
	        $length = $row['length'];
	        $cylinders = $row['cylinders'];	   
	        $weight = $row['weight'];	   
	        $fuel = $row['fuel'];
	        $color = $row['color'];	
	        $color_2 = $row['color_2'];		   
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
		<title>Sportscar Brand</title>
	</head>
	
	<body>
		
		<div class="header_1">
			<div class="title">
				<h1 class="brand_title"><?php echo $brand; ?></h1>
			</div>
			<div class="left_nav">
				<a href="stats.php?id=<?php 
					if ($id > 1) {
						echo $id-1;
					}	elseif ($id==1) {
						echo 8;
					}	else {
						echo $id;
					}; 
				?>">
					<img  class="left_arrow_s" src="graphics/left_arrow_s.png" alt="Left Arrow">
				</a>
			</div>
			<div class="right_nav">
				<a href="stats.php?id=<?php 
					if ($id < 8) {
						echo $id+1;
					}	elseif ($id==8) {
						echo 1;
					}	else {
						echo $id;
					}; 
				?>">
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

			<div class="graph_wrap">
				<div class="info_wrap">
					<div class="<?php echo $color; ?>"></div>
					<div class="p_bar">
						<p><?php echo $brand; ?></p>
					</div>

					<div class="b_bar_2"></div>
					<div class="b_bar">
						<p>Bugatti</p>
					</div>
				</div>

				<ul class="skill-list">
					<p class="graph_text"><?php echo $stat_1; ?></p>
				  <li class="skill_1">
				    <h3>268 mph</h3>
				    <progress class="skill-1" max="300" value="268">
				      <strong>Skill Level: 50%</strong>
				    </progress>
				  </li>
				  <li class="<?php echo $color_2; ?>">
				    <h3><?php echo $value_1; ?> mph</h3>
				    <progress class="skill-2" max="300" value="<?php echo $value_1; ?>">
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
				<p class="graph_text"><?php echo $stat_2; ?></p>
				  <li class="skill_1">
				    <h3>0 to 60 mph (2.40s)</h3>
				    <progress class="skill-1" max="5" value="2.4">
				      <strong>Skill Level: 50%</strong>
				    </progress>
				  </li>
				  <li class="<?php echo $color_2; ?>">
				    <h3>0 to 60 mph (<?php echo $value_2; ?>s)</h3>
				    <progress class="skill-2" max="5" value="<?php echo $value_2; ?>">
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
					<p class="graph_text"><?php echo $stat_3; ?></p>
				  <li class="skill_1">
				    <h3>1199 hp</h3>
				    <progress class="skill-1" max="2000" value="1199">
				      <strong>Skill Level: 50%</strong>
				    </progress>
				  </li>
				  <li class="<?php echo $color_2; ?>">
				    <h3><?php echo $value_3; ?> hp</h3>
				    <progress class="skill-2" max="2000" value="<?php echo $value_3; ?>">
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
			<li>Height: <?php echo $height; ?></li>
			<li>Width: <?php echo $width; ?></li>
			<li>Wheelbase: <?php echo $wheelbase; ?></li>
			<li>Length: <?php echo $length; ?></li>
			<li>Number of Cylinders: <?php echo $cylinders; ?></li>
			<li>Permissible Gross Weight: <?php echo $weight; ?></li>
			<li>Fuel Tank: <?php echo $fuel; ?></li>
		</ul>

		<?php mysqli_close($connection); ?>

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>