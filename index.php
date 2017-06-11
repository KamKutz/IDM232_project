<?php

  require_once ('connect.inc.php');

  // Step 2: Preform Database Query
  $query = "SELECT * FROM cars";
  $result = mysqli_query($connection, $query);
  // Check there are no errors with our SQL statement
  if (!$result) {
    die ("Database query failed.");
  }

 ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport"
		content="initial-scale=1.0,
		width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<meta charset="UTF-8">
		<title>Sportscar Application Home</title>
	</head>
	
	<body>
		<h1 class="greet"> Pick Your <br> Luxury Car </h1>
		<h1 class="greet_big"> Pick Your Luxury Car </h1>
		<div class="wrapper">
			<div>
				<?php 

					while ($row = mysqli_fetch_assoc($result)) {

					$url_page = "brand.php";
					$param   = $row['id'];

					$url = rawurlencode($url_page);
					$url .= "?" . "id=" . urlencode($param);


					$build = "<a href=\"{$url}\">";
					$build .= "<figure class='shine'>" . '<img src="'.$row['brand_picture'].'">' . "<figcaption>" . $row['brand']  . "</figcaption>" . "</figure>";
					echo $build;

				};
				mysqli_free_result($result);
				?>
 <!-- 					<a href="brand.php?brand=">
						<figure class="shine">
							<img src="graphics/audi.png" alt="Audi Link">
							<figcaption> Audi </figcaption>
						</figure>
					</a> -->
			</div>

			  <?php mysqli_close($connection); ?>

	</body>
</html>