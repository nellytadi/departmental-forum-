<?php
session_start();
if (!isset($_SESSION['username'])){
header("location:".'nacoss_adminlogin.php');
}
session_regenerate_id();


$idnumber=$_POST['idnumber'];
$password=$_POST['password'];

$hashed_password=password_hash($password,PASSWORD_BCRYPT,['cost'=>10]);

$email=$_POST['email'];
$fullname=$_POST['fullname'];
$status=$_POST['status'];
require 'inc/databaseconn.php';
$query_table="INSERT INTO nacoss_forum_login(id,matno,password,email,name,status,activitystate) VALUES (null,'$idnumber','$hashed_password','$email','$fullname','$status',1)";
$query_result=mysqli_query($conn,$query_table);
if ($query_result){
	echo '<script>
	alert("user has been successfully created");
window.location="nacoss_admin.php";

	</script>';
}
mysqli_close();
?>