<?php
session_start();
    include "../includes/headerpro.php";
    include "../includes/footerpro.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="../css/mypage.css">

    <!-- boostrap cdn -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">




</head>
<body>
    <div class="card">
        <div class="front"><img src="../img/profilepic.jpg"></div>
        <div class="back">
            <div class="details">
                <h2>Name<br><span>Profession</span></h2>
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
        </div>
    </div>
</body>
</html>
