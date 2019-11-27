
<?php
require('Database.php');
//$db = Database::getInstance();
//$mysqli = $db->getConnection();
class DbFunction{

	function login($loginid,$password){

      if(!ctype_alpha($loginid) || !ctype_alpha($password)){

        echo "<script>alert('Either LoginId or Password is Missing')</script>";

      }
   else{
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT admin_id, admin_pass FROM admin where admin_id=? and admin_pass=? ";
	$stmt= $mysqli->prepare($query);
	if(false===$stmt){

		trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
	}

	else{

		$stmt->bind_param('ss',$loginid,$password);
		$stmt->execute();
		$stmt -> bind_result($loginid,$password);
		$rs=$stmt->fetch();
		if(!$rs)
		{
			echo "<script>alert('Invalid Details')</script>";
			header('location:login.php');
		}
		else{

			header('location:view.php');
		}
	}

	}

	}


function showCourse(){

	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM post ";
	$stmt= $mysqli->query($query);
	return $stmt;

}

function showCourse1($cid){

	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM post  where pid='".$cid."'";
	$stmt= $mysqli->query($query);
	return $stmt;

}

function showSubject($c){
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM users where user_usn='".$c."'";
	$stmt= $mysqli->query($query);
	return $stmt;

}



function showStudents(){

	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM users ";
	$stmt= $mysqli->query($query);
	return $stmt;

}

function showSession(){

	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM unreg  ";
	$stmt= $mysqli->query($query);
	return $stmt;

}


function edit_course($cshort,$cfull,$id){

    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	//echo $cshort.$cfull.$udate.$id;exit;
	$query = "update post set ptype=?, description=? where pid=?";
	$stmt= $mysqli->prepare($query);
	$stmt->bind_param('ssi',$cshort,$cfull,$id);
	$stmt->execute();
    echo '<script>';
    echo 'alert("Course Updated Successfully")';
    echo '</script>';

}


function del_course($id){

   //  echo $id;exit;
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from post where pid=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('s',$id);
	$stmt->execute();
    echo "<script>alert('Post has been deleted')</script>";
    echo "<script>window.location.href='view-course.php'</script>";
}

function del_std($id){

    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="update users set flag2=1 where user_id=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('s',$id);
	  $stmt->execute();
    echo "<script>alert('Accepted')</script>";
    echo "<script>window.location.href='view.php'</script>";

}
function del_std1($id){

    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="update users set flag2=NULL where user_id=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('s',$id);
	  $stmt->execute();
    echo "<script>alert('Rejected')</script>";
    echo "<script>window.location.href='view.php'</script>";

}
function del_subject($id){

		//echo $id;exit;
	 $db = Database::getInstance();
	 $mysqli = $db->getConnection();
	 $hash_id=password_hash($id,PASSWORD_DEFAULT);
	 $query="insert into login(log_id,log_pwd) values(?,?)";
	 $stmt= $mysqli->prepare($query);
	 $stmt->bind_param('ss',$id,$hash_id);
 $stmt->execute();
	 echo "<script>alert('User has been added.')</script>";
	// echo "<script>window.location.href='view-course.php'</script>";
}


}

?>
