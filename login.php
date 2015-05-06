<!DOCTYPE html>
<html>
<head>
	<title>We love bikes! - Login</title>

	<?php 
		include('head.php');
	?>

</head>
<body>
	
	<?php 
		include('nav.php');
	 ?>
	
	<section id="banner">
		<div class="loginbox">
			<p>Login</p>
			<form>
				<span class="input-email-icon"><i class="fa fa-envelope-o fa-fw"></i></span>
				<input type="email" placeholder="Email">
				
				<span class="input-email-icon"><i class="fa fa-lock"></i></span>
				<input type="password" placeholder="Password">
				 <p class="keeploggedin">
	    			<input type="checkbox" id="keep" />
	   				<label for="keep">Keep me logged in!</label>
	    		</p>
	    		<input type="submit" value="Login">
			</form>
		</div>
		<div class="forgot">
			<a href="forgotpass.php">Forgot password?</a>
			<a href="register.php">No account? Register</a>
		</div>	
	</section>
	
	<?php 
		include('footer.php') 
	?>

</body>
</html>