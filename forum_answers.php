<?php
session_start();
if(!isset($_SESSION['matno'])){
  header('location:'."forum.php");
}
session_regenerate_id();


if(isset($_POST['submit']))
{
	require 'inc/databaseconn.php';
	$question_id= $_POST['question'];
    $answer_given = $_POST['answer'];

    $answer_given=mysqli_escape_string($conn,$answer_given);
    $answer_given=stripslashes($answer_given);
    $submitted_time=date("Y-m-d H:i:s");
    $matno=$_SESSION['matno'];


  $query="INSERT INTO nacoss_forum_answers(answer_id,username,question_id,answer_given,submitted_time) VALUES (null,'$matno','$question_id','$answer_given','$submitted_time')" or die("error connecting to the database".mysqli_error());
if($result=mysqli_query($conn,$query))
{

	echo '<script>
	alert("Your question has been successfully submitted");
	window.location="forumpage2.php";
	</script>';
}
}
else{
	echo 'nothing was submitted';
}
mysqli_close($conn);

?>
