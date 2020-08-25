<?php 
//connect
// session
session_start();
require '../db/connect.php';
$conn->set_charset("utf8");
$id = (int)$_SESSION['admin']['id'];
$current_password = md5($_POST["current_password"]);
$password = md5($_POST["password"]);
$repassword =md5($_POST["repassword"]);
	if ( isset($_POST['submit']) || empty($_POST["password"]) || empty($_POST["repassword"]) || empty($_POST["current_password"])) {
	  header("Location:recover-password.php?Empty= Please fill in the blanks");
	  return fail;
	}
	if ( !empty($password) and $current_password != $_SESSION['admin']['password']) {
			header("Location:recover-password.php?Invalid= Please enter correct currentpassword");
	}
	elseif ($password != $repassword) {
		header("Location:recover-password.php?Invalid1= Please enter correct repassword");
	}
	else {
		$sql = "UPDATE `user` SET `password`='$password' WHERE user.id= {$id}";
		$result = mysqli_query($conn, $sql);
		header("Location: \php-intership-team\admin\SourceFile\home.php");
	}	