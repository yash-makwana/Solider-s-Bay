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
        <li><a href="logout.php" style="font-size: 20px;">Logout</a></li>
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
							<h1>List of Soldiers</h1>
						</center>
			
						<?php
									
									
									include("db/dbconnect.php");
									$query='select * from coadmin';
									$query_get_user=mysqli_query($con,$query);
									$numrows=mysqli_num_rows($query_get_user);
									$c=0;
									for($c=0;$c<$numrows;$c++)
									{
										$row = mysqli_fetch_assoc($query_get_user);
										 $name= $row['name'];
										 $account= $row['account'];
										 $achievements= $row['achievements'];
										 $category=$row['category'];
										 $about= $row['about'];
										 $ID=$row['ID'];

										echo "
												
											<div class='col-sm-12' id='DESCRIPTION'>
			
						<table class='table table-stripped'>
						<th>
						<td>
						<form class='form'>
						<ul>
						<li>
							<label for='name'>Enter Soldiers Name</label>
							<input type='name' value='$name' maxlength='50'>
							<span><B>Enter full name of soldier</B></span>
						</li>
						<li>
							<label for='about'>about us</label>
							<input type='name' value='$about' maxlength='50'>
							<span><B>about</B></span>
						</li>
						<li>
							<label for='Account_no'><B>Account Number</B></label>
							<input type='Account' value='$account' maxlength='205'>
							<span>Enter soldiers Account Number</span>

						</li>
						<center><a class='btn btn-success btn-md' href='updateuser.php?UID=$ID'>Update</a></center>
					</ul>
					</td>
					</form>
								<td><form class='form'>
						<ul>
						<li>
							<label for='name'>Achievements of soldier</label>
							<input type='name' value='$achievements' maxlength='205'>
							<span><B>Achievements of soldier</B></span>
						</li>
						<li>
							<label for='Account_no'><B>The Category</B></label>
							<input type='Account' value='$category' maxlength='205'>
							<span>The Category</span>
						</li>
						<li>
						
								<center><a class='btn btn-danger btn-md' href='delete.php?UID=$ID'>Delete</a></center>
						</li>
						</ul>
							</td>
							</form>

						</td>
								
								
							</th>
							</table>

			</div>";
		}

		?>	






		</div>
		</div>	

</body>
</html>
