<?php
require 'inc/databaseconn.php';
$query= "SELECT * FROM nacoss_forum_questions  ORDER BY question_id DESC LIMIT 5  OFFSET 5 ";
if($result= mysqli_query($conn,$query)){

$counting=6;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$question_id=$row['question_id'];
 echo '
<label> '.$question_id.' ';
  echo $row['username'].' <b>asked</b> ';
  echo $row['question'].'<br>';
  echo $row['submitted_time'].'<br>';
  echo $row['question_tags'].'<br>
</label>

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
else if ($display_2==0) {
  echo '<p><b>No answers have been submitted</b></p>';
}
$counting++;

  }
}

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