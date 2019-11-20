<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<?php 
	include "includes/headerpro.php"; 
	?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Gallery</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
	
						<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Happy Moments</h3>
									<h5> Your precious memories are always here for you!!</h5>
									<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
								</div>  
							</div>
						</div>
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">All</a></li>
					<li class="web"><a href="#" title="">web</a></li>
					<li class="icon"><a href="#" title="">College Fest</a></li>
					<li class="graphic"><a href="#" title="">Graduation</a></li>
				</ul>
				<div class="clearfix">
				</div>
				
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Description" href="img/works/1.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/1.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Description" href="img/works/2.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/2.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="graphic">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Description" href="img/works/3.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/3.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Description" href="img/works/4.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/4.jpg" alt="">
						</li>
						<!-- End Item Project -->
					</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
	</section>
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
</body>
</html>