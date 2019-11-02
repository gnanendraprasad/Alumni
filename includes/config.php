<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("<script>alert(Connection F'd Up)</script>".mysqli_connect_error());
}

?>
