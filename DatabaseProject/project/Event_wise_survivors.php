<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
   <table style="width: 77%;/* padding-left: 14%; */margin-left: 17%;margin-top: 10%;margin-bottom: 10%;border: 1px solid black;border-collapse: collapse;">
  <tr style="
    border: 1px solid #080808;
    background-color: #ec8d16;
">
    <th>Survivors ID</th>
    <th>Name</th>
   
  </tr> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";

// Create connection

// Check connection
//if ($conn->connect_error) {
 //   die("Connection failed: " . $conn->connect_error);
//} 
//$conn = new mysqli($servername, $username, $password,$dbname);
$event = $_POST["event_name"];
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM survivors where Disaster_event_name='$event'";
$result = $conn->query($sql);

 while($row = $result->fetch_assoc()){
    	echo "<tr>";
    	//echo "<td>$row["Disaster_event_name"]</td>"
    	$data = $row["Survivor_ID"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	$data = $row["Name"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";


    	echo "</tr>";

    }
#header('Location: ' . 'person.php');
$conn->close();
?>




</table>
</body>


  <?php include 'footer.php';?>

</html>