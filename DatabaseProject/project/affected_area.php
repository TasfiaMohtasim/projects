<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
   <table style="width: 77%;/* padding-left: 14%; */margin-left: 17%;margin-top: 4%;margin-bottom: 30%;border: 1px solid black;border-collapse: collapse;">
  <tr style="
    border: 1px solid #080808;
    background-color: #007bff;
">
	<th>Event Name</th>
    <th>Distance</th>
    <th>District</th> 
    <th>post code</th>
	<th>Name</th>
  </tr> 

    <?php
   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM place";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()){
    	echo "<tr>";
    	//echo "<td>$row["Disaster_event_name"]</td>"
    	$data = $row["Disaster_event_name"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	$data = $row["Distance_from_Dhaka"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	$data = $row["District"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	$data = $row["post_code"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	$data = $row["Name"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	echo "</tr>";

    }
 ?>

  
 </table>
</body>


  <?php include 'footer.php';?>

</html>