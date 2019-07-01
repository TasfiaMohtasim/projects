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

$stmt = $conn->prepare("INSERT INTO survivors(Survivor_ID,Name, Area, Street, House_no, City, Disaster_event_name,gender,age) VALUES (?, ?, ?, ?, ? ,?, ?, ?, ?)");
echo $_POST["Gender"];
echo $_POST["age"];

$stmt->bind_param("sssssssss", $_POST["id"], $_POST["name"],$_POST["Post_Code"],$_POST["street"],$_POST["House_no"],$_POST["city"],$_POST["event_name"],$_POST["Gender"],$_POST["age"]);
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