<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="Author" content="Kevin W">
	<title><?php echo $page_title;?></title>
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/allstyles.css">
</head>
<body>
	<header class="container">
		<nav class="clearfix">
			<h2><span>UI</span>Brush</h2>
			<span class="fa fa-bars fa-2x" title="menu"></span>

			<ul class="dropdown">
				<li <?php if( $page == "home"){echo 'class="active"';}?>><a href="index.php">HOME</a></li>
				<li <?php if( $page == "about"){echo 'class="active"';}?>><a href="about_us.php">ABOUT US</a></li>
				<li><a href="#">SERVICES</a></li>
				<li><a href="#">PORTFOLIO</a></li>
				<li <?php if( $page == "contact"){echo 'class="active"';}?>><a href="contact.php">CONTACT US</a></li>
			</ul>
		</nav>	
	</header>