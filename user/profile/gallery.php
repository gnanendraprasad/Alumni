<?php
    session_start();
    include "../includes/headerpro.php";
    require "../includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../css/swiper.min.css">
  <link rel="stylesheet" href="../css/gallery.css">

</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(../img/bg1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(../img/bg2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(../img/bg3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(../img/bg4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(../img/bg5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(../img/bg6.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(../img/bg7.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(../img/bg8.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(../img/bg9.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(../img/bg10.jpg)"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="../js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
        },
        pagination: {
        el: '.swiper-pagination',
            },
        loop: true,
        autoplay: {
    delay: 3000,
    },
    });
  </script>
</body>
</html>