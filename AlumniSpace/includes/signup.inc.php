<?php
if (isset($_POST["signup-submit"])) {
  require 'dbh.inc.php';

  $username=$_POST['uid'];
  $email=$_POST['mail'];
  $password=$_POST['pwd'];
  $passwordrepeat=$_POST['pwd-repeat'];

  if (empty($username) || empty($email) || empty($password) || empty($passwordrepeat)) {
    header("Location: ../signup.php?error=emptyfields&uid=.$username.&mail=.$email");
    exit();
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidemail&uid=.$username");
    exit();
  }
  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invalidusername&mail=.$email");
    exit();
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invalidemailuid");
    exit();
  }
  elseif ($password!=$passwordrepeat) {
      header("Location: ../signup.php?error=passwordcheck&uid=.$username.&mail=.$email");
      exit();
  }
  else{
    $sql="select id from users where id=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt,"s",$username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultcheck=mysqli_stmt_num_rows();
      if ($resultcheck>0) {
        header("Location: ../signup.php?error=useralreadyexist&mail=.$email");
        exit();
      }
      else{
        $sql="insert into users(uid,email,pwd) values(?,?,?)";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../signup.php?error=sqlerror");
          exit();
        }
        else{
          $hashedpassword=password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedpassword);
          mysqli_stmt_execute($stmt);
          header("Location: ../signup.php?signup=success");
          exit();
      }
    }
  }
}
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}


else{
  header("Location: ../signup.php");
  exit();
}
