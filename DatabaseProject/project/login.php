<?php include 'header.php';?>
<body>
	<?php include 'navbar.php';?>
	<div class="container" style="padding-left: 30%;padding-right: 30%;padding-top: 10%;padding-bottom: 15%;">

      <form class="form-signin" action="login-db.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        

        <label for="inputEmail" class="sr-only">Email address</label>
         <br>
        <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        
        <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
        
         <br>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>

    </div> 



</body>
<?php include 'footer.php';?>