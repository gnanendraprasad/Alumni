<?php
if (isset($_POST["submit-once"])) {
require "../includes/config.php";

$name = $_POST["name"];
$email = $_POST["email"];
$usn = $_POST["usn"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$branch = $_POST["branch"];
$batch = $_POST["batch"];
$phno = $_POST["phone"];
$skills = $_POST["skills"];

if (empty($name) || empty($email) || empty($usn) || empty($dob) || empty($gender) ) {
	header("Location: ../onetime/once.php?error=emptyfields");
	exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("Location: ../onetime/once.php?error=invalidemail");
	exit();
}
elseif (!preg_match("/^[a-zA-Z\ ]*$/", $name)) {
	header("Location: ../onetime/once.php?error=invalidusername");
	exit();
}
elseif (!preg_match("/^[0-9]*$/", $phno)) {
	header("Location: ../onetime/once.php?error=invalidphone");
	exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $name)) {
	header("Location: ../onetime/once.php?error=invalidemailuid");
	exit();
}
else{
				$sql="insert into users(user_usn,user_email,name,dob,gender,branch,batch,mob,skills) values(?,?,?,?,?,?,?,?,?)";
				$stmt=mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
					header("Location: ../index.php?error=sqlerror");
					exit();
				}
				else{
					//$hashedpassword=password_hash($password, PASSWORD_DEFAULT); //used sha1 instead of hash
					mysqli_stmt_bind_param($stmt,"sssssssds",$usn,$email,$name,$dob,$gender,$branch,$batch,$phno,$skills);
					mysqli_stmt_execute($stmt);
					header("Location: ../userlogin.php?signup=success");
					exit();
			}
			}


mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
  header("Location: ../index.php");
  exit();
}
