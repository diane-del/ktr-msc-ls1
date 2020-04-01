<?php 

	$servername = "remotemysql.com:3306";
	$dbName = "L9TOGSYsOs";
	$username = "L9TOGSYsOs";
	$password = "XyD7col6OI";


	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";


?>