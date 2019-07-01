<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
   <table style="width: 77%;/* padding-left: 14%; */margin-left: 17%;margin-top: 4%;margin-bottom: 30%;border: 1px solid black;border-collapse: collapse;">
  <tr style="
    border: 1px solid #080808;
    background-color: #007bff;
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
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM disaster";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()){
    	echo "<tr>";
    	//echo "<td>$row["Disaster_event_name"]</td>"
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
	
    
    

    
    	
   		
        

 ?>

  
 </table>
</body>


  <?php include 'footer.php';?>

</html>