<?php

include "config.php";

$email = $_POST["email"];
$password = $_POST["password"];
$salt = "alumnispace";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and 
	password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	$_SESSION["email"] = $row["email"];
	$_SESSION["password"] = $row["password"];
	?>
	<script>
		window.location.assign("../profile/profile.php");
		alert('Login successful');
	</script>
	<?php
}
else{
	?>
	<script>
	window.location.assign("../index.php");
		alert('Login failed');
	</script>
	<?php
}








?>