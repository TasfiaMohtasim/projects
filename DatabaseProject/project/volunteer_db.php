<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connectionss
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo $_POST["name"];
$stmt = $conn->prepare("INSERT INTO volunteer (Name,Disaster_event_name,Post_Code, Street, House_no, City) VALUES (?, ?, ?, ? ,?, ?)");

$stmt->bind_param("ssssss",$_POST["name"],$_POST["event_name"],$_POST["Post_Code"],$_POST["street"],$_POST["House_no"],$_POST["city"]);
$result=$stmt->execute();
if($result){


header('Location: ' . 'all_success.php');
}
else
{
	
	header('Location: ' . 'all_error.php');
}


$conn->close();
?>