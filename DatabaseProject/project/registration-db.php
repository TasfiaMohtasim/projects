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

$stmt = $conn->prepare("INSERT INTO donor (Name,Post_Code, Street, House_no, city,Disaster_event_name) VALUES (?, ?, ?, ? ,?, ?)");

$stmt->bind_param("ssssss",$_POST["name"],$_POST["Post_Code"],$_POST["street"],$_POST["House_no"],$_POST["city"],$_POST["event_name"]);
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