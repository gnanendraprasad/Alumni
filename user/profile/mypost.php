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
      $sql="Select * from post order by ptype";
      if ($result = $conn->query($sql)) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $fieldid = $row["pid"];
        $fieldtime = $row["time"];
        $field1name = $row["ptype"];
        $field2name = $row["description"];

        /*To set date and time for each post

        date_default_timezone_set('Asia/Kolkata');
        $timestamp = $_SERVER['REQUEST_TIME'];
        $date = date('d/m/Y h:i:sa', time());
        */

        echo '<div class="fields"><div class="newline">'.$field1name.' '.$field2name.' '.$fieldtime.'</div>'
        ?>

        <!--- Fetching the current log_id using post method to edit post-->
        <form action="editpost.php" method="post">
        <input type="hidden" name="fieldid" value="<?php echo $fieldid;?>">
        <button type="submit" name="edit-submit" >Edit</button>
        </form>

        <!--- Fetching the current log_id using post method to delete post-->
        <form action="deletepost.php" method="post">
        <input type="hidden" name="fieldid" value="<?php echo $fieldid;?>">
        <button type="submit" >Delete</button>
        </form>
        <?php
        '</div>';

    }


    /* free result set */
    $result->free();
   }
  ?>
    </div>


    <script type="text/javascript" src="../js/createpost.js"></script> <!-- Need to create alert, check the file by path and add function to alert -->
  </body>
</html>
