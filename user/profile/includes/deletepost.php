<?php
require "config.php";

$fieldid=$_POST["fieldid"];
$sql=mysqli_query($conn,"DELETE FROM post WHERE pid ='".$fieldid."'");

//echo $fieldid;
header("location:../mypost.php");


?>