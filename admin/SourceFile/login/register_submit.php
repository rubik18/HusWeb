<?php 
//connect
require '../db/connect.php';
 $conn->set_charset("utf8");
// kiểm tra điền đầy đủ thông tin
unset($_SESSION['register']);
$username = $_POST["user_name"];
$fullname = $_POST["full_name"];
$password = md5($_POST["password"]);
$repassword =md5($_POST["repassword"]);
$level = $_POST["type"];
//session
$_SESSION['register'] = $_POST;
//lấy tên của file:
// var_dump($_FILES['fileupload']);die();
$file_name=$_FILES['fileupload']["name"];
//lấy đường dẫn tạm lưu nội dung file:
$file_tmp =$_FILES['fileupload']['tmp_name'];
//tạo đường dẫn lưu file trên host:
$path ="upload/".$file_name;
$link ="/php-intership-team/admin/SourceFile/login/upload/".$file_name;
if ( isset($_POST['submit']) || empty($username) || empty($fullname) || empty($_POST["password"]) || empty($_POST['repassword']) ) {
  header("Location:register.php?Empty=true");
  return fail;
}
//upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
move_uploaded_file($file_tmp,$path);
  if (isset($_FILES['fileupload'])&&$_FILES['fileupload']["name"]!=null) {
  	$avatar = $link;
  }
  elseif(isset($_FILES['fileupload'])&&$_FILES['fileupload']["name"] = null ){
  	$avatar = $_POST['URL'];
  }
  else{
    $avatar = "/php-intership-team/admin/SourceFile/login/upload/admin.jpg";
  }
$x = "SELECT * FROM `user` WHERE `user_name` = '$username' AND deleted_at is null";
$r = mysqli_query($conn,$x);

if (mysqli_num_rows($r) > 0) {
  header("Location:register.php?exited= Existed admin");
}
elseif ( $password != $repassword) {
  header("Location:register.php?Invalid=true");
}
elseif (strlen($_POST["password"]) < 8) {
  header("Location:register.php?MinValue=fail");
}
else{
  	if(!empty($_POST)) {
    var_dump($_POST);
		  $sql = "INSERT INTO `user` ( `user_name`, `full_name`,`avatar`,`password` ,`level`) VALUES ( '$username', '$fullname','$avatar','$password','$level')";
		    $kq = mysqli_query($conn,$sql);
		     if (!$kq) {
    			die('error'.' '. mysqli_error($conn));
  			}
			header("Location:\php-intership-team\admin\SourceFile\contacts/contacts-table.php");
  	}
}
?>

