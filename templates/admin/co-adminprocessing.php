<?php
include("./db/dbconnect.php");

	$name=$_POST['sname'];
	$account=$_POST['account'];
	$achievements=$_POST['achievements'];
	$about=$_POST['about'];
	$category=$_POST['category'];
	$subcategory=$_POST['subcategory'];
	$pic=$_FILES['image']['name'];
	$target="pictures/";
	$target=$target . basename($_FILES['image']['name']);
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
	 {
		# code...
		//define the receiver of the email
$to = 'vicky21554@gmail.com';
//define the subject of the email
$subject = 'Test email'; 
//define the message to be sent. Each line should be separated with \n
$message = "Hello Admin!\n\nYou have a new soldier entry."; 
//define the headers we want passed. Note that they are separated with \r\n
$headers = "From: shashank21554@gmail.com\r\nReply-To: shashank21554@gmail.com";
//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed";
	
	}
	else{
		echo "oops something went wroong";
	}

	mysqli_query($con,"INSERT into coadmin(name,account,achievements,about,category,subcategory,pic) VALUES('$name','$account','$achievements','$about','$category','$subcategory','$pic')");
	// $result= mysqli_query($con,$query);
	// $rows=mysqli_affected_rows($con);
	// if($rows==1)
	// {
		
	header("location:co-admin.html");
	
?>