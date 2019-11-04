<!DOCTYPE html>
<html lang="en">
<head>
<title>Update Profile</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="User Profile Form A Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!--//online-fonts -->

</head>
<body>
<div class="header">
	<h1>Update Profile</h1>
</div>
<div class="w3-main">
		<div class="form-w3l">	
			<form action="#" method="post">
				<div class="img">
					<!-- <img src="images/profile.png" alt="image" height="100" width="100"> -->
					<img id="fixedphoto" src="images/image.png" />
					<input id="myfile" type="file" name="profilephoto" placeholder="Photo" style="display:none" required="" capture>
					
					<!--Image linking script-->
					<script src="js/jquery.min.js"></script>
					<script type="text/x-javascript" src="js/inputpic.js"></script>
					<!--Image linking script-->
				</div>
				
				<h3>Please fill the details</h3>

				<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="firstname" placeholder="first name" required=""/>
					<div class="clear"></div>
				</div>
				<div class="w3l-user">	
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="middle_name" placeholder="middle name" required=""/>
					<div class="clear"></div>
					</div>
				<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="last_name" placeholder="last name" required=""/>
					<div class="clear"></div>
				</div>
				
				<div class="w3-dob">
				<span id="data">Date of Birth</span> 
				<input type="date" name="dob" value="dob" required="">
					<div class="clear"></div>
				</div>

				<div class="w3l-gender">
					<span id="data">Gender</span>
					<li><input type="radio" name="gender" value="Male" required="">Male
					<li><input type="radio" name="gender" value="Female" required="">Female
					<li><input type="radio" name="gender" value="Other" required="">Other
					<div class="clear"></div>
				</div>

				<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="higher_studies" placeholder="Higher Studies" required=""/>
					<div class="clear"></div>
				</div>

				<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="job" placeholder="Job" required=""/>
					<div class="clear"></div>
				</div>

				<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="branch" placeholder="Engineering Branch" required=""/>
					<div class="clear"></div>
				</div>

				<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="address" placeholder="Address" required=""/>
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
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="skills" placeholder="skills" required=""/>
					<div class="clear"></div>
				</div>

				<div class="w3l-phone">	
					<span><i class="fa fa-mobile w3l-4" aria-hidden="true"></i></span>
					<input type="text" name="phone" placeholder="+91" required=""/>
					<div class="clear"></div>
				</div>
				
				<div class="w3l-btn">
					<input type="submit" name="submit" value="submit"/>
				</div>
			</form>
		</div>
	</div>
	
<footer>
<h4>Note: Please ensure all the details are correct and will be validated.</h4>
</footer>
</body>
</html>