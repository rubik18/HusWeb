<?php 
//connect
require '../db/connect.php';
 $conn->set_charset("utf8");
// kiểm tra điền đầy đủ thông tin
$currentpassword = $_POST["password"];
$password = md5($_POST["password"]);
$repassword =md5($_POST["repassword"]);

	if ( isset($_POST['submit']) || empty($password) || empty($repassword) ) {
	  header("Location:recover-password.php?Empty= Please fill in the blanks");
	}
		else{
			if ( $password != $repassword) {
		  	header("Location:recover-password.php?Invalid= Please enter correct repassword");
		  	}	
		  	else{
		  		if(!empty($_POST)) {
		    		var_dump($_POST);
					$sql = "INSERT INTO `user` (`password`) VALUES ('$password')";
				    $kq = mysqli_query($conn,$sql);
				    	if (!$kq) {
		    				die('error'.' '. mysqli_error($conn));
		  				}
		  				if(!empty($_POST)) {
      // var_dump($_POST);
  		$sql = "UPDATE `user` SET `password`='$password' WHERE user.id= {$id}";
  		mysqli_query($conn,$sql);
  		header("Location: \php-intership-team\admin\SourceFile\contacts\contacts-table.php");
  	}
							header("Location:\php-intership-team\admin\SourceFile\login/recover-password.php");
		  		}
			}
		}