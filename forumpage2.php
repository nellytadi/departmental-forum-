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
  <script src="bootstrap-3.3.7-dist/jquery.js"></script>
    <!-- FONT AWESOME STYLE  -->
    <link href="bootstrap-3.3.7-dist/css/font-awesome.css" rel="stylesheet" />
    <!-- ANIMATE STYLE  -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- FLEXSLIDER STYLE  -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" />
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />

<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<style type="text/css">
  .formex{
    display: none;
  }
      #image{
        height:150px;
        width: 150px;
    }
     
  
</style>


<body>
 <div class="menu-div" style="background:#f0eff7;">
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
       <h4 class="navbar-brand"><b>BHU|Computer Science Forum</b></h4>
    </div>



     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

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
        <li><a href="forum_logout.php"><span class="glyphicon glyphicon-log-out"></span><strong>LOGOUT</strong></a></li>
      </ul>


</div>
  </nav>

  </div>


<div class ="col-lg-12 col-sm-12">
<div class="col-lg-12 col-sm-6">
      <div class="panel-heading">
          <div class="text-center">
      		<h2>Bingham University Computer Science Department Forum</h2>
      	</div>
      </div>

      <div class="panel-body">
      This forum is for encouraging students in their academic pursuits in computer science department. All students and staff also are encouraged to participate by asking any kind of question especially questions related to Computer Science. All staff and students are also encourage to give answers to these questions to the best of thier ability. Thank you.
      </div>
</div>

<div class ="col-lg-6 col-sm-12">
          <div class="container">
              <div class="row">
              <div class="panel-heading">

<!-- Trigger the modal with a button
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> -->

                <form action="forum_question.php" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
                <label><h2 style="color:#373c50;">Submit Question:</h2></label>
                </div>
                  <div class="col-lg-6 col-sm-12">

          <input type="text" name="question"  id="question" class="form-control" >
                <h4>Select Question Tags:</h4> eg <span style="background-color: #b3c3f3;">php</span> <span style="background-color: #b3c3f3;">mysql</span> <span style="background-color: #b3c3f3;">java</span> <span style="background-color: #b3c3f3;">python</span> ( ctrl+click to select )
                <p>

                  <select class="selectpicker" multiple name="questiontags[]" style="height: 150px;" class="form-control">
            <option value="java">Java</option>
            <option value="c">C</option>
            <option value="c++">C++</option>
            <option value="c#">C#</option>
            <option value="php">PHP</option>
            <option value="laravel">Laravel</option>
            <option value="python">Python</option>
            <option value="django">Django</option>
            <option value="mysql">MySql</option>
            <option value="javascript">JavaScript</option>
            <option value="nodejs">Node JS</option>
            <option value="mongodb">MongoDB</option>
            <option value="angularjs">Angular JS</option>
            <option value="react">React</option>
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="bootstrap">Bootstrap</option>
            <option value="materialdesign">Material Design Lite</option>
            <option value="networking">Networking</option>
            <option value="graphicsdesign">Graphic Design</option>
            <option value="photoshop">Adobe Photoshop</option>
            <option value="prolog">Prolog</option>
            <option value="operatingsystem">Operating Systems</option>
            <option value="softwareengineering">Software Engineering</option>
            <option value="generalinformation">General information</option>

          </select>
          <input type="file" name="image" class="btn btn-info" value="add image">
                <p>
                 <div class="text-center">
                <input type="submit" name="submit" class="btn btn-info" >
                </div>
                </form>
                </div>
              </div>
          </div>
          </div>
</p>
<div class="col-lg-6 col-sm-12">
<div class="panel-heading">
<div class="text-center">
<h2>
Submitted Questions:
</h2>
</div>
</div>
<div class="scroller" style="overflow-x: scroll; height: 500px;">


<?php
require 'inc/databaseconn.php';

$query= "SELECT * FROM nacoss_forum_questions  ORDER BY question_id DESC LIMIT 5 ";
if($result= mysqli_query($conn,$query)){

$counting=0;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){

$question_id=$row['question_id'];
 echo '

<label> '.$question_id.' ';
  echo $row['username'].' <b>asked</b> ';
  echo $row['question'].'<br>';
  echo $row['submitted_time'].'<br>';
  echo $row['question_tags'].'<br>';
  if ($row['image']==0){
 echo '<img id="image" src=uploads/'.$row['image'].'>';
}
echo '</label>

  <br>
  <button class="btn btn-info" onclick="show(\'formex'.$counting.'\')"> Answer</button>
  <div id="formex'.$counting.'" class="formex">
  <div class="text-right">
<span><h3 onclick="hide(\'formex'.$counting.'\')"><i class="glyphicon glyphicon-remove"></i></h3></span></div>

 <form action="forum_answers.php" method="POST">

  <label>Enter Answer:</label>
  <input type="hidden" name="question" value="'.$question_id.'">

  <input type="text" name="answer" style="height: 70px;" class="form-control"><br>

  <div class="text-right">
  <input type="submit" name="submit" value="submit" class="btn btn-info">
  </div>

</form></div><p>';
//sumbit button should only appear when there is an answer to that question
$query_2=mysqli_query($conn,"SELECT * FROM nacoss_forum_answers WHERE question_id='$question_id'");
if($display_2=mysqli_num_rows($query_2)>=1)
{
echo '

  <form action="forum_submitted_answers.php" method="GET">
  <input type="hidden" name="question_id" value="'.$question_id.'">
  <input type="hidden" name="question" value="'.$row['question'].'">

  <input type="submit" name="submit" value= "submitted answers" class="btn btn-default btn-sm">

  </form>
';
}
else if ($display_2=mysqli_num_rows($query_2)==0) {
  echo '<p><b>No answers have been submitted</b></p>';
}

$counting++;

  }
}

?>
<div id="loadmore">

</div>
<div class="text-right">
<a onclick ="loadMore();">load more...</a>
</div>
</div>

 </div>

<?php
echo '
<script type="text/javascript">



function loadMore()
{
var ajax= new XMLHttpRequest();
ajax.open("POST","ajax2.php",true);
ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
ajax.onreadystatechange=function(){
if (ajax.status==200 && ajax.readyState==4) {
      document.getElementById("loadmore").innerHTML=ajax.responseText;
    }
  }
  ajax.send(question_id='.$question_id.');
}
</script>';
mysqli_close($conn);

?>
<script type="text/javascript">
  function show(elementId)
  {

   document.getElementById(elementId).style.display="block";
  }
  function hide(elementId){
    document.getElementById(elementId).style.display="none";
  }


	function validate(){
		if(document.getElementById('question').value=="")
		{
			alert("Please enter question!");
			return false;
		}
		return true;
	}

</script>

</body>
</html>
