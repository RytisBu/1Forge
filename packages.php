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
					<div class="content packages_list">
						<div class="fpkg pkg col-sm-4 ">
							<div class="top_title">
								<h2>Free</h2>
							</div>
							
							<br>
							<h3>Update frequency</h3>
							<p>In - 100 updates per second!</p><br>
							<h3>Currency pairs</h3>
							<p>In - Over 700 currency pairs</p><p> + gold and silver</p><br>
							<h3>REST Rate Limiting</h3>
							<p>1,000 requests per day</p><br>
							<h3>WebSocket Support</h3>
							<p>none</p><br>
							<h3>Delivery formats</h3>
							<p>JSON and XML</p><br>
							<h3>Redundancy</h3>
							<p>Basic</p><br>
							<h3>Encryption</h3>
							<p>256-bit</p><br>

							<form action="#" method="post">
								<input type="submit" name="fp" value="Get started" class="primary">
							</form>

						</div>
						<div class="spkg pkg col-sm-4">
							<div class="top_title">
								<h2>$90 / mo</h2>
							</div>
							<br>
							<h3>Update frequency</h3>
							<p>In - 100 updates per second!</p><br>
							<h3>Currency pairs</h3>
							<p>In - Over 700 currency pairs</p><p> + gold and silver</p><br>
							<h3>REST Rate Limiting</h3>
							<p>1,000 requests per day</p><br>
							<h3>WebSocket Support</h3>
							<p>none</p><br>
							<h3>Delivery formats</h3>
							<p>JSON and XML</p><br>
							<h3>Redundancy</h3>
							<p>Basic</p><br>
							<h3>Encryption</h3>
							<p>256-bit</p><br>
							<form action="#" method="post">
								<input type="submit" name="sp" value="Get started" class="primary">
							</form>
						</div>
						<div class="tpkg pkg col-sm-4">
							<div class="top_title">
								<h2>$350 / mo</h2>
							</div>
							<br>
							<h3>Update frequency</h3>
							<p>In - 100 updates per second!</p><br>
							<h3>Currency pairs</h3>
							<p>In - Over 700 currency pairs</p><p> + gold and silver</p><br>
							<h3>REST Rate Limiting</h3>
							<p>1,000 requests per day</p><br>
							<h3>WebSocket Support</h3>
							<p>none</p><br>
							<h3>Delivery formats</h3>
							<p>JSON and XML</p><br>
							<h3>Redundancy</h3>
							<p>Basic</p><br>
							<h3>Encryption</h3>
							<p>256-bit</p><br>
							<form action="#" method="post">
								<input type="submit" name="tp" value="Get started" class="primary">
							</form>
							
						</div>
						<?php 
						if(!empty($_SESSION['user_username'])){
							if(isset($_POST['fp'])){
								$sql = "UPDATE Users SET services = '1' WHERE username = '".$_SESSION['user_username']."'";
								$conn->query($sql) or die(mysql_error());
								$_SESSION['user_userservices'] = '1';
							}else if(isset($_POST['sp'])){
							$sql = "UPDATE Users SET services = '2' WHERE username = '".$_SESSION['user_username']."'";
								$conn->query($sql) or die(mysql_error());
								$_SESSION['user_userservices'] = '2';
							}else if(isset($_POST['tp'])){
							$sql = "UPDATE Users SET services = '3' WHERE username = '".$_SESSION['user_username']."'";
								$conn->query($sql) or die(mysql_error());
								$_SESSION['user_userservices'] = '3';
							}else{

							}
						}
						
						?>
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