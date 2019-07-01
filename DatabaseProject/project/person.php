<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
     <main role="main" class="container" style="margin-top: 87px;margin-left: 0%;">
      <div class="row">
       
        <?php include 'sidebar.php';?>

   <table style="width: 77%;/* position:  inherit; *//* padding-left: 14%; */margin-left: 31%;margin-top: -21%;margin-bottom: 30%;border: 1px solid black;border-collapse: collapse;/* float:  right; */">
  <tr style="
    border: 1px solid #080808;
    background-color: #007bff;
">

    <th>Id</th>
	<th>name</th>
    <th>ZIP</th>
<th>Event </th>

   
	<th>street</th>
    <th>house</th>
    <th>city</th>
  </tr> 

    <?php
   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM donor";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()){
    	echo "<tr>";
    	//echo "<td>$row["Disaster_event_name"]</td>"
    	$data = $row["Donor_ID"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	$data = $row["Name"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";

    	


    	$data = $row["Post_Code"];
    	echo "<td>";
    	echo "$data";
    	echo "</td>";
$data = $row["Disaster_event_name"];
        echo "<td>";
        echo "$data";
        echo "</td>";


        $data = $row["Street"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["House_no"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["city"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        

    	echo "</tr>";

    }
    ?>
	
    
    

    
    	
   		
        

 

  
 </table>
</div>

</body>


  <?php include 'footer.php';?>

</html>