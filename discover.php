<!DOCTYPE html>
<html>
<head>
	<title>We love bikes! - Discover</title>

	<?php 
		include('head.php');
	?>

</head>
<body>
	
	<?php 
		include('nav.php');
	 ?>
	 
	<section id="map-home">

	</section>

	<div class="wrapper">
		
		<aside class="filters">
			<span>Filters <i class="fa fa-arrow-circle-down"></i></span>
		</aside>
		<div class="content">
			<ul class="discover-list">
				<li class="discover-list-li">
					<a href="#">
						<img src="images/teaser1.png" />
						<div class="discover-banner">
	 						<img class="discover-marker" src="images/marker_map.png">
	 						<p class="discover-name">Yannick Nijs</p>
							<p class="discover-price">€ 8</p>
						</div>
					</a>
				</li>
				<li class="discover-list-li">
					<a href="#">
						<img src="images/teaser2.png" />
						<div class="discover-banner">
							<img class="discover-marker" src="images/marker_map.png">
							<p class="discover-name">Yannick Nijs</p>
							<p class="discover-price">€ 10</p>
						</div>
					</a>
				</li>
				<li class="discover-list-li">
					<a href="#">
						<img src="images/teaser3.png" />
						<div class="discover-banner">
 							<img class="discover-marker" src="images/marker_map.png">
 							<p class="discover-name">Yannick Nijs</p>
							<p class="discover-price">€ 12</p>
						</div>
					</a>
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