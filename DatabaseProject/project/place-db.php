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

$stmt = $conn->prepare("INSERT INTO place (Disaster_event_name,Distance_from_Dhaka,District, Post_Code, Name) VALUES (?, ?, ?, ? ,?)");

$stmt->bind_param("sssss", $_POST["event_name"], $_POST["distance"],$_POST["disrict_name"],$_POST["post_Code"],$_POST["area"]);
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