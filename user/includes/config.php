<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "alumni";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection died".mysqli_connect_error());
}

?>
