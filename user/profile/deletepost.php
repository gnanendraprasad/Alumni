<?php
require "../includes/config.php";
<<<<<<< HEAD

$fieldid=$_POST["fieldid"];
$sql=mysqli_query($conn,"DELETE FROM post WHERE pid ='".$fieldid."'" );

//echo $fieldid;
header("location: mypost.php");
=======
require "mypost.php";

//$sql=mysqli_query($conn,"DELETE FROM post WHERE pid ='".$fieldid."' & user_id='".$fielduser."'");

echo $fieldid;
//header("location: mypost.php");
>>>>>>> d641fbad8b3f90735a178f09218027c0a82c13dc


?>