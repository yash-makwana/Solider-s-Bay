<?php

	global $con;

	$hostname = 'localhost'; 	// Host Name
	
	$user = 'root'; 			// username of host
	
	$password = ''; 			// password of host
	
	$dbname = 'soldiers_bay'; 			//database name
			
	$con =mysqli_connect($hostname,$user,$password,$dbname);
	if (mysqli_connect_errno())
	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		die();
  	}