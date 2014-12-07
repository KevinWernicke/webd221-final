<?php 
$page = "home";
$page_title = "UIBrush | Home";
include "includes/header.php";
?>

	<section id="heroImage">
		<div class="slider">
			<img src="images/heroImage.jpg">
			<div class="image-text containter clearfix">
				<span class="left-arrow"></span><!-- change class -->
				<h1><span class="span1">Welcome To UIBrush</span></h1>
				<h2><span class="span1">We Provide Ultimate Free PSD Templates</span></h2>
				<span class="right-arrow"></span>
			</div>
		</div>
	</section>

	<section id="heroInfo">
		<h2>Lorem ipsum dolor sit amet <span>CONSECTETUER ADIPISCING ELIT</span></h2>
	</section>

	<section id="uiBrush" class="container clearfix">
		<div class="section-title-info">
			<h1><span>UIBrush</span></h1>
			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</h4>
		</div>
		
		<div class="content-container clearfix">
			<div class="content-block home-info">
				<i class="fa fa-list"></i>
				<h3>Innovative Design</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</p>
			</div>

			<div class="content-block">
				<i class="fa fa-code"></i>
				<h3>Clean Coding</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</p>
			</div>

			<div class="content-block">
				<i class="fa fa-location-arrow"></i>
				<h3>Quick Delivery</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</p>
			</div>

			<div class="content-block">
				<i class="fa fa-phone"></i>
				<h3>Best Support</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</p>
			</div>
		</div>	
	</section>

	<section id="recentProjects" class="container clearfix">
		<div class="section-title-info">
			<h1><span>Recent Projects</span></h1>
			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</h4>
		</div>	

		<div class="content-container clearfix">
			<div class="content-block-2">
				<img src="images/portfolio1.jpg">
				<h4>Portfolio One</h4><hr>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>

			<div class="content-block-2">
				<img src="images/portfolio2.jpg">
				<h4>Portfolio Two</h4><hr>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>

			<div class="content-block-2">
				<img src="images/portfolio3.jpg">
				<h4>Portfolio Three</h4><hr>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>

			<div class="content-block-2">
				<img class="hover" src="images/portfolio4.jpg">
				<h4>Portfolio Four</h4><hr>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</div>	
	</section>

	<?php include "includes/footer.php";?>
</body>
</html>