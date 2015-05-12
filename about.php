<!DOCTYPE html>
<html>
<head>
	<title>We love bikes! - About</title>

	<?php 
		include('head.php');
	?>

</head>
<body>
	
	<?php 
		include('nav.php');
	 ?>
	 
	<div class="wrapper">
		
		<aside class="nav-sec">
			<ul>
				<li><a href="about.php" class="aside-active">About Us</a></li>
				<li><a href="about.php">Founders</a></li>	
			</ul>
		</aside>
		<div class="content">
			<h2>About Us</h2>	
			<p>
				'ProjectName' is a platform for bike-lovers. It's a very simple way to share your bike, 
				or rent one by yourself! It's found in Mechelen, Belgium in february 2015. 
				Currently more than +5.000 bikes available and counting! 
			</p>
			<p>
				Whether an bike for an hour, a tandem for a week, or a mountainbike for a day, 
				'ProjectName' connects people to unique cycling experiences, at any price point, 
				in more than 75 cities and 10 countries. And with world-class customer service 
				and a growing community of users, 'ProjectName' is the easiest way for people 
				to monetize their bike and showcase it to an audience of millions.
			</p>
			<ul class='aboutlist'>
				<li>
					<i class="fa fa-users"></i>
					<p class="about-title">Bikers</p>
					<p class="about-number">2.500+</p>
				</li>
				<li>
					<i class="fa fa-home"></i>
					<p class="about-title">Cities</p>
					<p class="about-number">75+</p>
				</li>
				<li>
					<i class="fa fa-bicycle"></i>
					<p class="about-title">Bikes</p>
					<p class="about-number">1.200+</p>
				</li>
				<li>
					<i class="fa fa-road"></i>
					<p class="about-title">Distance</p>
					<p class="about-number">15.000+ km</p>
				</li>
			</ul>
		</div>
	</div>

	
	<?php 
		include('footer.php') 
	?>
	<?php 
		include('scripts.php');
	?>
</body>
</html>