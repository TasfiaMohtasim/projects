<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$event=$_POST["event_name"];
$sql = "DELETE FROM disaster WHERE	Disaster_event_name='$event'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: ' . 'all_success.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>



