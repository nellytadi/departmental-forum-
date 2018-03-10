<?php
session_start();
if(!isset($_SESSION['matno'])){
  header('location:'."forum.php");
}
session_regenerate_id();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>BHU|COMP.SC FORUM</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="nacoss, bhu, Bingham University Karu,Computer science" />
    <meta name="author" content="Nelly Tadi" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- Latest compiled and minified CSS -->

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

 <!-- java script and css for multiple selector
   <script src="assets/bootstrap-select/bootstrap-select-1.12.2/js/bootstrap-select.min.js"></script>
 
 <link rel="stylesheet" href="assets/bootstrap-select/bootstrap-select-1.12.2/css/bootstrap-select.min.css">
 <script src="assets/bootstrap-select/bootstrap-select-1.12.2/js/i18n/defaults-*.min.js"></script>-->

      <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header navbar-static-top">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    <span class="navbar-brand logo"> <img style="height: 60px;" src = "assets/img/logo1.png" alt ="Bhu logo"></span> 
      <h4 class="navbar-brand">BHU|Computer Science Forum</h4>  
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home</a></li>
        <li>
      <form class="navbar-form navbar-right" action="nacoss_search.php" method="GET">
    <div class="input-group">
    <input type="text" class="form-control" name="searchtag" placeholder="Search for questions using tags eg php mysql">
    <div class="input-group-btn">
      <button class="btn btn-default" name="submit" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
</li> 
        <li><a href="forum_logout.php">
        <span class="glyphicon glyphicon-log-out"></span>
        <strong>LOGOUT</strong></a></li> 
      </ul>
     
    </div>
  </div>
</nav>
<?php
if(isset($_GET['submit'])){
require 'inc/databaseconn.php';

$searchtag=$_GET['searchtag'];
$searchtag=mysqli_escape_string($conn,$searchtag);
$searchtag=stripslashes($searchtag);

$query="SELECT * FROM nacoss_forum_questions WHERE locate('$searchtag',question_tags)";

if($result= mysqli_query($conn,$query)){
echo '<h2>Questions with '.$searchtag.' tags</h2>';

while($row=mysqli_fetch_array($result,MYSQLI_NUM)){

 if($row==0){
   echo 'no Questions have been submitted with '.$searchtag.' tags';
}
else{
echo $row[1].' asked ';
echo '<b>'.$row[2].'</b><br>';
echo 'at '.$row[3].'<br>';
echo $row[4].'<br>';
}
}
}

}
mysqli_close($conn);
?>