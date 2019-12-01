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
                                    <h3>Post <span class="color">to Alumni</span></h3>
                                    <p></P>
								</div>
								<a href="newpost.php" class="btn btn-primary pull-left">Create Post</a>
							</div>
						</div>

						    <!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-bell-o"></i>
                <div class="info-blocks-in" style="padding-left:10px;">
                    <h3>Events</h3>
                    <p>All the recent events posted by you on events!!</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-briefcase"></i>
                <div class="info-blocks-in">
                    <h3>Jobs</h3>
                    <p>All the job opportunities for alumni posted by you!!</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-newspaper-o" area-hidden="true"></i>
                <div class="info-blocks-in">
                    <h3>News</h3>
                    <p>All posts based on the news category posted by you!!</p>
                </div>
            </div>
        </div>
        <!-- End Info Blcoks -->






        <div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">
               <!--<img class="img-responsive" src="img/service1.jpg" alt="">
                <h3>Events Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus</p>-->
                <div class="row-md-4">
                <?php
                $sql="Select * from post where user_id='".$_SESSION["log_id"]."' order by ptype";
                if ($result = $conn->query($sql)) {
                /* fetch associative array */
                while ($row = $result->fetch_assoc()) {
                        $fieldid = $row["pid"];
                        $field1name = $row["ptype"];
                        $field2name = $row["description"];

                        /*To set date and time for each post

                        date_default_timezone_set('Asia/Kolkata');
                        $timestamp = $_SERVER['REQUEST_TIME'];
                        $date = date('d/m/Y h:i:sa', time());
                        */
                        if($field1name=="EVENT"){
                echo '
                <div class="row">
                <div class="col-sm-12">
                <img class="img-responsive" src="img/service1.jpg" alt="">
                <h3>'.$field1name.'</h3>
                <p>'.$field2name.'</p>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <!--- Fetching the current log_id using post method to edit post-->
                    <form id="edit" action="includes/editpost.php" method="post">
                    <input type="hidden" name="fieldid" value="'.$fieldid.'">

                    </form>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <!--- Fetching the current log_id using post method to delete post-->
                    <form id="deleteb" action="includes/deletepost.php" method="post">
                    <input type="hidden" name="fieldid" value="'.$fieldid.'">
                    <button class="btn btn-primary pull-next" type="submit" >Delete</button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>';
                    }
                }
                /* free result set */
            $result->free();
            }
            ?>
            </div>
            </div>


            <div class="col-md-4">
                <div class="row-md-4">
                <?php
                $sql="Select * from post where user_id='".$_SESSION["log_id"]."' order by ptype";
                if ($result = $conn->query($sql)) {
                /* fetch associative array */
                while ($row = $result->fetch_assoc()) {
                        $fieldid = $row["pid"];
                        $field1name = $row["ptype"];
                        $field2name = $row["description"];

                        /*To set date and time for each post

                        date_default_timezone_set('Asia/Kolkata');
                        $timestamp = $_SERVER['REQUEST_TIME'];
                        $date = date('d/m/Y h:i:sa', time());
                        */
                        if($field1name=="JOB"){
                echo '
                <div class="row">
                <div class="col-sm-12">
                <img class="img-responsive" src="img/service2.jpg" alt="">
                <h3>'.$field1name.'</h3>
                <p>'.$field2name.$fieldid.'</p>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <!--- Fetching the current log_id using post method to edit post-->
                    <form id="edit" action="includes/editpost.php" method="post">
                    <input type="hidden" name="fieldid" value="'.$fieldid.'">

                    </form>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <!--- Fetching the current log_id using post method to delete post-->
                    <form id="deleteb" action="includes/deletepost.php" method="post">
                    <input type="hidden" name="fieldid" value="'.$fieldid.'">
                    <button class="btn btn-primary pull-next" type="submit" >Delete</button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>';
                    }
                }
                /* free result set */
            $result->free();
            }
            ?>
            </div>
            </div>


            <div class="col-md-4 md-margin-bottom-40">
            <div class="row-md-4">
                <?php
                $sql="Select * from post where user_id='".$_SESSION["log_id"]."' order by ptype";
                if ($result = $conn->query($sql)) {
                /* fetch associative array */
                while ($row = $result->fetch_assoc()) {
                        $fieldid = $row["pid"];
                        $field1name = $row["ptype"];
                        $field2name = $row["description"];

                        /*To set date and time for each post

                        date_default_timezone_set('Asia/Kolkata');
                        $timestamp = $_SERVER['REQUEST_TIME'];
                        $date = date('d/m/Y h:i:sa', time());
                        */
                        if($field1name=="NEWS"){
                echo '
                <div class="row">
                <div class="col-sm-12">
                <img class="img-responsive" src="img/service3.jpg" alt="">
                <h3>'.$field1name.'</h3>
                <p>'.$field2name.'</p>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <!--- Fetching the current log_id using post method to edit post-->
                    <form id="edit" action="includes/editpost.php" method="post">
                    <input type="hidden" name="fieldid" value="'.$fieldid.'">

                    </form>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <!--- Fetching the current log_id using post method to delete post-->
                    <form id="deleteb" action="includes/deletepost.php" method="post">
                    <input type="hidden" name="fieldid" value="'.$fieldid.'">
                    <button class="btn btn-primary pull-next" type="submit" >Delete</button>
                    </form>
                    </div>
                </div>
                </div>';
                    }
                }
                /* free result set */
            $result->free();
            }
            ?>
            </div>
            </div>
        </div>
        <!-- End Service Blcoks -->




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
