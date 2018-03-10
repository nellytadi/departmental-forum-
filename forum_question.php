<?php
session_start();
if(!isset($_SESSION['matno'])){
  header('location:'."forum.php");
}
session_regenerate_id();

require 'inc/databaseconn.php';
if (isset($_POST['submit'])) {

	 $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
//$imageFileType holds the file extension of the file
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size !> 500kb
//if ($_FILES["image"]["size"] > 500000) {
  //  echo "Sorry, your file is too large.";
    //$uploadOk = 0;
//}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$upload=$_FILES["image"]["name"];
$question=$_POST['question'];
$questiontags=$_POST['questiontags'];
//implode() accepts returns a string from the elements of an array while explode() breaks a string into an array
$questiontags=implode(',', $_POST['questiontags']);
$submitted_time=date("Y-m-d H:i:s");
$matno=$_SESSION['matno'];

$matno=mysqli_real_escape_string($conn,$matno);
$matno=stripslashes($matno);
$query="INSERT INTO nacoss_forum_questions(question_id,username,question,submitted_time,question_tags,image) VALUES (null,'$matno','$question','$submitted_time','$questiontags','$upload')";
//$query_2="SELECT email FROM nacoss_forum_login WHERE matno != '$matno'";
if($result=mysqli_query($conn,$query)){
	/*$display=mysqli_query($conn,$query_2);
	while ($fetch=mysqli_fetch_array( )) {
		# code...
	}*/
	echo '<script>
	alert("Your question has been successfully submitted");
	window.location="forumpage2.php";
	</script>';
}
else{
	echo "string";
}
}
mysqli_close($conn);
?>