<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
   <table style="width: 77%;/* padding-left: 14%; */margin-left: 17%;margin-top: 4%;margin-bottom: 30%;border: 1px solid black;border-collapse: collapse;">
  <tr style="
    border: 1px solid #080808;
    background-color: #ec8d16;
">
	<th>Event</th>
    <th>Disaster Type</th>
    <th>Area</th> 
    <th>Time</th>
	<th>Vulnarability</th>
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

$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM disaster";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
	$date1=date_create($row['Time_period']);
	$date2=date_create(date("Y-m-d h:i:s"));
	$now = date_diff($date1,$date2);
	
	if ($now->format("%a")<=$_POST['day'])
	{
		echo "<tr>";
    	
    	$data = $row["Disaster_event_name"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	$data = $row["Disaster_type"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	$data = $row["Area"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	$data = $row["Time_period"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	$data = $row["Vulnarability_rate"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	echo "</tr>";
	}
}

$conn->close();
?>

</table>
</body>


  <?php include 'footer.php';?>

</html>