<?php
session_start();
echo "Please fill the form";

 ?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" src="#">
  </head>
  <body>
      <div>
        <form id="new-post" action="../includes/mynewpost.php" method="POST">
          <text>Select the type</text>
          <select name="postbox">
              <option value="NEWS" name="posttype">NEWS</option>
              <option value="EVENT" name="posttype">EVENT</option>
              <option value="JOB" name="posttype">JOB</option>
            </select>
            Description <input type="text" name="description">
            <input type="submit" name="post-submit">
        </form>
      </div>
  </body>












</html>
