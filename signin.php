<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Forge login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<?php include 'connect.php'; ?>
		<?php
								$current_user;
								if(isset($_POST['signin'])){
									$sql = "SELECT * FROM Users";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
									    while($row = $result->fetch_assoc()) {
									        if($row['email'] == $_POST['email'] && $row['password'] == $_POST['password']){
									        	session_start();
									        	$_SESSION['user_username'] = $row['username'];
									        	$_SESSION['user_useremail'] = $row['email'];
									        	$_SESSION['user_password'] = $row['password'];
									        	$_SESSION['user_userservices'] = $row['services'];
									        	$current_user = $row;
									        	break;
									        }
									    }
									}
								}

								if(isset($_SESSION['user_username'])){
									header("location: userpage.php");
								}
								?>
		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.php">Forge</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="signin.php">SignIn</a></li>
					<li><a href="userpage.php"><?php echo $_SESSION['user_username']; ?></a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>SignIn</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

					<!-- Elements -->
						<div class="row">
							<div class="col-12 col-12-medium">
								<form method="post" action="">
									<div class="row gtr-uniform">
										<div class="col-6 col-12-xsmall">
											<input type="email" name="email" id="name" value="" placeholder="E-Mail Adress" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="password" id="password" value="" placeholder="Password" />
										</div>
											<!-- Break -->
										<div class="col-6 col-12-xsmall">
											<ul class="actions">
												<li><input type="submit" value="Sign in" class="primary" name="signin"/></li>
											</ul>
										</div>
										<div class="col-6 col-12-xsmall">
											<ul class="actions">
												<li><a href="signup.php">Sign up now!</a></li>
											</ul>
										</div>
									</div>
								</form>
								
							</div>
							<div class="col-6 col-12-medium">

								<!-- Buttons -->
									<h3>Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary large">Large</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button small">Small</a></li>
										<li><a href="#" class="button wide">Wide</a></li>
									</ul>
									<ul class="actions fit">
										<li><a href="#" class="button primary fit">Fit</a></li>
										<li><a href="#" class="button fit">Fit</a></li>
									</ul>
									<ul class="actions fit">
										<li><a href="#" class="button primary fit small">Fit + Small</a></li>
										<li><a href="#" class="button fit small">Fit + Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon fa-search">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Primary</span></li>
										<li><span class="button disabled">Default</span></li>
									</ul>

								<!-- Form -->
									<h3>Form</h3>
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="name" id="name" value="" placeholder="Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="email" name="email" id="email" value="" placeholder="Email" />
											</div>
											<!-- Break -->
											<div class="col-12">
												<select name="category" id="category">
													<option value="">- Select -</option>
													<option value="alpha">Option alpha</option>
													<option value="beta">Option beta</option>
													<option value="gamma">Option gamma</option>
													<option value="delta">Option delta</option>
													<option value="epsilon">Option epsilon</option>
													<option value="zeta">Option zeta</option>
													<option value="eta">Option eta</option>
													<option value="theta">Option theta</option>
												</select>
											</div>
											<!-- Break -->
											<div class="col-4 col-12-small">
												<input type="radio" id="radio-alpha" name="radio" checked>
												<label for="radio-alpha">Radio alpha</label>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="radio-beta" name="radio">
												<label for="radio-beta">Radio beta</label>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="radio-gamma" name="radio">
												<label for="radio-gamma">Radio gamma</label>
											</div>
											<!-- Break -->
											<div class="col-6 col-12-small">
												<input type="checkbox" id="checkbox-alpha" name="checkbox">
												<label for="checkbox-alpha">Checkbox alpha</label>
											</div>
											<div class="col-6 col-12-small">
												<input type="checkbox" id="checkbox-beta" name="checkbox" checked>
												<label for="checkbox-beta">Checkbox beta</label>
											</div>
											<!-- Break -->
											<div class="col-12">
												<textarea name="textarea" id="textarea" placeholder="Alpha beta gamma delta" rows="6"></textarea>
											</div>
											<!-- Break -->
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Submit Form" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>

								<!-- Image -->
									<h3>Image</h3>
									<h4>Fit</h4>
									<span class="image fit"><img src="images/pic01.png" alt="" /></span>
									<div class="box alt">
										<div class="row gtr-50 gtr-uniform">
											<div class="col-4"><span class="image fit"><img src="images/pic01.png" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.png" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.png" alt="" /></span></div>
											<!-- Break -->
											<div class="col-4"><span class="image fit"><img src="images/pic01.png" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.png" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.png" alt="" /></span></div>
											<!-- Break -->
											<div class="col-4"><span class="image fit"><img src="images/pic01.png" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.png" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.png" alt="" /></span></div>
										</div>
									</div>
									<h4>Left &amp; Right</h4>
									<p>
										<span class="image left"><img src="images/pic02.png" alt="" /></span>
										Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget.
										tempus euismod. Magna et cursus lorem faucibus vestibulum. Blandit adipiscing eu
										felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque
										praesent tincidunt felis sagittis eget. tempus euismod tempus. Vestibulum ante ipsum
										primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac
										adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis
										sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum.
										Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.
										Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida lorem ipsum dolor
										sit amet dolor feugiat consequat.
									</p>
									<p>
										<span class="image right"><img src="images/pic02.png" alt="" /></span>
										Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget.
										tempus euismod. Magna et cursus lorem faucibus vestibulum. Blandit adipiscing eu
										felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque
										praesent tincidunt felis sagittis eget. tempus euismod tempus. Vestibulum ante ipsum
										primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac
										adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis
										sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum.
										Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.
										Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida lorem ipsum dolor
										sit amet dolor feugiat consequat.
									</p>

								<!-- Box -->
									<h3>Box</h3>
									<div class="box">
										<p>Felis sagittis eget tempus primis in faucibus vestibulum. Blandit adipiscing eu
										felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque
										praesent tincidunt felis sagittis eget. tempus euismod. Magna sed etiam ante ipsum
										primis in faucibus vestibulum. Blandit adipiscing eu ipsum primis in faucibus
										vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu
										faucibus lorem ipsum dolor sit amet nullam.</p>
									</div>

								<!-- Preformatted Code -->
									<h3>Preformatted</h3>
									<pre><code>i = 0;

	while (!deck.isInOrder()) {
	    print 'Iteration ' + i;
	    deck.shuffle();
	    i++;
	}

	print 'It took ' + i + ' iterations to sort the deck.';
	</code></pre>

							</div>
						</div>
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