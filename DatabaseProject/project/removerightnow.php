
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

      <form class="form-signin" action="removedisaster-db.php" method="post">
        <h2 class="form-signin-heading">Delete a Disaster</h2>
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

        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div>
  </div>


    </body>

  <?php include 'footer.php';?>

</html>