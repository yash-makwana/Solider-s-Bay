<!DOCTYPE html>
<html>
<head>
	

			<title>SOLDIER'S BAY</title>
	<!--bootstrap include-->
		<link rel="stylesheet" type="text/css" href="../../bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<script type="text/javascript" src="../../bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="../../bootstrap/jquery.min.js"></script>


		<link rel="stylesheet" type="text/css" href="../../css/coadmin1.css">	
		
		
	
		
	

</head>
<body>
		<!--navbar starts here!--> 
				<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="index.php"><span style="color:red; font-size:30px;  font-family:serif;">SOLDIER'S</span><span style="font-family:serif; color:white;"> BAY</span></a></li>
	  <!--used inline css-->
					
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        
        <li><a href="getuser.php" style="font-size: 20px;">List Of Solider's</a></li>
        <li><a href="message.php" style="font-size: 20px;">Message read</a></li>
        <li><a href="viewsubscription.php" style="font-size: 20px;">View Subscription</a></li>
        <li><a href="co-admin.html" style="font-size: 20px;">Add Solider</a></li>
        <li><a href="adminform.html" style="font-size: 20px;">Logout</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right col-md-3">
<form class="navbar-form navbar-right" action="https://google.com">
  
</form>
	  </ul>
    </div>
  </div>
</nav>

	<!-- tavle division starts here -->


		<div class="container-fluid">
	
		<div class="row">

		<!-- DESCRIPTION DIVISION -->
						<center>
							<h1>List of Subscription</h1>
						</center>
						<table class="table table-hover">
							<th>
								<td>ID</td>
								<td>Email's</td>

							</th>
						<?php
									
									
									include("db/dbconnect.php");
									$query='select * from subscribe';
									$query_get_user=mysqli_query($con,$query);
									$numrows=mysqli_num_rows($query_get_user);
									$c=0;
									for($c=0;$c<$numrows;$c++)
									{
										$row = mysqli_fetch_assoc($query_get_user);
										 $email= $row['email'];
										 $ID=$row['ID'];
										 echo "<tr>
													<td></td>
													<td>$ID</td>
													<td>$email</td>
												</tr>";
										}
									?>
						</table></center>
			</body>
	</html>
