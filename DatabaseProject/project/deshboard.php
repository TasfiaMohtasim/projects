
<?php
session_start();
?>
<?php include 'header.php';?>

  <body>
    <?php include 'navbar.php';?>

    <main role="main" class="container" style="margin-top: 19px;margin-left: 0.5%;">
    	<div class="row">

    	<?php include 'sidebar.php';?>
    	<?php
      if($_SESSION["login"]!="true")
      {
    	include 'loginredirect.php';
      }
      
    	;?>

    	</div>



</main><!--/.container-->


    
  </body>

  <?php include 'footer.php';?>

</html>