
<?php
  session_start();

  if(isset($_POST["post-submit"])){
    require "config.php";

    $postbox=$_POST['postbox'];
    $uid = session_id();
    $description=$_POST['description'];

    $sql = "INSERT INTO  post (ptype, description, user_id) VALUES ('".$postbox."','".$description."','".$uid."')";

    $row = mysqli_query($conn,$sql);

   header("location:../profile/mypost.php");

  }


?>
