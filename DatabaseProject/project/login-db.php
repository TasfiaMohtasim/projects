<?php
session_start();
?>
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


$sql = "SELECT * FROM admin";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
    	if($_POST["inputEmail"]== $row["email"] && $_POST["inputPassword"]== $row["password"])
    	{
    		
    		header('Location: ' . 'deshboard.php');
    		$_SESSION["login"] = "true";
    		
    	}
    	else{
    		header('Location: ' . 'login.php');
    	}
        
    }
} else {
     echo "0 results";
}
$conn->close();
?>