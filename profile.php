<?php 
	session_start();

	if(!isset($_SESSION['userid']))
 	{
 		header("location: login.php");
 	}
 	else
 	{
 		include_once('classes/User.class.php');
		$user = new User();
 		$ownerID = $_SESSION['userid'];
 		echo $ownerID;
		$userName = $user->getAllInformation($ownerID);
	
 	}


?><!DOCTYPE html>
<html>
<head>
	<title>We love bikes! - Bike</title>

	<?php 
		include('head.php');
	?>

</head>
<body>
	
	<?php 
		include('nav.php');
	?>
	 
	<section id="profile">
		<img src="images/<?php echo $ownerID . '/' ?>logo.jpg">
		<?php 
			foreach ($userName as $userInfo) { ?>
				<h2><?php echo ucfirst($userInfo['userfirstname']); ?></h2>
			<?php }
		 ?>	
		<h2 class="profile-location"><?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['usercity']);} ?></h2>
		<ul>
			<li class="profile-welcome">Welcome <?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['userfirstname']);} ?>!</li>
			<li>
				<a href="info.php">
				Personal info
					<p>
						Upload a photo and write a short bio to help other Shift members get to know you better.
					</p>
				</a>
			</li>
			<li>
				<a href="addbike.php">
				Add bike
					<p>
						Upload a new bike, make money with it, and help Shift grow!
					</p>
				</a>
			</li>
			<li>
				<a href="mybookings.php">
				Bookings
					<p>
						Everything that has something to do with bookings can you find here.
					</p>
				</a>
			</li>
		</ul>
		<ul>
			<li class="profile-welcome">Messages</li>
			<li>(0) new messages</li>
			<li>
				<a href="sendmessage.php">
					Send new message
					<p>
						You can send a message to other Shift members and share great bike experiences.
					</p>
				</a>
			</li>
		</ul>

		<ul class="quicklinks">
			<li class="quicklinktitle">Quicklinks</li>
			<li>
				<a href="about.php">Learn more about Shift</a>
			</li>
			<li>
				<a href="contact.php">Contact Shift</a>
			</li>
		</ul>
	</section>


	
	
	<?php 
		include('footer.php') 
	?>
	<?php 
		include('scripts.php');
	?>
</body>
</html>