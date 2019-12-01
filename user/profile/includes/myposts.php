<?php ?>


<link href="css/post.css" rel="stylesheet" />
<link href="css/font-awesome.css" rel="stylesheet"/>

<section id="posts">
	<div class="postwrap">


<!-- News post starts -->
		<div class="n">
            <div class="header-posts">News</div>
                <div class="post-contain">
                <div class="force-overflow">
                <div class="post-scrollbar" id="style-8">
									<?php
	                $sql="Select * from post";
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
	                echo '<div class="post-cover">
                        <div class="post">
                            <div class="datepost">
                            <span>Nov<i>29</i>2019</span>
                            </div>
                            <div class="innercontent">
                            <img src="img/icons/new.gif" alt="new gif Image">'.$field2name.'
                            </div>
                        </div>
                        <hr class="hr">
                    </div>';

	                    }
	                }
	                /* free result set */
	            $result->free();
	            }
	            ?>

                  
                    <p></p>
                    </div>
                </div>
                </div>
            <div class="content-posts"></div>
        </div>

<!-- News post ends -->

<!-- Upcoming events starts -->
		<div class="ue">
            <div class="header-posts">Upcoming Events</div>
            <div class="ue-contain" id="style-1">
							<?php
							$sql="Select * from post";
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
							echo '<div class="ue-posts-cover">
									<div class="ue-posts">
									<div class="ue-icon">
									</div>
									<div class="ue-info">
											<div class="ue-desc">
													<p>'.$field2name.'
											</div>
											</div>
									</div>
									<div class="ue-separator"></div>
							</div>';

									}
							}
							/* free result set */
					$result->free();
					}
					?>

            </div>
            <div class="content-posts"></div>
        </div>

<!-- Upcoming events ends -->


<!-- Job posts starts -->
		<div class="j">
            <div class="header-posts">Jobs</div>
            <div class="job-contain" id="style-1">
							<?php
							$sql="Select * from post";
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
							echo '<div class="job-posts-cover">
									<div class="job-posts">
									<div class="job-icon">
											<img src="img/icons/briefcase.png"/>
									</div>
									<div class="job-info">
											<div class="job-desc">
													<p>'.$field2name.'</div>
											<div class="job-apply">
													<input type="button" class="btn btn-secondary pull-left" id="learn-more"value="Learn More"/>
													<input type="button" class="btn btn-primary pull-right" id="apply-now" value="Apply Now"/>
											</div>
											</div>
									</div>
									<div class="job-separator"></div>
							</div>';

									}
							}
							/* free result set */
					$result->free();
					}
					?>

            </div>
			<div class="content-posts"></div>
		</div>
	</div>
    </section>
<!-- Job posts ends -->

<script>
    $(document).ready(function () {
          if (!$.browser.webkit) {
              $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
          }
      });
</script>
