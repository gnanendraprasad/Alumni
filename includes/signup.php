<?php
if (isset($_POST["submit-signup"])) {
require "config.php";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
if (empty($name) || empty($email) || empty($password)) {
	header("Location: ../index.php?error=emptyfields&uid=.$name.&mail=.$email");
	exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("Location: ../index.php?error=invalidemail&uid=.$name");
	exit();
}
elseif (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
	header("Location: ../index.php?error=invalidusername&mail=.$email");
	exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)) {
	header("Location: ../index.php?error=invalidemailuid");
	exit();
}
else{
$sql="select name from signup where name=?";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
	header("Location: ../index.php?error=sqlerror");
	exit();
}
else{
	mysqli_stmt_bind_param($stmt,"s",$name);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	$resultcheck=mysqli_stmt_num_rows($stmt);
	if ($resultcheck>0) {
		header("Location: ../index.php?error=useralreadyexist&mail=.$email");
		exit();
	}
	else{
		$sql="insert into signup(name,email,password) values(?,?,?)";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else{
			$hashedpassword=password_hash($password, PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt,"sss",$name,$email,$hashedpassword);
			mysqli_stmt_execute($stmt);
			header("Location: ../index.php?signup=success");
			exit();
	}
}
}
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
  header("Location: ../index.php");
  exit();
}
