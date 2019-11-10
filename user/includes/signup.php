<?php

if (isset($_POST["submit-signup"])) {
require "config.php";

$name = $_POST["name"];
$email = $_POST["email"];
$salt = "alumni";
$password = $_POST["usn"];

if (empty($name) || empty($email) || empty($password)) {
	header("Location: ../userlogin.php?error=emptyfields&uid=.$name.&mail=.$email");
	exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("Location: ../userlogin.php?error=invalidemail&uid=.$name");
	exit();
}
elseif (!preg_match("/^[a-zA-Z]*$/", $name)) {
	header("Location: ../userlogin.php?error=invalidusername&mail=.$email");
	exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $name)) {
	header("Location: ../userlogin.php?error=invalidemailuid");
	exit();
}
else{
$sql="select usn from unreg where usn=?";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
	header("Location: ../userlogin.php?error=sqlerror");
	exit();
}
else{
	mysqli_stmt_bind_param($stmt,"s",$password);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	$resultcheck=mysqli_stmt_num_rows($stmt);
	if ($resultcheck>0) {
		header("Location: ../userlogin.php?error=useralreadyexist&mail=.$email");
		exit();
	}
	else{
		$sql="select user_usn from users where user_usn=?";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../userlogin.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt,"s",$password);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultcheck=mysqli_stmt_num_rows($stmt);
			if ($resultcheck>0) {
				header("Location: ../userlogin.php?error=useralreadysignedup&mail=.$email");
				exit();
			}
			else{
				$sql="insert into unreg(name,email,usn) values(?,?,?)";
				$stmt=mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
					header("Location: ../userlogin.php?error=sqlerror");
					exit();
				}
				else{

					mysqli_stmt_bind_param($stmt,"sss",$name,$email,$password);
					mysqli_stmt_execute($stmt);
					header("Location: ../userlogin.php?signup=success");
					exit();
			}
			}
	}

}
}
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
  header("Location: ../userlogin.php");
  exit();
}
