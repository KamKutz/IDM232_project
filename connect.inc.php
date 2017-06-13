<?php

// $host = $_SERVER['HTTP_HOST'];
// if ($host == 'localhost') {
//   // Local database credentials
//   $dbhost = "localhost";
//   $dbuser = "root";
//   $dbpass = "root";
//   $dbname = "idm232_project";
// }
// else {
//   // Remote database credentials
//   $dbhost = "kamkutz.com";
//   $dbuser = "kamkutzc_idm232";
//   $dbpass = "1@-gv2U0@G](";
//   $dbname = "kamkutzc_idm232";
// }

// $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// if (mysqli_connect_errno()) {
//   die("Database connection failed: " .
//     mysqli_connect_error() .
//     " (" . mysqli_connect_errno() . ")"
//   );
// }













  // Step 1: Create Database Connection
  $dbhost = "kamkutz.com";
  $dbuser = "kamkutzc_idm232";
  $dbpass = "1@-gv2U0@G](";
  $dbname = "kamkutzc_idm232";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
?>