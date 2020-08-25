<?php 
//connect
// session
session_start();
require '../db/connect.php';
 $conn->set_charset("utf8");
$password = md5($_POST["password"]);
$repassword =md5($_POST["repassword"]);

	if ( isset($_POST['submit']) || empty($password) || empty($repassword)) {
	  header("Location:recover-password.php?Empty= Please fill in the blanks");
	}
	elseif ($password != $password) {
			header("Location:recover-password.php?Invalid= Please enter correct currentpassword");
	}
	elseif ($password != $repassword) {
		header("Location:recover-password.php?Invalid= Please enter correct repassword");
	}
	else {
		$sql = "SELECT * FROM user WHERE password = '$password'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$_SESSION['password'] = $password;
			 echo 'alert(Đổi mật khẩu thành công. Vui lòng đăng nhập lại.)';
		}
	}	