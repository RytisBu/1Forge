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
		<?php include 'connect.php';?>
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
					<li><a href="generic.php">Generic</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>SignUp</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<div class="row">
							<div class="col-12 col-12-medium">

								<form method="post" action="">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="username" id="name" value="" placeholder="Username" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="email" id="email" value="" placeholder="E-Mail Adress" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="password" id="password" value="" placeholder="Password" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="cpassword" id="cpassword" value="" placeholder="Confirm Password" />
											</div>
											<div class="col-6 col-12-small">
												<input type="checkbox" id="checkbox-alpha" name="checkbox">
												<label for="checkbox-alpha">I have read and agree to the Privacy Policy, Terms of Use and License Agreement</label>
											</div>
											<!-- Break -->
											<div class="col-5 col-12-xsmall">
												<ul class="actions">
													<li><input type="submit" value="Sign up" class="primary" name="signup"/></li>
												</ul>
											</div>
										</div>
									</form>
									<?php 
$error;
if(isset($_POST['signup']) && isset($_POST['checkbox']) && !empty($_POST['password']) && !empty($_POST['username']) && !empty($_POST['cpassword']) && !empty($_POST['email'])){
	if($_POST['password'] == $_POST['cpassword']){
		$exist = FALSE;
		$sql = "SELECT * FROM Users";
		$result = $conn->query($sql);		
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
			        if($row['username'] == $_POST['username'] || $row['password'] == $_POST['password'] || $row['email'] == $_POST['email']){
			        	$exist = TRUE;
			        }
			    }
			}
		if($exist == FALSE){
			$sql = "INSERT INTO Users (username, email, password) VALUES ('".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."')";
		$conn->query($sql) or die("Duomenys neikelti..."); 
		header("location: signin.php");
		}else if($exist == TRUE){
			$error = "Slapyvardis, slaptazodis arba elektroninis pastas yra jau panaudoti, prasome naudoti kita informacija...";
			echo "<b class='error_message' style='color:red;'>".$error."</b>";
		}	

		


	}else if($_POST['password'] != $_POST['cpassword']){
		$error = "Įvestas pakartotinis slaptažodis nesutampa su pirminiu slaptažodžiu...";
		echo "<b class='error_message' style='color:red;'>".$error."</b>";
	}
	


}else if(isset($_POST['signup']) && (!isset($_POST['checkbox']) || empty($_POST['password']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['cpassword']))){
	if(!isset($_POST['checkbox'])){
		$error = "Norint užsiregistruoti, reikia sutikti su naudojimosi sąlygomis...";
	}elseif(empty($_POST['username'])){
		$error = "Privalote užpildyti username langą...";
	}elseif(empty($_POST['password'])){
		$error = "Privalote užpildyti Password langą...";
	}elseif(empty($_POST['cpassword'])){
		$error = "Privalote užpildyti Confirm Password langą...";
	}elseif(empty($_POST['email'])){
		$error = "Privalote įrašyti savo elektroninį paštą...";
	}
	echo "<b class='error_message'>".$error."</b>";
}
?>
							</div>
						</div>
					</div>
				</div>
			</section>






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