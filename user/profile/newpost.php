<?php
session_start();
include "../includes/footerpro.php";
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/newpost.css">
  </head>
  <body>
      <h1>Create New Post</h1>
      <hr />
      <div class="newpost">
        <form id="new-post" action="../includes/mynewpost.php" method="POST">
          <div id="select">
          <text>Select the type</text>
          <select name="postbox">
              <option value="NEWS" name="posttype">NEWS</option>
              <option value="EVENT" name="posttype">EVENT</option>
              <option value="JOB" name="posttype">JOB</option>
            </select>
            </div>  
            <div id="description">
            Description <input id="desc" type="text-area" name="description">
            </div>
            <div id="submit">
            <button type="submit" name="post-submit">Submit</button></div>
            </form>
      </div>
  </body>

</html>
