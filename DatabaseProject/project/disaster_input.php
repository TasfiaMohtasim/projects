
<?php
session_start();
?>
<?php include 'header.php';?>
  <?php
      if($_SESSION["login"]!="true")
      {
      include 'loginredirect.php';
      }
      
      ;?>


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
       
        <?php include 'sidebar.php';?>



    <div class="col-sm-9 col-md-9" style="padding-left: 12%;padding-right: 30%;padding-top: 0%;padding-bottom: 15%;">

      <form class="form-signin" action="disaster-db.php" method="post">
        <h2 class="form-signin-heading">DISASTER INPUT</h2>

<br>
        Event Name:
  <input type="text" name="event_name" placeholder="Event Name" required autofocus>
  <br><br>
        Type:
        <select name="type">
		    <option value="Flood">Flood</option>
		    <option value="WildFire">WildFire</option>
		    <option value="Cyclone">Cyclone</option>
		    <option value="Landslide">Landslide</option>
        <option value="Earthquake">Earthquake</option>
        <option value="Drought">Drought</option>
         <option value="Man_Made">Man_Made</option>
		 </select>
		 <br><br>Area:
  <input type="text" name="area" placeholder="area" required autofocus>
  <br><br>
       Time:
  <input type="date" name="time" placeholder="dd-mm-yy" required autofocus>
  <br> <br>
  Vulnarability:
        <select name="Vulnarability">
		    <option value="High">High</option>
		    <option value="Medium">Medium</option>
		    <option value="Low">Low</option>
		 </select>
		 <br><br>
     
        


        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div>
  </div>


    </body>

  <?php include 'footer.php';?>

</html>