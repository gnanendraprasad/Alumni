<?php
if (isset($_POST["login-submit"])){

  require 'dbh.inc.php';
  $mailuid=$_POST["mailuid"];
  $pwd=$_POST["pwd"];

if (empty($pwd) || empty($mailuid)) {
  header("Location: ../index.php?error=emptyFields");
  exit();
}
else{
  $sql="select * from users where uid=? or email=?";
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: ../index.php?error=sqlerror");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row=mysqli_fetch_assoc($result)) {
      $pwdcheck=password_verify($pwd, $row["pwd"]);
      if ($pwdcheck==false) {
        header("Location: ../index.php?error=invalidPassword");
        exit();
      }
      else if($pwdcheck==true){
        session_start();
        $_SESSION['userid']=$row['id'];
        $_SESSION['useruid']=$row['uid'];
        header("Location: ../index.php?Login=Success");
        exit();
      }
    }
    else{
      header("Location: ../index.php?error=noUser");
      exit();
    }
  }
}

}

else{
  header("Location: ../index.php");
  exit();
}
