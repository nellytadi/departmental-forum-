<?php
include ('inc/header.php');
?>



	 				<div class= "container">
        <div class="adjust2">
	 				<div class="row">
	 				<div class="panel-heading">
	 					<h3 style="text-align: center;"><strong>BHU| Computer Science Forum</strong></h3>
	 					<hr>	 					
	 				</div>
	 			<form class="form-horizontal" method="POST" action="forumpage.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Matric no:</label>
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <input type="text" class="form-control" name="matno" id="matno" placeholder="Matric number">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <input type="password" class="form-control" name= "password" id="password" placeholder="Password">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" value="submit" name="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
<?php
include ('inc/footer.php');

?>