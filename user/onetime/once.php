<!DOCTYPE html>
<html lang="en">
<head>
<title>Update Profile</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="#" />
<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!--//online-fonts -->

<!-- custom css -->
<link rel="stylesheet" type="text/css" href="css/custom.css">
<!-- //custom css -->


<!--- date picker -->

<!--- // date picker -->


</head>
<body>
<div class="header">
	<h1>Update Profile</h1>
</div>
<div class="w3-main">
		<div class="form-w3l">
			<form action="signup.once.php" method="post">
				<table>
				<!--<tr><div class="img">
					<!-- <img src="images/profile.png" alt="image" height="100" width="100">
					<img id="fixedphoto" src="images/image.png" />
					<input id="myfile" type="file" name="profilephoto" placeholder="Photo" style="display:none" required="" capture>
					<script src="js/jquery.min.js"></script>
					<script type="text/x-javascript" src="js/inputpic.js"></script>
				</div></tr> -->

				<tr><h3>Please fill the details</h3></tr>

				<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="usn" placeholder="USN" required=""/>
					<div class="clear"></div>
				</div>
			<!--	<tr><div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
<<<<<<< HEAD
					<input type="text" name="middle_name" placeholder="middle name" required=""/>
					<div class="clear"></div>
					</div>
				<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="last_name" placeholder="last name" required=""/>
					<div class="clear"></div>
				</div>

				<div class="w3-user">
				<span id="data">Date of Birth</span>
				<div class="#">
				<input type="date" id="#" name="dob" value="dob" required="">
			</div>-->


					<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="name" placeholder="name" required=""/>
					<div class="clear"></div>
					</div>

				<tr><div class="w31-dob">
				<span class="customtext" id="data"><i class="fa fa-calendar w3l-3" id="cicon" aria-hidden="true"></i>DOB</span>
				<input type="date" id="datepicker" name="dob" value="dob" required="">
				<div class="empty"></div>
				</div>

				<div class="w3l-user">
					<span class="customtext" id="data"><i class="fa fa-user w3l-3" id="cicon" aria-hidden="true"></i>Gender</span>
					<ul class="gender">
					<li><input type="radio" name="gender" value="Male" required="">Male</li>
					<li><input type="radio" name="gender" value="Female" required="">Female</li>
					<li><input type="radio" name="gender" value="Other" required="">Other</li>
					</ul>
					<div class="clear"></div>
				</div>

				<div class="w3l-email">
					<span><i class="fa fa-envelope-o w3l-3" aria-hidden="true"></i></span>
					<input type="email" name="email" placeholder="info@example.com" required=""/>
					<div class="clear"></div>
				</div>

				<!--<div class="w3l-user">
					<span><i class="fa fa-graduation-cap w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="branch" placeholder="Engineering Branch" required=""/>
					<div class="clear"></div>
				</div>-->




				<div class="w3l-branch">
					
					<span class="customtext" id="data"><i class="fa fa-book w3l-1" id="cicon" aria-hidden="true"></i>Branch</span>
					<ul class="branch">
					<li><input type="radio" name="branch" value="cse" required="">CSE</li>
					<li><input type="radio" name="branch" value="ece" required="">ECE</li>
					<li><input type="radio" name="branch" value="eee" required="">EEE</li>
					<li><input type="radio" name="branch" value="me" required="">ME</li>
					</ul>
					<div class="clear"></div>
				</div>

				<!--<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="higher_studies" placeholder="Higher Studies" required=""/>
>>>>>>> 954fdf9c2f6c272f1b1917a0e6cee945d286b501
					<div class="clear"></div>
				</div>

				<div class="w3l-user">
					<span><i class="fa fa-address-book w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="address" placeholder="Address" required=""/>
					<div class="clear"></div>
				</div>-->

			<!--	<div class="w3l-user">

					<span><i class="fa fa-university w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="higher_studies" placeholder="Higher Studies" required=""/>-->

				<div class="w3l-batch">
					<span><i class="fa fa-graduation-cap w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="batch" placeholder="Batch Year" required=""/>
					<div class="clear"></div>
				</div>

				<!-- <div class="w3l-password">
					<span><i class="fa fa-lock w3l-2" aria-hidden="true"></i></span>
					<input type="password" name="password" placeholder="password" required=""/>
					<div class="clear"></div>
				</div> -->



				<!-- <div class="w3l-email">
					<span><i class="fa fa-envelope-o w3l-3" aria-hidden="true"></i></span>
					<input type="email" name="email" placeholder="info@example.com" required=""/>
					<div class="clear"></div>
				</div>
				-->


				<div class="w3l-user">
					<span><i class="fa fa-cogs w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="skills" placeholder="skills" required=""/>
					<div class="clear"></div>
				</div>


				<div class="w3l-phone">
					<span><i class="fa fa-mobile w3l-4" aria-hidden="true"></i></span>
					<input type="text" name="phone" placeholder="+91" required=""/>
					<div class="clear"></div>
				</div>


				<div class="w3l-btn">
					<input type="submit" name="submit-once" value="submit"/>
				</div>
			</form>
		</div>
	</div>

<footer>
<h4>Note: Please ensure all the details are correct and will be validated.</h4>
</footer>

<script type="text/javascript" src="js/date.js"></script>
</body>
</html>
