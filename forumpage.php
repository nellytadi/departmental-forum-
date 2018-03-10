<?php
session_start();
require 'inc/databaseconn.php';

$matno=$_POST['matno'];
$matno=strtoupper($matno);
$password=$_POST['password'];
$matno=mysqli_escape_string($conn,$matno);
$password=mysqli_escape_string($conn,$password);
$matno=stripslashes($matno);
$password=stripslashes($password);

$query="SELECT * FROM nacoss_forum_login WHERE matno='$matno' AND activitystate=1";
$result=mysqli_query($conn,$query);

$display=mysqli_fetch_array($result,MYSQLI_BOTH);
if (password_verify($password,$display['password']))
{
	$_SESSION['matno']=$matno;
   header("location:".'forumpage2.php');
}
else{
	echo '<script>alert("wrong password or/and username");
	</script>';
	header("location:".'forum.php');
	}



mysqli_close($conn);

?>
