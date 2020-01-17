<?php
session_start();

include "config.php";

$email = strtolower($_POST["email"]);
$password = $_POST["password"];
if(isset($_POST["signin-submit"])){

if (empty($email) || empty($password)) {
	header("Location: ../userlogin.php?error=emptyfields&uid=.$name.&mail=.$email");
	exit();
}
else{

	$hash1 = mysqli_query($conn, "SELECT * from login WHERE log_id = '".$email."' ");
	$sql2 = mysqli_query($conn, "SELECT * from login WHERE log_id='".$email."' ");
	$row2 = mysqli_fetch_array($sql2);
	if ($hash1->num_rows === 1) {
			$hash = $hash1->fetch_array(MYSQLI_ASSOC);
	}
if(password_verify($password, $hash['log_pwd'])){
	$sqll = mysqli_query($conn, "SELECT * from login where log_id = '".$email."'  or log_email='".$email."'");
	$roww = mysqli_fetch_array($sqll);
	if($roww["flag"]=='1'){
	$_SESSION["log_id"] = $roww["log_id"];
	
	// // Email activation
	
	
	// // Send email function
	// function send_email($email,$sub,$msg,$header){
	// 	return mail($email,$sub,$msg,$header);
	// }
	
	// // Calling mail function
	// $subject = "Activate your account now."
	// $msg = "Please Click on the link below to activate your account https://localhost/Alumni/activate.php?Email=$email&Code=$validation_code";
	// $header = "From No-Reply admin@institutealumni.com"
	
	// send_email($email,$subject,$msg,$header);
	
	
	// // Email activation ends
	
	
	
	?>
	<script>
		window.location.assign("../profile/mypage.php");
		alert('Login successful');
	</script>
	<?php
}
elseif ($roww["flag"]=='0') {
	$sql="select user_usn from users where user_usn=? or user_email=?";
	$stmt=mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../userlogin.php?error=sqlerror");
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"ss",$email,$email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultcheck=mysqli_stmt_num_rows($stmt);
		if ($resultcheck>0) {
			header("Location: ../userlogin.php?error=useralreadysignedup");
			exit();
		}
		else{
			header("Location: ../onetime/once.php");
			}
		}
}
}
elseif($row2["log_pwd"]!=$password){
	?>
	<script>
	window.location.assign("../userlogin.php");
		alert('Incorrect password');
	</script>
	<?php
}
else{
	?>
	<script>
	window.location.assign("../userlogin.php");
		alert('user not exist');
	</script>
	<?php
}
}/*
*/
}

else{
	header("Location: ../userlogin.php?error=sqlerror");
}
?>
