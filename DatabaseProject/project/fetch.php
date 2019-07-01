<?php
//fetch.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";
$conn = new mysqli($servername, $username, $password,$dbname);
$output = '';
if(isset($_POST["query"]))
{
 $search = $_POST["query"];
 $query = "
  SELECT * FROM disaster 
  WHERE Disaster_event_name LIKE '%".$search."%'
 ";
 $result = $conn->query($query);
if($result->num_rows > 0)
{
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
    <p>'.$row["Disaster_event_name"].'</p>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
}
else
{
 
}


?>