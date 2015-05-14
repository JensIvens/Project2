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
<!-- 		<img src="images/teaser1.png">
 -->	</section>
		
		<aside class="filters">
			<span id="filters-display">Book: <i class="fa fa-arrow-circle-down"></i></span>
			<div id="filterlist">
				<ul>
					<li>
						<p>Start date:</p>
						<form>
							<input type="date" id="startdate">	
						</form>
					</li>
					<li>
						<p>End date:</p>
						<form>
							<input type="date" id="enddate">	
						</form>
					</li>
					<li>
						<p>Price: &#8364; 15</p>				
					</li>
					<li>
						<input type="submit" class="btnsearch" value="Book">
					</li>
				</ul>
			</div>
		</aside>

		<div class="content">
			<ul class="discover-list">

			</ul>
		</div>
	
	<?php 
		include('footer.php') 
	?>
	<?php 
		include('scripts.php');
	?>
</body>
</html>