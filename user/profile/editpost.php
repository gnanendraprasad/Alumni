<?php
require "../includes/config.php";
session_start();

$fieldid=$_POST["fieldid"];
require "newpost.php";
//$sql=mysqli_query($conn,"DELETE FROM post WHERE pid ='".$fieldid."'" );

//echo $fieldid;
//header("location: mypost.php");


?>

// Need to workon edit post
<div class="form-edit">
<p><a href="mypost.php">My Posts</a> </p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']))
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age =$_REQUEST['age'];
$submittedby = $_SESSION["username"];
$update="update new_record set trn_date='".$trn_date."',
name='".$name."', age='".$age."',
submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action="">
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name"
required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age"
required value="<?php echo $row['age'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
