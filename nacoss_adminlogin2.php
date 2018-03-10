<?php
session_start();
require 'inc/databaseconn.php';

$username=$_POST['username'];
$username=strtoupper($username);
$password=$_POST['password'];
$username=mysqli_escape_string($conn,$username);
$password=mysqli_escape_string($conn,$password);
$username=stripslashes($username);
$password=stripslashes($password);

$query="SELECT * FROM nacoss_admin WHERE username='$username' AND activitystate=1";
$result=mysqli_query($conn,$query);


if ($display=mysqli_num_rows($result)) {

		$_SESSION['username']=$username;
   header("location:".'nacoss_admin.php');
	}
	else{
 
   header("location:".'nacoss_adminlogin.php');
	}



mysqli_close($conn);

?>
