<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="" content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>AlumniSpace</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header class="main-wrapper">
		<nav>
			<a href="#">
				<img src="img/logo.png" alt="logo" align='left' height='85px'>
			</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">SignUp</a></li>
			</ul>
			<div>
				<?php
          if (isset($_SESSION['userid'])) {
          	echo '<form action="includes/logout.inc.php" method="post">
							<button type="submit" name="logout-submit">Logout</button>
						</form>';
          }
					else{
						if (isset($_GET['error'])) {
							if ($_GET['error']=='noUser') {
								echo "No such user registered";
							}
							else if ($_GET['error']=='emptyFields') {
					      echo "Fill all the details";
					    }
							else if ($_GET['error']=='sqlerror') {
					      echo "Refresh and try again";
					    }
							else if ($_GET['error']=='invalidPassword') {
					      echo "Incorrect password";
					    }
						}
					  	echo '<form action="includes/login.inc.php" method="post">
							<input type="text" name="mailuid" placeholder="email/username">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="login-submit">Login</button>
						</form>

           	<a href="signup.php">SignUp</a>';
					}

			  ?>
			</div>
		</nav>
	</header>

</body>
</html>
