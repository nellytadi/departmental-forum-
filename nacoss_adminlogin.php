<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Computer science|Bingham</title>
      <link rel="stylesheet" href="material design lite/material.min (2).css">

      <script defer src="material design lite/material.min.js"></script>

    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- ANIMATE STYLE  -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- FLEXSLIDER STYLE  -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />

    <style type="text/css">
      
   .adjust {
        max-width: 600px;
        margin: 0 auto;
      }                               

      .adjust2{
        max-width: 600px;
        margin: 100px auto;

      }

      .adjust3{
        max-width: 600px;
        margin: 100px auto;
        display: none;
      }
#formpopup{
        max-width: 600px;
        margin: 100px auto;
        display: none;
      }
    </style>
</head>
<body>


    <!-- LOGO HEADER END-->
    <div class="menu-div">
  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <div class="pull-left">
<img style="height: 70px;" src = "assets/img/logo1.png" alt ="Bhu logo">
     
      </div> 
       <h4 class="navbar-brand"><b>BHU|Computer Science Department</b></h4> 
    </div>

     
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
    <ul class="nav navbar-nav navbar-right">
      <li class="active-link"><a href="index.php"><b>Home</b></a></li>
      <li><a href="forum.php"><b>Forum</b></a></li>
 
    </ul>
  </div>
  </div>
</div>
  </nav>
 
  </div>

   



	 				<div class= "container">
        <div class="adjust2">
	 				<div class="row">
	 				<div class="panel-heading">
	 					<h3 style="text-align: center;"><strong>BHU Admin| Computer Science Forum</strong></h3>
	 					<hr>	 					
	 				</div>
	 			<form class="form-horizontal" method="POST" action="nacoss_adminlogin2.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Username:</label>
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <input type="text" class="form-control" name="username" id="username" placeholder="admin username">
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