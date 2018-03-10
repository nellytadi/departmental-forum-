<?php
session_start();
if(!isset($_SESSION['matno'])){
  header('location:'."forum.php");
}
session_regenerate_id();
?>
<!DOCTYPE html>
<html>
<head>
  <title>BHU|COMP.SC FORUM</title>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="nacoss, bhu, Bingham University Karu,Computer science" />
    <meta name="author" content="Nelly Tadi" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- Latest compiled and minified CSS -->

    <!-- BOOTSTRAP CORE STYLE  -->

    <!-- FONT AWESOME STYLE  -->
    <link href="bootstrap-3.3.7-dist/css/font-awesome.css" rel="stylesheet" />
    <!-- ANIMATE STYLE  -->

    <!-- CUSTOM STYLE  -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" />
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />

<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>


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
<div class="col-lg-12 col-sm-12">
      <div class="panel-heading">
          <div class="text-center">
          <h2>Bingham University Computer Science Department Forum</h2>
        </div>
      </div>
<?php
if(isset($_GET['submit']))
{

      	$question=$_GET['question'];

      	$question_id=$_GET['question_id'];
      	require 'inc/databaseconn.php';
      	$query="SELECT * FROM nacoss_forum_answers WHERE question_id='$question_id'";
      

      if ($result=mysqli_query($conn,$query))
      {
            			echo '<div class="panel-heading">
            <div class="text-center">
            <h3>Question:
            '.$question.'
            </h3>
            </div>
            </div>';
            $counting=0;
            			while($display=mysqli_fetch_array($result,MYSQLI_NUM)){
                    echo '<br>
                  <div class="col-lg-6 col-sm-12">
                    <div class="container">
                          <div class="row">
                          <div class="panel-body">
                          '.$display[0].'<br>'. $display[1].'<br>'.$display[2].'<br>'.$display[3].'<br>'. $display[4].'<br>';
               
                 $counting++;
            $answer_id=$display[0];
            
            $query_2=mysqli_query($conn,"SELECT * FROM nacoss_likeanddislike WHERE answer_id = '$answer_id' AND likes=1");
            $query_3=mysqli_query($conn,"SELECT * FROM nacoss_likeanddislike WHERE answer_id = '$answer_id' AND dislikes=1");

              $display_2=mysqli_num_rows($query_2);
               $display_3=mysqli_num_rows($query_3);
               echo '<div id="response"> </div>';
               if ($display_2==1){
                echo $display_2.' like and ';
               }
               else{
                echo $display_2.' likes and ';
               }
                echo '<div id="responsee"> </div>';
               if ($display_3==1) {
                echo $display_3.' dislike';
               }
              else{
                echo $display_3.' dislikes';
               }
              
              mysqli_free_result($query_2);
              mysqli_free_result($query_3);
               echo '<h4> <button class="glyphicon glyphicon-thumbs-up" id="likebtn'.$counting.'" onclick="likeBtn(\'likebtn'.$counting.'\','.$display[0].')"></button>

                  <button class="glyphicon glyphicon-thumbs-down" id="unlikebtn'.$counting.'" onclick="unLikeBtn(\'unlikebtn'.$counting.'\','.$display[0].')"></button>



            </h4></div></div></div></div>';
            			}

            		}
            	if(mysqli_num_rows($result)==0)
            	{
            	echo '
              <script>
              document.write("No answers have been submitted for this question");
            	window.location="forumpage2.php";
            	</script>';
            }


      }
 else{
      header('location:'."forumpage2.php");
      }

echo '<script type="text/javascript">
      function likeBtn(elementId,ansid){

        
              var ajax= new XMLHttpRequest();
              
              ajax.open("POST","nacoss_liked.php",true);
              ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
              ajax.onreadystatechange = function()
              {
                    if(ajax.readyState ==4 && ajax.status==200)
                    {
                      document.getElementById(elementId).style.color="blue";
                    }
              }
              ajax.send("answerid="+ansid+" & liked=1");

      }

       function unLikeBtn(elementId2,ansid2)
         {
          
           var ajax= new XMLHttpRequest();
           ajax.open("POST","nacoss_disliked.php",true);
           ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
           ajax.onreadystatechange = function()
           {
           	if(ajax.readyState ==4 && ajax.status==200)
            {
               document.getElementById(elementId2).style.color="blue";
            }
           }
           ajax.send("answerid="+ansid2+" & disliked=1");

      }


</script>';
mysqli_close($conn);
?>