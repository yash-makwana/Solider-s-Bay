<!DOCTYPE html>
<html>
<head>
	<title>CONTACT US</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--bootstrap include-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="stylesheet" type="text/css" href="../css/cont.css">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script type="text/javascript" src="../bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="../bootstrap/jquery.min.js"></script>
		<!--Javascript for Google Map-->
		<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 95%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

</head>
<body>
	<center>
		<h1>LIST OF USERS</h1>
	</center>
	<table class="table table-stripped">
		<th> 
			
			
			<td>
				Name
			</td>
			<td>
				Email
			</td>
			<td>
				Phone
			</td>
			<td>
				City
			</td>
			<td>
				Message
			</td>
		</th>
		
		<?php
		 
     include("./db/dbconnect.php");
      $query='select * from messsage';
		 $query_message=mysqli_query($con,$query);
		 $numrows=mysqli_num_rows($query_message);
		 $c=0;
		 for($C=0;$c<$numrows;$c++)
		 {
		 	$row=mysqli_fetch_assoc($query_message);
		 	$Name=$row['Name'];
		 	$Email=$row['Email'];
		 	$Phone=$row['Phone'];
		 	$City=$row['City'];
		 	$Message=$row['Message'];
		 	$id=$row['ID'];

		 	echo "<tr>
		 	<td>$id</td>
		 	<td>$Name</td>
		 	<td>$Email</td>
		 	<td>$Phone</td>
		 	<td>$City</td>
		 	<td>$Message</td>
		 	
		 	
		 	</tr>";
		 }
		?>
			
		
	</table>
		
	

</body>
</html>