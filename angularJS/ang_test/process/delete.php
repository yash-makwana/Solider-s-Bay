<?php
//db added//
include("dbconnect.php");
//now using post//
$_POST=json_decode(file_get_contents('php://input'),true);
$ID=$_POST['ID'];
$query="DELETE FROM ang WHERE ID=$ID";
$result= mysqli_query($con,$query);
	$rows=mysqli_affected_rows($con);
	echo $json_response=json_encode($rows);
?>