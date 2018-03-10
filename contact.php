<?php
include ('inc/header.php');
?>

  <div class= "container">
  <div class="adjust">
          <div class="row" style="margin: 50px;">
          <div class="panel-heading">
            <h3 style="text-align: center;"><strong>BHU Computer Science Contact</strong></h3>
            <hr>            
          </div>
        <form class="form-horizontal" method="POST" action="contact2.php">
  <div class="form-group">
    <label for="inputName3" class="col-sm-3 control-label">Name:</label>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Email:</label>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    
    </div>
  </div>
  <div class="form-group">
      <label class="control-label col-lg-3 col-sm-3" for="phonenumber">PhoneNumber:</label>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <input type="number" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter phonenumber">
    </div>
  </div>
<div class="form-group">
       <label class="control-label col-sm-3" for="message">Message:</label>
   
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <textarea class="form-control" style="height: 100px" rows="3" placeholder="Enter message" name="message">
      
    </textarea>
    </div>
  </div>
    
    
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" value="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
</div>

</div>
        
<?php
include ('inc/footer.php');

?>