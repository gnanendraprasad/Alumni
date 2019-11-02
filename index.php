<?php

if (isset($_GET['error'])) {
	if ($_GET['error']=='emptyfields') {
		echo '<script>alert("Fill all the details")</script>';
	}
	else if ($_GET['error']=='sqlerror') {
		echo '<script>alert("Refresh and try again")</script>';
	}
	else if ($_GET['error']=='invalidPassword') {
		echo '<script>alert("Incorrect password")</script>';
	}
	else if ($_GET['error']=='invalidemail') {
		echo '<script>alert("Invalid Email")</script>';
	}
	else if ($_GET['error']=='invalidusername') {
		echo '<script>alert("Invalid Username")</script>';
	}	
	else if ($_GET['error']=='invalidmailuid') {
		echo '<script>alert("Invalid email and username")</script>';
	}
	else if($_GET['error']=='useralreadyexist') {
		echo '<script>alert("User Already Exist, Dont play with me nigga")</script>';
	}
}

if (isset($_GET['signup'])) {
	if ($_GET['signup']=='success') {
		echo '<script>alert("SignUp Success. u can now f with my web app")</script>';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/font.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="includes/signup.php" method="POST">
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your email for registration</span>
	<input type="text" name="name" placeholder="Name">
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<button type="submit" name="submit-signup">SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="includes/signin.php" method="POST">
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your account</span>
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<a href="#">Forgot Your Password</a>

	<button>Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>
<script type="text/javascript" src="js/signinc.js"></script>
</body>
</html>
