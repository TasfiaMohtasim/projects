<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
   <table style="width: 77%;/* padding-left: 14%; */margin-left: 17%;margin-top: 10%;margin-bottom: 10%;border: 1px solid black;border-collapse: collapse;">
  <tr style="
    border: 1px solid #080808;
    background-color: #007bff;
">
    <th>Collected</th>
     <th>Distributed</th>
   
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
$type=$_POST["type"];

$sql = "SELECT sum(Amount) as Amount  FROM   donate  where Disaster_event_name='$event' and Type='$type '";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$data = $row["Amount"];
echo $data;
echo "</td>";
echo "<td>"; 
$sql = "SELECT sum(Amount) as Amount  FROM  distribute where Disaster_event_name='$event'and Type='$type '";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$data = $row["Amount"];
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