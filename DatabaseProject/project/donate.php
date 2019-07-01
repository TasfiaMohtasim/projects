
<?php
session_start();
?>
<?php include 'header.php';?>


  <body>
    <?php include 'navbar.php';?>
<?php
      if($_SESSION["login"]!="true")
      {
      include 'loginredirect.php';
      }
      
      ;?>
    
    
      <main role="main" class="container" style="margin-top: 19px;margin-left: 0%;">
      <div class="row">
      



    <div class="col-sm-9 col-md-9" style="padding-left: 12%;padding-right: 30%;padding-top: 1%;padding-bottom: 15%;">

      <form class="form-signin" action="donate-db.php" method="post">
        <h2 class="form-signin-heading">DONATION</h2>

      <br>
    

   <br>
        DONOR ID:
  <input type="text" name="Donor_ID" placeholder="Donor ID" required autofocus>
  <br>
  <br>

   
        Event:
  <input type="text" name="event_name" placeholder="event_name" required autofocus>
  <br>

   <br>
        Amount:
  <input type="text" name="amount" placeholder="Amount" required autofocus>
  <br>

  <br>
        Type:
        <select name="type">
        <option value="Tk">TK</option>
        <option value="Food">Food</option>
        <option value="Cloth">Cloth</option>
        
    
     </select>
     <br>
     <br>
     Date:
  <input type="date" name="datee"  required autofocus>
  
   
  <br><br>
        


        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div>
  </div>


    </body>

  <?php include 'footer.php';?>

</html>