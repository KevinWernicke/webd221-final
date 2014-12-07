<?php 
$page = "contact";
$page_title = "UIBrush | Contact";
include "includes/header.php";
?>

	<section id="heroImageContact">
		<div class="image-text containter clearfix">
			<h3>Talk <span>To Us</span></h3>
			<h4>
				Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio 
				nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.
			</h4>
		</div>
	</section>

	<div class="section-title-info container">
		<h1><span>Contact Us</span></h1>
		<h4>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.  Lorem ipsum dolor       sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
		</h4>
	</div>

	<section id="contact" class="container clearfix">
		<div id="map-canvas"></div>

		<div id="contact-info">
			<h2>Contact Details:</h2>
			<div class="contact-data clearfix">
				<i class="fa fa-phone"></i>
				<h4>(+1) 306 587 3290</h4>
			</div>
			<div class="contact-data clearfix">
				<i class="fa fa-envelope-o"></i><h4>kevinwernicke@hotmail.com</h4>
			</div>
			<div class="contact-data clearfix">
				<i class="fa fa-map-marker"></i><h4>211 1st Street South,<br>Cabri Saskatchewan</h4>
			</div>

			<form>
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="email" placeholder="Email">
				<textarea name="message" placeholder="Message"></textarea>
				<button id="submitBtn">Submit</button>
			</form>
		</div>
	</section>

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize(){
			var mapCanvas = document.getElementById('map-canvas');
			var mapOptions = {
				center: new google.maps.LatLng(50.618268, -108.458199),
				zoom: 15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map(mapCanvas, mapOptions);
		};
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<?php include "includes/footer.php";?>
</body>
</html>	