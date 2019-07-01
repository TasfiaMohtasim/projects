
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

      <form class="form-signin" action="distribute-db.php" method="post">
        <h2 class="form-signin-heading">DISTRIBUTION</h2>

      <br>
        Survivor ID:
  <input type="text" name="Survivor_ID" placeholder="Survivor ID" required autofocus>
  <br>

    <br>
      serial no:
  <input type="text" name="serial_no" placeholder="serial_no" required autofocus>
  <br>

    <br>
    
        
        Event Name:
        <select name="Event_name">
            <?php
   
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "relief2";
            $conn = new mysqli($servername, $username, $password,$dbname);
            $sql = "SELECT * FROM survivors ";
            $result = $conn->query($sql);


            while($row = $result->fetch_assoc()){

            echo "<option value='".$row["Disaster_event_name"]."'>".$row["Disaster_event_name"].'</option>';

      }
      ?>
    
     </select>
   <br><br>
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