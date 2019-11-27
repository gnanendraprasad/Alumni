
<?php
  session_start();

  if(isset($_POST["post-submit"])){
    require "config.php";
 if(isset($_SESSION["log_id"])){

    $postbox=$_POST['postbox'];
   $uid = $_SESSION['log_id'];
    $description=$_POST['description'];
    $filter = filter_var($description, FILTER_SANITIZE_SPECIAL_CHARS);

   $sql = "INSERT INTO  post (ptype, description,user_id) VALUES ('".$postbox."','".$filter."','".$uid."')";
   $row = mysqli_query($conn,$sql);

   header("location:../mypost.php");
}
else{
  header("location:signin.php");
  }
}


?>
