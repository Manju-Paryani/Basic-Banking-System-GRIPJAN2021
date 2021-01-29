
<?php

// Development Connections
//$conn = mysqli_connect("localhost", "root", "", "bank");

//Remote Database connection
$conn = mysqli_connect("remotemysql.com", "XOBff6jh1u", "zLwpPRb8wj", "XOBff6jh1u");

if (!$conn) {
  die("Could not connect to the database due to the following error --> " . mysqli_connect_error());
}

?>
