<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
      <main role="main" class="container" style="margin-top: 101px;margin-left: 0%;">
      <div class="row">
   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT SUM(Amount) as total FROM distribute where Survivor_ID=\"".$_POST["survivor"]."\" AND Type = \"".$_POST["type"]."\"  AND Disaster_event_name = \"".$_POST["event"]."\"";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
	echo "<h1>Total Amount:".$row["total"]."</h1>";

$conn->close();
?>
</div>
</main>


</body>


  <?php include 'footer.php';?>

</html>