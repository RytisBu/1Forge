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
							<li><a href="myservices.php">My services</a></li>
							<li><a href="customersupport.php">Customer support</a></li>
							<li><a href="customersupport.php">Billing</a></li>
							<li class="activee"><a href="userpage.php">My account</a></li>
						</ul>
					</div>	
					<div class="content">
						<header>
							<h2><?php echo "Hello, ".$_SESSION['user_username']; ?></h2>
							<p>This is your profile personal information.</p>
						</header>
						<?php 
							echo "Vartotojas: <b>".$_SESSION['user_username']."</b><br>
							Vartotojo El. pastas: <b>".$_SESSION['user_useremail']."</b>";
						?>
						<br>
						<br>
						
					</div>

					<div class="content">
						<header>
							<h2>Change password</h2>
						</header>
						
							<form method="post" action="#">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="password" id="email" value="" placeholder="New Password" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="lastpass" id="name" value="" placeholder="Last Password" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="text" name="cpassword" id="password" value="" placeholder="Confirm New Password" />
									</div>
									<div class="col-5 col-12-xsmall">
										<ul class="actions">
											<li><input type="submit" value="Change password" class="primary" name="change"/></li>
										</ul>
									</div>
								</div>
							</form>

							<?php 
								if (isset($_POST['change']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['lastpass'])) {
									if($_SESSION['user_password'] == $_POST['lastpass']){
										if($_POST['password'] == $_POST['cpassword']){
											$pa = $_POST['password'];
											$sql = "UPDATE Users SET password = '$pa' WHERE username = '".$_SESSION['user_username']."' ";
											$conn->query($sql);
											echo "Slaptazodis sekmingai pakeistas!";
										}else{
											echo "Naujas slaptazodis nesutampa su pakartotiniu slaptazodziu...";
										}
									}else{
										echo "Netinkamai ivestas dabartinis jusu slaptazodis...";
									}
								}else if(isset($_POST['change'])){
									echo "Uzpildykite visus laukus...";
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