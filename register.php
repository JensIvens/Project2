<?php
	include_once("classes/User.class.php");
	
	if(!empty($_POST['btnsubmit']))
	{
		echo('submit!');
		include_once("classes/User.class.php");
		try 
		{
			$u = new User();
			$u->FirstName = $_POST['firstname'];
			$u->LastName = $_POST['lastname'];
			$u->Email = $_POST['email'];
			$u->Password = $_POST['password'];
			$u->Save();
			session_start();
			$_SESSION['email'] = $u->Email;
			$_SESSION['loggedin'] = true;
			Header ('Location: login.php');
		} 
		catch (Exception $e) 
		{
			$error = $e->getMessage();	
		}
	}

?><!DOCTYPE html>
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
			<?php 
				if(isset($error))
				{
					echo "<p class='error'>$error</p>";
				}
			?>
			<p>Register</p>
			<?php 
				if(isset($error))
				{
					echo "<p class='error'>$error</p>";
				}
			?>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<span class="input-email-icon"><i class="fa fa-user"></i></span>
				<input type="text" name="firstname" placeholder="First Name">
				
				<span class="input-email-icon"><i class="fa fa-user"></i></span>
				<input type="text" name="lastname" placeholder="Last Name">

				<span class="input-email-icon"><i class="fa fa-envelope-o fa-fw"></i></span>
				<input type="email" name="email" placeholder="Email">

				<span class="input-email-icon"><i class="fa fa-lock"></i></span>
				<input type="password" name="password" placeholder="Password">

				<span class="input-email-icon"><i class="fa fa-lock"></i></span>
				<input type="password" placeholder="Confirm Password">

				 <p class="keeploggedin">
	    			<input type="checkbox" id="keep" />
	   				<label for="keep">I accept the terms and conditions.</label>
	    		</p>
	    		<input type="submit" name="btnsubmit" value="Register">
			</form>
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