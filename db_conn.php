<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "banking_system";

	$conn = mysqli_connect('localhost','root','root','banking_system');

	if(!$conn){
		die("Could not connect to the database - Error:  ".mysqli_connect_error());
	}

?>