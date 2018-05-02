<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Forge website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<?php 
		include 'connect.php';
			session_start();
		?>
		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">Forge</a>
				<nav>
					<a href="#menu">Menu</a>
					<?php
						if(!empty($_SESSION['user_username'])){
							echo "<a href='userpage.php' class='logo logousr'> ".$_SESSION['user_username']." </a>";
						}
					?>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="packages.php">Packages and priceing</a></li>
					<?php 
						if(!empty($_SESSION['user_username'])){
							echo "<li><a href='userpage.php'> ".$_SESSION['user_username']." profile </a></li>";
							echo "<li><a href='signout.php'>SignOut</a></li>";
						}
					?>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Generic Page</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content userpage">
						<ul>
							<li class="activee"><a href="myservices.php">My services</a></li>
							<li><a href="customersupport.php">Customer support</a></li>
							<li><a href="customersupport.php">Billing</a></li>
							<li><a href="userpage.php">My account</a></li>
						</ul>
					</div>	
					

					<div class="content">
						<h2>Forex Quote API</h2><br>
						<b>API Key </b><br><br>
						<p>jqRLK2KUGExSlskI3oELzonT8TqEjzXP</p><br>
						<b>Plan</b><br>
						<?php
						if(isset($_SESSION['user_userservices'])){
							if($_SESSION['user_userservices'] == '1'){
								echo "<p>Free</p><br>";
							}elseif($_SESSION['user_userservices'] == '2'){
								echo "<p>90$ plan</p><br>";
							}elseif($_SESSION['user_userservices'] == '3'){
								echo "<p>350$ plan</p><br>";
							}
						}
						?>
						<b>Quota Used</b><br>
						<p>0/1,000 (0.00%)</p><br>
					</div>
					
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Accumsan montes viverra</h3>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
						</section>
						<section>
							<h4>Sem turpis amet semper</h4>
							<ul class="alt">
								<li><a href="#">Dolor pulvinar sed etiam.</a></li>
								<li><a href="#">Etiam vel lorem sed amet.</a></li>
								<li><a href="#">Felis enim feugiat viverra.</a></li>
								<li><a href="#">Dolor pulvinar magna etiam.</a></li>
							</ul>
						</section>
						<section>
							<h4>Magna sed ipsum</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		<?php $conn->close(); ?>
	</body>
</html>