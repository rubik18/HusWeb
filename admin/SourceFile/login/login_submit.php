<?php 
// session
session_start();
//connect db
require '../db/connect.php';
// kiểm tra điền đầy đủ thông tin
$username = $_POST["user_name"];
$password = $_POST["password"];
if (isset($_POST['login'])) {	
  if (empty($username) || empty($password)) {
  	header("Location:login.php?Empty= Please fill in the blanks");
  }
  else{
  	$sql = "SELECT * FROM user WHERE user_name = '$username' AND password = '$password'";
  	$result = mysqli_query($conn,$sql);
  	if (mysqli_num_rows($result) > 0) {
  		$_SESSION['user'] = $username;
  		// var_dump($_SESSION['user']);die();
  		header("Location:../home.php");
  	}
  	else{
  		header("Location:login.php?Invalid= Please enter correct Username and Password");
  	}
  }
}
else{
  echo 'not working';
}


 ?>