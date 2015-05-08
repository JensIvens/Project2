<!DOCTYPE html>
<html>
<head>
	<title>We love bikes!</title>

	<?php 
		include('head.php');
	?>

</head>
<body>
	
	<?php 
		include('nav.php');
	 ?>
	
	<section id="banner">
		<h1>WE <i class="fa fa-heart"></i> BIKES</h1>
		<h2>Rent a bike from a local</h2>
		<div class="box">
		  <div class="container-4">
		    <input type="search" id="search" placeholder="Where do you need a bike?" />
		    <button class="icon"><i class="fa fa-search"></i></button>
		  </div>
		</div>
	</section>
	<section id="map-home">

	</section>
	<section id="teaser">
		<ul>
			<li>
				<img src="images/teaser1.png" />
				<div class="teaser-banner">
					<img src="images/marker_map.png">
					<p class="teaser-name">Yannick Nijs</p>
					<p class="teaser-location">Gelrode</p>
				</div>
			</li>
			<li>
				<img src="images/teaser2.png" />
				<div class="teaser-banner">
					<img src="images/marker_map.png">
					<p class="teaser-name">Yannick Nijs</p>
					<p class="teaser-location">Gelrode</p>
				</div>
			</li>
			<li>
				<img src="images/teaser3.png" />
				<div class="teaser-banner">
					<img src="images/marker_map.png">
					<p class="teaser-name">Yannick Nijs</p>
					<p class="teaser-location">Gelrode</p>
				</div>
			</li>
		</ul>
		<a href="discover.php" class="cta-discover">Discover our bikes!</a>
	</section>
	<section id="how">
		<h3>How does it work?</h3>
		<ul>
			<li>
				<img src="images/how1.png" alt="How we work" />
				<h4>Discover our bikes!</h4>
				<p>We have a lot of bikes. You can pick one you like, or upload your own bike and make some money! It's a safe way to share your bikes and to book a bike.</p>
			</li>
			<li>
				<img src="images/how1.png" alt="How the site works" />
				<h4>Manage your bookings/bikes</h4>
				<p>It's very easy to book a bike. The owner receives a notification and accepts or ignores at will. You also pay your booking via our website.</p>
			</li>
			<li>
				<img src="images/how1.png" alt="Pick up your bike" />
				<h4>Pick up your bike and ride!</h4>
				<p>Meet the owner and pick up your bike! Ride safe and have fun!</p>
			</li>
		</ul>
	</section>
	

	<?php 
		include('footer.php');
	?>

	<?php 
		include('scripts.php');
	?>
</body>
</html>