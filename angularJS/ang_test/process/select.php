<?php
	include("dbconnect.php");

	$data=array();
	$query = "SELECT * FROM ang ORDER BY ID DESC";
	$result=mysqli_query($con,$query);
	while($rows=mysqli_fetch_assoc($result))
	{
		$data[]=$rows;
	}
	

	echo $json_response=json_encode($data);
	?>