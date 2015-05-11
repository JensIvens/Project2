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
	 
	<section id="map-home" class="discover-map">

	</section>
		
		<aside class="filters">
			<span id="filters-display">Filters <i class="fa fa-arrow-circle-down"></i></span>
			<div id="filterlist">
				<ul>
					<li>
						<p>Location:</p>
						<form>
							<input type="text" placeholder="Ex. Brussels">	
						</form>
					</li>
					<li>
						<p>Radius:</p>
						<input type="range" min="0" max="50" value="5" step="1" onchange="rangevalue.value=value + ' km'" />
						<output id="rangevalue">5 km</output>						
					</li>
					<li>
						<p>Price:</p>
						<input type="range" min="0" max="+200" value="15" step="1" onchange="priceminvalue.value='€ ' + value" />
						<output id="priceminvalue">&#8364; 15</output>						
					</li>
					<li>
						<input type="submit" class="btnsearch" value="Search">
					</li>
				</ul>
			</div>
		</aside>

		<div class="content">
			<ul class="discover-list">
				<li class="discover-list-li">
					<a href="#">
						<img src="images/teaser1.png" />
						<div class="discover-banner">
	 						<img class="discover-marker" src="images/marker_map.png">
	 						<p class="discover-name">Tom</p>
							<p class="discover-price">&#8364; 8</p>
						</div>
					</a>
				</li>
				<li class="discover-list-li">
					<a href="#">
						<img src="images/teaser2.png" />
						<div class="discover-banner">
							<img class="discover-marker" src="images/marker_map.png">
							<p class="discover-name">Guillaume</p>
							<p class="discover-price">&#8364; 10</p>
						</div>
					</a>
				</li>
				<li class="discover-list-li">
					<a href="#">
						<img src="images/teaser3.png" />
						<div class="discover-banner">
 							<img class="discover-marker" src="images/marker_map.png">
 							<p class="discover-name">Mark</p>
							<p class="discover-price">&#8364; 12</p>
						</div>
					</a>
				</li>
				<li class="discover-list-li">
					<a href="#">
						<img src="images/teaser4.png" />
						<div class="discover-banner">
	 						<img class="discover-marker" src="images/marker_map.png">
	 						<p class="discover-name">Tony</p>
							<p class="discover-price">&#8364; 8</p>
						</div>
					</a>
				</li>
				<li class="discover-list-li">
					<a href="#">
						<img src="images/teaser5.png" />
						<div class="discover-banner">
							<img class="discover-marker" src="images/marker_map.png">
							<p class="discover-name">Julien</p>
							<p class="discover-price">&#8364; 10</p>
						</div>
					</a>
				</li>
				<li class="discover-list-li">
					<a href="#">
						<img src="images/teaser6.png" />
						<div class="discover-banner">
 							<img class="discover-marker" src="images/marker_map.png">
 							<p class="discover-name">Greg</p>
							<p class="discover-price">&#8364; 12</p>
						</div>
					</a>
				</li>
			</ul>
			&nbsp;
			<a href="#" class="morebikes">More bikes?</a>
		</div>
	
	<?php 
		include('footer.php') 
	?>
	<?php 
		include('scripts.php');
	?>
</body>
</html>