
<?php
session_start();
?>
<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>
    
      <main role="main" class="container" style="margin-top: 19px;">
      <div class="row">

     <div class="container">
        <div>
           <br />
           <h2 align="center">SEARCH</h2><br />
           <form style="margin-left: 26%;" action="searchsurvivor.php" method="post">
           <div class="form-group">
            <div class="form-row">
            <div class="col-md-3 mb-3"  style="margin-bottom: 0rem!important;">
             <input type="text" name="search_text" id="search_text" placeholder="Search by event name" class="form-control" />
             <p><span id="result"></span></p>
            </div>
            <div class="col-md-6 mb-3" style="margin-bottom: 0rem!important;">
                <select name="category" class="custom-select" required>
                    <option value=""> Select A Category</option>
                    <option value="DO">Donor</option>
                    <option value="VO">Volunteer</option>
                    <option value="SU">Survivor</option>
                  </select> 

                  <button type="submit" class="btn btn-primary" >Search</button>
            </div>
     </div>
      </div>
        </form>
    </div>

<div>
      <table style="width: 100%;border: 1px solid #080808;">
  <tr style="
    border: 1px solid #080808;
    background-color: #c9cccf;
">
    <?php
if($_POST["category"]=="SU")
{
    echo "<th>id</th>";
    echo "<th>";
    echo "name";
    echo "</th>";
    echo "<th>";
    echo "event";
    echo "</th>"; 
    echo "<th>zip</th>";
    echo "<th>street</th>";
    echo "<th>house</th>";
   echo  "<th>city</th>";
   echo   "<th>gender</th>";
   echo   "<th>Age</th>";
  echo  "</tr>";   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM survivors where Disaster_event_name=\"".$_POST["search_text"]."\"";

$result = $conn->query($sql);


    while($row = $result->fetch_assoc()){
        echo "<tr>";
        //echo "<td>$row["Disaster_event_name"]</td>"
        $data = $row["Survivor_ID"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["Name"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        

        $data = $row["Disaster_event_name"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["Area"];
        echo "<td>";
        echo "$data";
        echo "</td>";


        $data = $row["Street"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["House_no"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["City"];
        echo "<td>";
        echo "$data";
        echo "</td>";

         $data = $row["gender"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["Age"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        echo "</tr>";
}

}

else if($_POST["category"]=="VO")
{
    echo "<th>id</th>";
    echo "<th>";
    echo "name";
    echo "</th>";
    echo "<th>";
    echo "event";
    echo "</th>"; 
    echo "<th>zip</th>";
    echo "<th>street</th>";
    echo "<th>house</th>";
   echo  "<th>city</th>";

  echo  "</tr>";   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM volunteer where Disaster_event_name=\"".$_POST["search_text"]."\"";

$result = $conn->query($sql);


    while($row = $result->fetch_assoc()){
        echo "<tr>";
        //echo "<td>$row["Disaster_event_name"]</td>"
        $data = $row["Volunteer_ID"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["Name"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        

        $data = $row["Disaster_event_name"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["Post_Code"];
        echo "<td>";
        echo "$data";
        echo "</td>";


        $data = $row["Street"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["House_no"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["City"];
        echo "<td>";
        echo "$data";
        echo "</td>";
}
}
else if($_POST["category"]=="DO")
{
    echo "<th>id</th>";
    echo "<th>";
    echo "name";
    echo "</th>";
    echo "<th>";
    echo "event";
    echo "</th>"; 
    echo "<th>zip</th>";
    echo "<th>street</th>";
    echo "<th>house</th>";
   echo  "<th>city</th>";

  echo  "</tr>";   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief2";
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM donor where Disaster_event_name=\"".$_POST["search_text"]."\"";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()){
        echo "<tr>";
        //echo "<td>$row["Disaster_event_name"]</td>"
        $data = $row["Donor_ID"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["Name"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        

        $data = $row["Post_Code"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["Disaster_event_name"];
        echo "<td>";
        echo "$data";
        echo "</td>";


        $data = $row["Street"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["House_no"];
        echo "<td>";
        echo "$data";
        echo "</td>";

        $data = $row["city"];
        echo "<td>";
        echo "$data";
        echo "</td>";
}

}
?>
 </table>

</div>          
           
    </div>
    <br />
           
     </div>




  </body>



  <?php include 'footer.php';?>

</html>
 <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>