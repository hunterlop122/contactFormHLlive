<?php
$servername = "localhost";
	$username = "root";
	$password = "root";
	$mydb = "formC";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $mydb);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}



?>