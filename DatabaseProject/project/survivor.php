
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

      <form class="form-signin" action="survivor-db.php" method="post">
        <h2 class="form-signin-heading">SURVIVORS</h2>
        <br>
        ID:
  <input type="text" name="id" placeholder="ID" required autofocus>
  <br>
      <br>Event Name
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
  <br>
  <br>
       
     
     <br>Name:
  <input type="text" name="name" placeholder="name" required autofocus>
  <br>
     <br>  Post Code:
  <input type="text" name="Post_Code" placeholder="Post Code" required autofocus>
  <br> <br>
  Street:
  <input type="text" name="street" placeholder="Street" required autofocus>
  <br><br>
  House no:
  <input type="text" name="House_no" placeholder="House No" required autofocus>
  <br><br>
  City:
  <input type="text" name="city" placeholder="City" required autofocus>
  <br><br>
         Gender:
        <select name="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    
     </select>
     <br>
     <br>
      Age:
  <input type="text" name="age" placeholder="Age" required autofocus>
  <br><br>


        


        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div>
  </div>


    </body>

  <?php include 'footer.php';?>

</html>