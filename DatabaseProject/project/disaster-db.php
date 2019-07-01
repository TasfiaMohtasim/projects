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

$stmt = $conn->prepare("INSERT INTO disaster (Disaster_event_name, Disaster_type, Area, Time_period, Vulnarability_rate) VALUES (?, ?, ?, ? ,?)");
$stmt->bind_param("sssss", $_POST["event_name"], $_POST["type"], $_POST["area"],$_POST["time"],$_POST["Vulnarability"]);
$result=$stmt->execute();
if($result){

echo '<script type="text/javascript"> alert("Password and confirm password does not match!")</script>';
header('Location: ' . 'success.php');
}
else
{
	echo"YOur Input is wrong";
	echo '<script type="text/javascript"> alert("Password and confirm password does not match!")</script>';
	header('Location: ' . 'error.php');
}
$conn->close();
?>