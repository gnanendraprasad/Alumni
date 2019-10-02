<?php
$servername="localhost";
$username="root";
$password="";
$database="alumnispace";

$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
  die("Connection F'd Up".mysqli_connect_error());
}
?>
