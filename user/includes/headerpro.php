<?
session_start();
include "../../admin/config/Database.php"

?>



<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="https://techsolutionshere.com/wp-content/themes/techsolution/assets/blog-post-css-js/meanmenu.css">
    <style>
    body{
      font-family: 'Poppins', sans-serif;
    }
    </style>
  </head>

  <body>
<!-- <header class="bg-dark" style="position:fixed; top:0px; width:100%">
    <nav class="navbar navbar-expand-md" style="height:50px">
      <a class="navbar-brand" href="#">
        <img src="./imgs/logo.png" height="30" alt="image">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav11" aria-controls="navbarNav11" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav11">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <a class="btn btn-outline-light ml-md-3" href="../includes/signout.php">Logout</a>
    </nav>
  </div>
</header> -->

<!-- Start Navbar Area -->
<div class="navbar-area">
	<!-- Menu For Mobile Device -->
	<div class="mobile-nav">
		<a href="#" class="logo">
			Alumni
		</a>
	</div>

	<!-- Menu For Desktop Device -->
	<div class="main-nav">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
				<a class="navbar-brand" href="#">
					Logo
				</a>
				<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="../profile/profile.php" class="nav-link active">Home</a>
						</li>
						<li class="nav-item">
							<a href="../profile/mypage.php" class="nav-link">Profile</a>
						</li>
						<li class="nav-item">
							<a href="../profile/mypost.php" class="nav-link">My Posts</a>
						</li>
						<li class="nav-item">
							<a href="../profile/gallery.php" class="nav-link">Gallery</a>
						</li>
						<li class="nav-item">
							<a href="../profile/contact.php" class="nav-link">Contact</a>
						</li>
						<li class="nav-item">
            <a class="nav-link" href="../includes/signout.php">Logout</a>
						</li>
						<!-- <li class="nav-item">
							<a href="#" class="nav-link dropdown-toggle">Pages</a>
							<ul class="dropdown-menu">
								<li class="nav-item">
									<a href="#" class="nav-link">About</a>
								</li>
							</ul>
						</li> -->
					</ul>
				</div>
			</nav>
		</div>
	</div>

</div>
<!-- End Navbar Area -->
	<!-- JQuery Min JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- MeanMenu JS -->
<script src="https://techsolutionshere.com/wp-content/themes/techsolution/assets/blog-post-css-js/jquery.meanmenu.js"></script>
<script>
	// Mean Menu
	jQuery('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	});
</script>
  </body>
</html>
