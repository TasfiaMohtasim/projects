<?php
session_start();
?>
<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
                  
     <!-- <a class="navbar-brand" href="<?php echo 'image/logo.png';?>"">RELIEF INFORMATION MANAGEMENT</a> -->
     
      
     <img  src="<?php echo 'image/logo.png';?>" style="width: 12%;">


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo 'home.php';?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo 'right-now.php';?>">Disaster</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo 'affected_area.php';?>">Affected Place</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Information</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="report.php">Recent Disaster</a>
              <a class="dropdown-item" href="report-person-input.php">Survivors Count</a>
               <a class="dropdown-item" href="Event_Wise.php">Event Wise Survivors</a>
                <a class="dropdown-item" href="amount.php">Survivor Relief amount</a>
                  <a class="dropdown-item" href="collect.php">Total collect Distribute</a>


            </div>

          </li>
 <li class="nav-item">
            <a class="nav-link" href="<?php echo 'search.php';?>">Search</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registration</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo 'volunteer.php';?>">Volunteer</a>
              <a class="dropdown-item" href="<?php echo 'registration.php';?>">Donor</a>
              


            </div>
          </li>
          
        </ul>
        
      </div>
        <ul class="nav nav-pills float-right">
          
          <?php
          if(!isset($_SESSION["login"]))
          {
            echo '<li class="nav-item">';
            echo  '<a class="nav-link active" href="login.php">LOGIN <span class="sr-only">(current)</span></a>';
            echo '</li>';
          }
          else{
            echo '<li class="nav-item">';
            echo  '<a class="nav-link active" href="deshboard.php" style="margin-right: 2%;">dashboard <span class="sr-only">(current)</span></a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo  '<a class="nav-link active" href="logout.php">LOGOUT <span class="sr-only">(current)</span></a>';
            echo '</li>';


          }
          ?>
          </ul>
    </nav>



        
   