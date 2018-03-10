<?php
session_start();
if (!isset($_SESSION['username'])){
header("location:".'nacoss_adminlogin.php');
}
session_regenerate_id();


?>
<!DOCTYPE html>
<html>
<head>
	<title>BHU|nacoss admin</title>
	<script type="text/javascript">

		function formPop(){
			document.getElementById("formpopup").style.display="block";

		}
		function formClose(){
			document.getElementById("formpopup").style.display="none";

		}
		function validate(){
		
			
		}
		function prompting(){


		}

	</script>

</head>
<body>
<?php
include ('inc/adminheader.php');


require 'inc/databaseconn.php';
$query_table="SELECT * FROM nacoss_forum_login WHERE activitystate=1";
$query_result=mysqli_query($conn,$query_table);
if($query_result){
	echo '<div class="adjust">
                       <div class="pull-left">
      <br><br>                 


<button class= "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="formPop()">Create New User</button>


                       </div>
                       <p>
                       <div class="pull-right">
      <a href="nacoss_upload.php"> <button class= "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >upload users from excel</button></a>
       </div>
<br><br>
                      <div class="panel-body">
                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table_id">
                          
                           <thead>
    <tr>
			<th>
				ID
			</th> 
			<th>
			 MATRIC/STAFF NUMBER
			</th> 
			<th>
			EMAIL
			</th>			
			<th>
			NAME
			</th>			
			<th>
			USER TYPE
			</th>
			<th>
			DELETE
		</th>
	</tr>';
	while ($query_fetch=mysqli_fetch_array($query_result,MYSQLI_ASSOC)){
		echo '<tbody>
                   <tr>
          <td>'.$query_fetch['id'].'</td>
		<td>'.$query_fetch['matno'].'</td>
		<td>'. $query_fetch['email'].'</td>
		<td>'.$query_fetch['name'].'</td>
		<td>'.$query_fetch['status'].'</td>
		<td><a href="nacoss_admindelete.php?id='.$query_fetch['id'].'"><button class= "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="prompting();">delete user</button></a></td>
		<tr>
	</tbody>';
           } 
            echo '</table></div></div></div>';
        }
        mysqli_close($conn);

?>

<form action="nacoss_admincreate.php" method="POST" id="formpopup" onsubmit="return validate()">
<div class="text-right">
<span><h3 onclick="formClose()"><i class="fa fa-close"></i></h3></span></div>
	<div class="form-group">
	<div class="col-lg-3">
	<label for="name">Full Name:</label>
	</div>
	<div class="col-lg-9">
	<input type="text" name="fullname" id="fullname" class="form-control">
	</div>
	</div>
	<br>
	<div class="form-group">
	<div class="col-lg-3">
	<label for="name">ID Number:</label>
	</div>
	<div class="col-lg-9">
	<input type="text" name="idnumber" class="form-control">
	</div>
	</div>
	<div class="form-group">
	<div class="col-lg-3">
	<label for="email">Email:</label>
	</div>
	<div class="col-lg-9">
	<input type="email" name="email" id="email" class="form-control">
	</div>
	</div>
	<div class="form-group">
	<div class="col-lg-3">
	<label for="status">Select Status:</label>
	</div>
	<div class="col-lg-9">
	<select class="form-control" name="status" id="status">
		<option name="select"></option>
		<option name="student">Student</option>
		<option name="staff">Staff</option>
		<option name="other">Other</option>
	</select>
	</div>
	</div>
	<div class="form-group">
	<div class="col-lg-3">
	<label for="password">Enter Password:</label>
	</div>
	<div class="col-lg-9">
	<input type="password" id="password" name="password" class="form-control">
	</div>
	</div>
	<hr>
	<div class="form-group">
	<div class="col-lg-3">
	<label for="password">Re-Enter Password:</label>
	</div>
	<div class="col-lg-9">
	<input type="password" name="password" id="repassword" class="form-control" placeholder="please re-enter password">
	</div>
	</div>
	<br><br>
	<div class="text-center">
<input type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
	</div>


</form>


</body>
</html>
