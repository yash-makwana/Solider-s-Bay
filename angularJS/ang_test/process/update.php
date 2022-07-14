<?php
	include("dbconnect.php");

	$_POST=json_decode(file_get_contents('php://input'),true);

	$ID=$_POST['ID'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
		$query= "UPDATE ang set name= '$name',email='$email',password='$password' WHERE ID='$ID'";
	$result= mysqli_query($con,$query);
	$rows=mysqli_affected_rows($con);

	echo $json_response=json_encode($rows);
?>