<?php 
//connect
require '../db/connect.php';
// kiểm tra điền đầy đủ thông tin
$username = $_POST["user_name"];
$password = $_POST["password"];
if (isset($_POST['login'])) {	
  if (empty($username) || empty($password)) {
  	# code...
  }
}
else{
  echo 'not working';
}


 ?>