<?php  

include "config.php";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "alumnispace";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO signup (signupid, name, email, password) 
VALUES (0,'$name', '$email', '$password_encrypted')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
		window.location.assign("../index.php");
	</script>
	
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}


?>




















