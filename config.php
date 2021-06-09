<?php
	//Local Development Connection requirement
	$servername = "remotemysql.com";
	$username = "WP0BqJ4QBT";
	$password = "vrinda2169@";
	$dbname = "WP0BqJ4QBT";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
