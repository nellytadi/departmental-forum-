
<?php

include ('inc/header.php');
?>
<div class="prefooter">
     <div class="container " >
             <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-12 set-div">
                <div class="just-txt-div text-center">
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$message=$_POST['message'];

  require 'inc/databaseconn.php';
$query="INSERT INTO nacoss_contact(id,name,email,phonenumber,message) VALUES(null,'$name','$email','$phonenumber','$message')";
if($result= mysqli_query($conn,$query) ){
echo 'your message has been sent ';
}
else{
	echo "failure in sending";
}
$to='nacoss@binghamuniversity.edu.ng';
$subject='message from nacoss website';
$message1=$message;
mail($to, $subject,$message1);

$to2=$email;
$subject2='Message from NACOSS Bingham University';
$message2='Thanks for contacting us. We would get back to you as soon as possible';
mail($to2, $subject2, $message2);
?>

</div>
</div>
</div>
</div>
<?php
include ('inc/footer.php');
?>