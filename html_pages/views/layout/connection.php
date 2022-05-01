<?php
	//////////Establishing Database connection
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kponkius_dev";
	
	$connection = mysqli_connect($server, $username, $password, $dbname);
	
	if(!$connection){
		die("Awaiting Resources");
	}
?>