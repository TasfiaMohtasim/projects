
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
       
        <?php include 'sidebar.php';?>



    <div class="col-sm-9 col-md-9" style="padding-left: 12%;padding-right: 30%;padding-top: 0%;padding-bottom: 15%;">

      <form class="form-signin" action="updaterightnow-db.php" method="post">
        <h2 class="form-signin-heading">Update Input</h2>

<br>
      
        Event Name:
        <select name="event_name">
            <?php
   
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "relief2";
            $conn = new mysqli($servername, $username, $password,$dbname);
            $sql = "SELECT * FROM disaster";
            $result = $conn->query($sql);


            while($row = $result->fetch_assoc()){

            echo "<option value='".$row["Disaster_event_name"]."'>".$row["Disaster_event_name"].'</option>';

      }
      ?>
    
     </select>

  <br><br>
        UpdateType:
        <select name="UpdateType">
        <option value="">select</option>
        <option value="Disaster_type">type</option>
        <option value="Area">Area</option>
        <option value="Time_period">Time period</option>
        <option value="Vulnarability_rate">Vulnarability rate</option>
     </select>
     <br><br>Update Input:
  <input type="text" name="Input" placeholder="" >
  <br><br>
        


        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div>
  </div>


    </body>

  <?php include 'footer.php';?>

</html>