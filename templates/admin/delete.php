<?php
//db added//
include("./db/dbconnect.php");

$userid=$_GET['UID'];
$delete_query="DELETE FROM coadmin WHERE ID=$userid";
$query_res=mysqli_query($con,$delete_query);
if($query_res!=0)
{
	?>
	<script type="text/javascript">alert("user deleted");
	window.location="getuser.php";
	</script>
	<?php
}
else
{
	?>
	<script type="text/javascript">alert("Access denied");
	window.location="getuser.php";
	</script>
	<?php
}
?>