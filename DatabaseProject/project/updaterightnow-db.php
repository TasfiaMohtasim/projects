<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$event=$_POST["event_name"];
$update=$_POST["UpdateType"];
$input=$_POST["Input"];


$sql = "UPDATE disaster SET  $update='$input' WHERE Disaster_event_name='$event'";
$result = $conn->query($sql);

if ($result === TRUE) {
    echo "Record updated successfully";
    header('Location: ' . 'all_success.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>