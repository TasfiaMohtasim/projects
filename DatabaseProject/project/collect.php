
<?php
session_start();
?>
<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
    
      <main role="main" class="container" style="margin-top: 19px;margin-left: 0%;">
      <div class="row">
      



    <div class="col-sm-9 col-md-9" style="padding-left: 12%;padding-right: 30%;padding-top: 1%;padding-bottom: 15%;">

      <form class="form-signin" action="collect-db.php" method="post">
        <h2 class="form-signin-heading">Disaster event of</h2>
  


         Event Name:
        <select name="event_name">
            <?php
   
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "relief2";
            $conn = new mysqli($servername, $username, $password,$dbname);
            $sql = "SELECT Disaster_event_name FROM disaster  group by Disaster_event_name";
            $result = $conn->query($sql);


            while($row = $result->fetch_assoc()){

            echo "<option value='".$row["Disaster_event_name"]."'>".$row["Disaster_event_name"].'</option>';

      }
      ?>
    
     </select>

     <input type="text" name="type" placeholder="type" required autofocus>

<br><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div>
  </div>


    </body>

  <?php include 'footer.php';?>

</html>