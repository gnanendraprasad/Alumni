<?php
    session_start();
    include "../includes/headerpro.php";
    require "../includes/config.php";
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/newpost.css">
  </head>
  <body>
    <div class="newpostbutton">
      <li id="cpost"><a href="newpost.php"><button>Create New Post</button></a>
    </div>
    <div class="all-posts">
      <?php
      $sql="Select * from post";
      if ($result = $conn->query($sql)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ptype"];
        $field2name = $row["description"];

        echo '<b>'.$field1name.$field2name.'</b><br />';
    }

    /* free result set */
    $result->free();
}
?>
    </div>


    <script type="text/javascript" src="../js/createpost.js"></script> <!-- Need to create alert, check the file by path and add function to alert -->
  </body>
</html>
