<?php
include("dbconnect.php");

	$_POST=json_decode(file_get_contents('php://input'),true);
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query=("INSERT into ang(name,email,password) VALUES('$name','$email','$password')");
	$result= mysqli_query($con,$query);
	$rows=mysqli_affected_rows($con);

	echo $json_response=json_encode($rows);
?>