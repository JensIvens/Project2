<!DOCTYPE html>
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
		<img src="images/profile.jpg">
		<h2>Jens</h2>	
		<h2 class="profile-location">Mechelen</h2>
		<ul>
			<li class="profile-welcome">Welcome Jens!</li>
			<li>
				<a href="info.php">
				Personal info
					<p>
						Upload a photo and write a short bio to help other Shift members get to know you better.
					</p>
				</a>
			</li>
			<li>
				<a href="mybikes.php">
				Bikes
					<p>
						Upload your bikes, change them or delete them. 
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