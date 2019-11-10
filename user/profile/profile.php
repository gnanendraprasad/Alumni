<?php
session_start();
require "../includes/config.php";
  include "../includes/headerpro.php";
?>

    <head>
      <title>
          Home Page
      </title>
    </head>
    <body>
      <div>
        <?php
        if(isset($_GET["id"])){
          $id = $_GET["id"];
          $sqll = mysqli_query($conn, "SELECT * from users where user_usn = '".$id."'");
        	$roww = mysqli_fetch_array($sqll);
          $name=strtoupper($roww["name"]);
        }
        ?>
        <h2> <?php echo "welcome ".$name; ?> </h2>
      </div>


      </body>
