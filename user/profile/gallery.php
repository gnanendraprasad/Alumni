<?php
    session_start();
    include "../includes/headerpro.php";
    require "../includes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="../css/gallery.css">
</head>
<body>
    <div class="next-container">
    <div class="next-column next-active">
        <div class="content">
            <h1>1<h1>
            <div class="box"> 
                <h2>Test Gallery</h2>
                <p>Description</p>
                </div>
            </div>
        </div>
    <div class="bg bg1"></div>
        <div class="next-column">
        <div class="content">
            <h1>2<h1>
            <div class="box"> 
                <h2>Test Gallery</h2>
                <p>Description</p>
                </div>
            </div>
        </div>
    <div class="bg bg2"></div>
        <div class="next-column">
        <div class="content">
            <h1>3<h1>
            <div class="box"> 
                <h2>Test Gallery</h2>
                <p>Description</p>
                </div>
            </div>
        </div>
    <div class="bg bg3"></div>
        <div class="next-column">
        <div class="content">
            <h1>4<h1>
            <div class="box"> 
                <h2>Test Gallery</h2>
                <p>Description</p>
                </div>
            </div>
        </div>
        <div class="bg bg4"></div>
        </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
    $(document).on('mouseover','.next-contain .next-column', function(){
        $(this).addClass('next-active').siblings().removeClass('next-active')
    })
    </script>
</body>
</html>