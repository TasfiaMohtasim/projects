<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
   <table style="width: 77%;/* padding-left: 14%; */margin-left: 17%;margin-top: 10%;margin-bottom: 10%;border: 1px solid black;border-collapse: collapse;">
  <tr style="
    border: 1px solid #080808;
    background-color: #ec8d16;
">
    <th>Survivors</th>
    <th>Male</th>
    <th>Female</th> 
    <th>Child</th>
  </tr> 

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
echo "<tr>";
echo "<td>";        
$conn = new mysqli($servername, $username, $password,$dbname);
$event = $_POST["event_name"];

$sql = "SELECT count(Survivor_ID) as Survivor_ID FROM survivors where Disaster_event_name='$event'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$data = $row["Survivor_ID"];
echo $data;
echo "</td>";

echo "<td>"; 
$sql = "SELECT count(Survivor_ID) as Survivor_ID FROM survivors where gender='Male' and Disaster_event_name='$event'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$data = $row["Survivor_ID"];
echo $data;
echo "</td>";

echo "<td>"; 
$sql = "SELECT count(Survivor_ID) as Survivor_ID FROM survivors where gender='Female' and Disaster_event_name='$event'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$data = $row["Survivor_ID"];
echo $data;
echo "</td>";

echo "<td>"; 
$sql = "SELECT count(Survivor_ID) as Survivor_ID FROM survivors where age<=12  and Disaster_event_name='$event'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$data = $row["Survivor_ID"];
echo $data;
echo "</td>";



echo "</tr>";
	
#header('Location: ' . 'person.php');
$conn->close();
?>




</table>
</body>


  <?php include 'footer.php';?>

</html>