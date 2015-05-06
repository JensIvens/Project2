<!DOCTYPE html>
<html>
<head>
	<title>We love bikes! - Register</title>

	<?php 
		include('head.php');
	?>

</head>
<body>
	
	<?php 
		include('nav.php');
	 ?>
	
	<section id="banner">
		<div class="loginbox register">
			<p>Register</p>
			<form>
				<span class="input-email-icon"><i class="fa fa-user"></i></span>
				<input type="text" placeholder="First Name">
				
				<span class="input-email-icon"><i class="fa fa-user"></i></span>
				<input type="text" placeholder="Last Name">

				<span class="input-email-icon"><i class="fa fa-envelope-o fa-fw"></i></span>
				<input type="email" placeholder="Email">

				<span class="input-email-icon"><i class="fa fa-lock"></i></span>
				<input type="password" placeholder="Password">

				<span class="input-email-icon"><i class="fa fa-lock"></i></span>
				<input type="password" placeholder="Confirm Password">

				 <p class="keeploggedin">
	    			<input type="checkbox" id="keep" />
	   				<label for="keep">I accept the terms and conditions.</label>
	    		</p>
	    		<input type="submit" value="Register">
			</form>
		</div>
	</section>
	
	<?php 
		include('footer.php') 
	?>

</body>
</html>