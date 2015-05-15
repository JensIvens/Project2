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
	 
	<section id="bikepicture">
		<a href="images/teaser1.png" data-lightbox="image-1" data-title="Teaser 1">Image</a>
 	</section>


	<div class="content content-bike">
		<a href="#" onclick="return false;" class="btnbook"> Request to book</a>
		<div class="bike-details">
			<div class="owner">
				<img src="images/profile.jpg">
				<p class="bike-details-name-owner">Jens</p>
				<h4>BMC Concept bike</h4>
				<p class="bike-location">Mechelen</p>
				<div class="bike-review-stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>	
				</div>
				<aside class="book-bike">
					<span id="book-bike-title">
						Book:
					</span>
					<div id="book-bike-details">
						<ul>
							<li>
								<p>From:</p>
								<form>
								<input type="date" id="startdate">
							</li>
							<li>
								<p>Until:</p>
								<input type="date" id="enddate">	
							</li>
							<li>
								<p>Price: &#8364; 15</p>				
							</li>
							<li>
								<input type='submit' value="Book!" class="bookbike">
								</form>
							</li>
						</ul>
					</div>
				</aside>
			</div>
			<div class="bike-details-about">
				<h4>About:</h4>
				<p>
					As a cyclist, you want a bike that represents you; your personality, your ride style, and your needs while out on the road. Is position on the bike your main priority? Maybe longer rides force you to become a combined mobile service station and food truck, with an extra tire, tube, pump, and enough food to feed an army? Or perhaps several hundred thousand kilometers ridden on a standard chain-driven machine has created a burning desire within for an entirely new ride experience? We have been listening to inputs from riders and professional athletes for years which has greatly influenced a unique collaborative approach to frame design. We’ve come up with a structure that is highly modular yet enables the integration of external add-ons such as solutions for hydration, tools, etc. We’ve found other functions for existing structures such as turning the down tube and seat tube fairings into batteries. We looked at aerodynamics and functionality and broke the rules just how we like it—exactly on our terms, with our people, at our R&D lab.

				</p>	
			</div>
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