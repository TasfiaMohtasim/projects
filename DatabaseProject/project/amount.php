
<?php
session_start();
?>
<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
    
      <main role="main" class="container" style="margin-top: 19px;margin-left: 0%;">
      <div class="row">
      



    <div class="col-sm-9 col-md-9" style="padding-left: 12%;padding-right: 30%;padding-top: 1%;padding-bottom: 15%;">

      <form class="form-signin" action="amountdb.php" method="post">
        <h2 class="form-signin-heading">Donar Total Donation</h2>
  <input type="text" name="survivor" placeholder="Survivor Id" required autofocus>
  <br><br>

<input type="text" name="type" placeholder="type" required autofocus>
<input type="text" name="event" placeholder="Event Name" required autofocus>


  <br><br>
        


        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div>
  </div>


    </body>

  <?php include 'footer.php';?>

</html>