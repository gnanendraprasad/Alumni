<?php session_start();
require "includes/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Student Connect</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
<link href="css/postgrid.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
	<?php
	include "includes/headerpro.php";
	?>
	<section id="banner">

	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Hello <?php $sql = "select * from users where user_usn='".$_SESSION["log_id"]."'";
										$result = mysqli_query($conn,$sql);
										$row = mysqli_fetch_assoc($result);
										echo $row["name"]; ?></h3>
					<p>You are one of the precious elements of the community.</p>

                </div>
              </li>
              <li>
                <img src="img/slides/2.jpg" alt="" />
                <div class="flex-caption">
				<h3>Let's Connect</h3>
					<p>"Seek connection not attention. It lasts longer."</p>

                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->

	</section>
	<section id="call-to-action-2">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-sm-9">
					<h3>Welcome to Alumni Association</h3>
					<p>More description about alumni association with respect to dedicated institute, customized.</p>
				</div>
				<div class="col-md-2 col-sm-3">
					<a href="#" class="btn btn-primary">Learn More</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Posts Grid Start -->
	<?php
	include "includes/myposts.php"
	?>
	<!-- End of Posts Grid -->


<!--
	<section id="content">


	<div class="container">
	    	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">Our Services</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
				<br/>
			</div>
		</div>
			<div class="row">
		<div class="skill-home"> <div class="skill-home-solid clearfix">
		<div class="col-md-3 text-center">
		<span class="icons c1"><i class="fa fa-trophy"></i></span> <div class="box-area">
		<h3>Web Development</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
		</div>
		<div class="col-md-3 text-center">
		<span class="icons c2"><i class="fa fa-picture-o"></i></span> <div class="box-area">
		<h3>UI Design</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
		</div>
		<div class="col-md-3 text-center">
		<span class="icons c3"><i class="fa fa-desktop"></i></span> <div class="box-area">
		<h3>Interaction</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
		</div>
		<div class="col-md-3 text-center">
		<span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
		<h3>User Experience</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
		</div></div>
		</div></div>
		</div>


	</div>
	</section>

	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>About Us</h2>
						<p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
						<p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>

						<ul>
							<li>Lorem ipsum dolor sit amet</li>
							<li>consectetur adipiscing elit</li>
							<li>Curabitur aliquet quam id dui</li>
							<li>Donec sollicitudin molestie malesuada.</li>
						</ul>
						<a href="#" class="btn btn-primary">Learn More</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="img/about.jpg" alt="About Images">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="clients">
        <div class="container">
            	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">Clients</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
				<br/>
			</div>
		</div>
            <div class="row">
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
            </div>
        </div>
    </section> -->
	<?php
	include "includes/footerpro.php";
	?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
