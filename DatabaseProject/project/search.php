
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