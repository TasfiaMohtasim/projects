
<!DOCTYPE html>
<html>
<head>
	<?php
  include('header.php');
  include('navbar.php');



?>
<style>
	.sss{
		position: relative;
		margin-top: 80px;
		text-align: center;
	}

	.sp{
		position: relative;
		text-align: center;
		background: #0000ff6e;
    	color: black;
    	    margin-left: 45%;
	}
</style>
</head>

<body>
	<h3 class="sss">Your Input Is Wrong!!!!!!!</h3>

<?php

   echo  '<a class="sp" href="disaster_input.php">TRY AGAIN<span class="sr-only">(current)</span></a>';

   ?>
</body>

<?php
include('footer.php');

?>

</html>

