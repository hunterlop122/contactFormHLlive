<?php

	$servername = "localhost";
	$username = "sofritoa_hl";
	$password = "Welc0me16";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$db = "CREATE DATABASE sofritoa_hunterform";

	

	if ($conn->query($db) === TRUE) {
    	//echo "Database created successfully";
	} else {
		//Alert if database wasnt created 
    	//echo "Error creating database: " . $conn->error;
	}

	mysqli_close($conn);

	$mydb = "sofritoa_hunterform";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $mydb);
	
	// Check connection
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if(isset($db)){
		$tbdata = "CREATE TABLE dataC (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(20) NOT NULL,
		lastname VARCHAR(20) NOT NULL,
		email VARCHAR(40) NOT NULL,
		message TEXT NOT NULL)";

		$tblogin = "CREATE TABLE loginC (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(50) NOT NULL,
		password VARCHAR(50) NOT NULL)";

		if (mysqli_query($conn, $tbdata)) {
		    //echo "Table dataC created successfully";
		} else {
		   // echo "Error creating table: " . mysqli_error($conn);
		}

		if (mysqli_query($conn, $tblogin)) {
		   // echo "Table dataC created successfully";
		} else {
		  //  echo "Error creating table: " . mysqli_error($conn);
		}
	}

?>