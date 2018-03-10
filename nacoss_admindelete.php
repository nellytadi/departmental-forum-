<?php
session_start();
if (!isset($_SESSION['username'])){
header("location:".'nacoss_adminlogin.php');
}
session_regenerate_id();

$id=$_GET['id'];
require 'inc/databaseconn.php';
$query_table="UPDATE nacoss_forum_login SET activitystate=0 WHERE id='$id'";


$result=mysqli_query($conn,$query_table);
if($result){
	echo '<script>
	alert("user has been successfully Deleted");
window.location="nacoss_admin.php";

	</script>';
}

?>