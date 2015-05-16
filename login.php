<?php 
	session_start();

	if(!isset($_SESSION['userid']))
	{
		if(isset($_POST['login']) && !empty($_POST['login']))
		{
			include_once('classes/User.class.php');
			
			$user = new User();
			$userEmail = $_POST['username'];
			$userPassword = $_POST['password'];

			$user->Login($userEmail, $userPassword);

			if(isset($user->errors['errorLogin']))
			{
				$errorLogin = $user->errors['errorLogin'];
			}

			if(isset($_SESSION['userid']))
			{
				session_write_close();
			}
		}
	}
	else
	{
		header("location: index.php");
	}

?><!DOCTYPE html>
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
			<?php if(isset($errorLogin)){echo '<p class="inputError">' . $errorLogin . '</p>';} ?>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<span class="input-email-icon"><i class="fa fa-envelope-o fa-fw"></i></span>
				<input type="email" name="username" placeholder="Email">
				
				<span class="input-email-icon"><i class="fa fa-lock"></i></span>
				<input type="password" name="password" placeholder="Password">
				 <p class="keeploggedin">
	    			<input type="checkbox" id="keep" />
	   				<label for="keep">Keep me logged in!</label>
	    		</p>
	    		<input type="submit" value="Login" name="login">
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
	<?php 
		include('scripts.php');
	?>
</body>
</html>