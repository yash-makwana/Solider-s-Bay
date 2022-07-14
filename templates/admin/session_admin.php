<?php
				include('../db/dbconnect.php');
				session_start();
				if (isset($_POST['btnc'])) {
					
					$Username=$_POST['name'];
					$Password=$_POST['password'];
					
					$mysqli_result=mysqli_query($con,"SELECT * FROM admin  where email='$Username' and Password='$Password'");
					if(mysqli_num_rows($mysqli_result)==1){
						$_SESSION['Username']=$Username;
						header('location:profile2.php');
					}
				else{					
					header('location:co-admin.html');
					
					}
						
					}
				if (isset($_POST['LOGOUT'])) {
					session_unregister('Username');

				}

			?>