<?php 
//connect
require '../db/connect.php';
// kiểm tra điền đầy đủ thông tin
$username = $_POST["user_name"];
$fullname = $_POST["full_name"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];

if ( isset($_POST['submit']) && $username !='' && $fullname !='' && $password !='' && $repassword !='' ) {
  if ( $password != $repassword) {
  	header("Location:register.php");
  }
}
else{
  header("Location:register.php");
}





 ?>