<?php
 require "header.php";
?>

<main>
<div>
<section>
  <h1>SignUp</h1>
  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error']=='emptyfields') {
      echo "Fill all the details";
    }
  }
  ?>
  <form action="includes/signup.inc.php" method="post">
    <input type="text" name="uid" placeholder="username">
    <input type="text" name="mail" placeholder="email">
    <input type="password" name="pwd" placeholder="password">
    <input type="password" name="pwd-repeat" placeholder="repeat password">
    <button type="submit" name="signup-submit">SignUp</button>
  </form>
</section>
</div>
</main>

<?php
 require "footer.php";
?>
