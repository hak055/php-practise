<?php 
include_once ('libs/login_user.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title></title>
	<script type="text/javascript">
		$(function(){

			$('#show_register').click(function(){
				$('.login_form').hide();
				$('.register_form').show();
				return false;
			});
			$('#show_login').click(function(){
				$('.register_form').hide();
				$('.login_form').show();
				return false;
			});
		});
	</script>
</head>
<body>
    <?php include_once ('nav.php');?>
    <?php 
    	if(isset($error))
    		echo '<div class="alert alert-error">'.$error.'</div>';

    ?>
    <div class="login_form"> 
    	<form class="form p-3" action="" method="post">
		  <div class="form-group">
		    <label><h1>Login here</h1></label>
		  </div>
		  <div class="form-group">
		    <label>UserName</label>
		    <input type="text" class="form-control" name="username" placeholder="username">
		  </div>
		  <div class="form-group">
		    <label>Password</label>
		    <input type="password" name="password" class="form-control" placeholder="password">
		  </div>
		  <button type="submit" name="login" class="btn btn-primary">Submit</button><br>
		  <a href="#" id="show_register">Don't have an account ?</a>
		</form>
    </div>


    <div class="register_form">
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
		    <input type="password" name="password" class="form-control" placeholder="password">
		  </div>
		  <div class="form-group">
		    <label>Re-Password</label>
		    <input type="password" name="repassword" class="form-control" placeholder="password">
		  </div>
		  <button type="submit" name="register" class="btn btn-primary">Submit</button><br>
		  <a href="#" id="show_login">Show login form</a>
	    </form>
    </div>
</body>
</html>