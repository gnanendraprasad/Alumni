<?php
    session_start();
    require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>My Posts</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
 
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 
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
				<h2 class="pageTitle">My Posts</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container content">		
        <!-- Service Blcoks -->
			
				    <div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
                  <h1>Create New Post</h1>
                <hr/>
              </div>
            <div>
            <div class="row">
              <div class="col-md-12">
                <form id="new-post" action="includes/mynewpost.php" method="POST">
                <div class="form-group">
                <label>Select the type:</label>
                <select name="postbox" class="form-control">
                  <option value="NEWS" name="posttype">NEWS</option>
                  <option value="EVENT" name="posttype">EVENT</option>
                  <option value="JOB" name="posttype">JOB</option>
                </select>
                </div>
              </div>
            </div>
            <div class="row">  
              <div class="col-md-12">
              <label>Description:</label><textarea class="form-control" rows="5" id="comment" name="description"></textarea></<textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button class="btn btn-primary" type="submit" name="post-submit">Submit</button></div>
              </form>
            </div>  
        </div>
			</div>
      </div>
    </div>
</div>
            
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