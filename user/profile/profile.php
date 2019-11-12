<?php
session_start();
require "../includes/config.php";
  include "../includes/headerpro.php";
?>
    <html>
    <head>
      <title>
          Home Page
      </title>

      <link rel="stylesheet" type="text/css" href="../css/profile.css">
    </head>
    <body>
    <!-- [To fetch id, need fixing]
      <div>
        <?php
        // if(isset($_GET["id"])){
        //   $id = $_GET["id"];
        //   $sqll = mysqli_query($conn, "SELECT * from users where user_usn = '".$id."'");
        // 	$roww = mysqli_fetch_array($sqll);
        //   $name=strtoupper($roww["name"]);
        // }
        ?>
        <h2> 
        <?php 
        // echo "welcome ".$name; 
        ?> </h2>
      </div> -->

<!-- News & Events Block -->
      <div class="newsevents">
<!-- All news on profile page --> 
     <div class="news-profile">
      <h2>NEWS</h2>
       <?php
       $sql="Select * from post where ptype='NEWS'";
       if ($result = $conn->query($sql)) {

      /* fetch associative array */
      while ($row = $result->fetch_assoc()) {
            $field1name = $row["ptype"];
            $field2name = $row["description"];

            echo '<div class="breakline">'.$field1name." ".$field2name.'</div>';
            }

          /* free result set */
          $result->free();
         }
        ?>
      </div>

<!--  All events on profile page --> 
      <div class="events-profile">
        <h2>EVENTS</h2>
        <?php
       $sql="Select * from post where ptype='EVENTS'";
       if ($result = $conn->query($sql)) {

      /* fetch associative array */
      while ($row = $result->fetch_assoc()) {
            $field1name = $row["ptype"];
            $field2name = $row["description"];

            echo '<div class="breakline">'.$field1name." ".$field2name.'</div>';
            }

          /* free result set */
          $result->free();
         }
        ?>
      </div>
    </div>

<!--  All jobs on profile page --> 
      <div class="jobs-profile">
        <h2>JOBS</h2>
        <?php
       $sql="Select * from post where ptype='JOBS'";
       if ($result = $conn->query($sql)) {

      /* fetch associative array */
      while ($row = $result->fetch_assoc()) {
            $field1name = $row["ptype"];
            $field2name = $row["description"];

            echo '<div class="breakline">'.$field1name." ".$field2name.'</div>';
            } 

          /* free result set */
          $result->free();
         }
        ?>
      </div>


      </body>
      </html>