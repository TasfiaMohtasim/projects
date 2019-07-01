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

$stmt = $conn->prepare("INSERT INTO donate(Donor_ID,Disaster_event_name,Amount,Type,Donate_Date) VALUES (?, ?, ?, ? ,?)");
$stmt->bind_param("sssss",$_POST["Donor_ID"],$_POST["event_name"], $_POST["amount"],$_POST["type"],$_POST["datee"]);
$result=$stmt->execute();
if($result){


header('Location: ' . 'all_success.php');
}
else
{
	
	header('Location: ' . 'all_error.php');
}

//$conn->close();
?>