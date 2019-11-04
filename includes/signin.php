<?php

include "config.php";

$email = strtolower($_POST["email"]);
$password = $_POST["password"];
/*$salt = "alumni";
$password_encrypted = sha1($password.$salt);*/


$sql = mysqli_query($conn, "SELECT count(*) as total from login WHERE log_id='".$email."' or log_email='".$email."' and
	log_pwd = '".$password."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	$sqll = mysqli_query($conn, "SELECT * from login where log_id = '".$email."'  or log_email='".$email."'");
	$roww = mysqli_fetch_array($sqll);
	if($roww["flag"]=='1'){
	$_SESSION["log_id"] = $row["log_id"];
	$_SESSION["password"] = $row["log_pwd"];
	?>
	<script>
		window.location.assign("../profile/profile.php");
		alert('Login successful');
	</script>
	<?php
}
elseif ($roww["flag"]=='0') {
	?>
	<script>
		window.location.assign("../index.php");
		alert('Not yet accepted, please sign up if you have not registered yet');
	</script>
	<?php
}
}
else{
	?>
	<script>
	window.location.assign("../index.php");
		alert('user not exist');
	</script>
	<?php
}








?>
