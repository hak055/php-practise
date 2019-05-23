<?php 
include_once ('libs/login_user.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<title></title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
  		 <a class="navbar-brand" href="#">Tutlage</a>
  		 <span class="navbar-text">
      			<a href="#">Some text</a>
    	</span>
    </nav>

    <form class="form p-3" action="" method="post">
	  <div class="form-group">
	    <label><h1>Register here</h1></label>
	  </div>
	  <div class="form-group">
	    <label>UserName</label>
	    <input type="text" class="form-control" name="username" placeholder="username">
	  </div>
	  <div class="form-group">
	    <label>Email</label>
	    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="email">
	  </div>
	  <div class="form-group">
	    <label>Password</label>
	    <input type="text" name="password" class="form-control" placeholder="password">
	  </div>
	  <div class="form-group">
	    <label>Re-Password</label>
	    <input type="text" name="re-password" class="form-control" placeholder="password">
	  </div>
	  <button type="submit" name="register" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>