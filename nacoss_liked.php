<?php
session_start();
if(!isset($_SESSION['matno'])){
  header('location:'."forum.php");
}
session_regenerate_id();
require 'inc/databaseconn.php';

$matno=$_SESSION['matno'];
$answerid=$_POST['answerid'];
$liked=$_POST['liked'];
$action='liked';

$query=mysqli_query($conn,"SELECT * FROM nacoss_likeanddislike WHERE answer_id='$answerid' AND username='$matno'") or die();
$result=mysqli_num_rows($query);
if ($result==0)
{
$query_table="INSERT INTO nacoss_likeanddislike (answer_id,username,likes,action) VALUES ('$answerid','$matno','$liked','$action')";
$query_result=mysqli_query($conn,$query_table);	
}
else if ($result > 0) {
$query_table2="UPDATE nacoss_likeanddislike SET dislikes = 0, likes = 1, action= '$action' WHERE answer_id='$answerid' AND username='$matno'";
$query_result2=mysqli_query($conn,$query_table2);	
}
else{
	echo 'failed'.mysqli_errno();
}
mysqli_free_result($query);
mysqli_close($conn);
?>