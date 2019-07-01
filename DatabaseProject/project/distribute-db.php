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

$stmt = $conn->prepare("INSERT INTO distribute (Survivor_ID,Distribute_serial_no, Disaster_event_name,Amount,Type,Distribute_Date) VALUES (?, ?, ?, ?,?,? )");
$stmt->bind_param("ssssss",$_POST["Survivor_ID"], $_POST["serial_no"],$_POST["Event_name"],$_POST["amount"],$_POST["type"],$_POST["datee"]);
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