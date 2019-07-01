
<?php
session_start();
?>
<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
    
      <main role="main" class="container" style="margin-top: 19px;margin-left: 0%;">
      <div class="row">
      



    <div class="col-sm-9 col-md-9" style="padding-left: 12%;padding-right: 30%;padding-top: 10%;padding-bottom: 15%;">

      <form class="form-signin" action="place-db.php" method="post">
        <h2 class="form-signin-heading">ADD DISASTER PLACE</h2>
<br><br>

        Event Name:
  <input type="text" name="event_name" placeholder="Event Name" required autofocus>
  <br>
  <br>
        Area:
  <input type="text" name="area" placeholder="Event Name" required autofocus>
  
    <br>
     
   <br>District:
  <input type="text" name=" disrict_name" placeholder="District name" required autofocus>
  <br>
   <br>Distace :
  <input type="text" name="distance" placeholder="Distance from Dhaka" required autofocus>
<br>
    <br>   Post Code:
  <input type="text" name="post_Code" placeholder="Post Code" required autofocus>
  <br> 
  <br>
 
        


        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div>
  </div>

    </body>

  <?php include 'footer.php';?>

</html>