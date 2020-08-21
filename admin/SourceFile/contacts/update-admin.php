<?php 
// kết nối
  require'../db/connect.php';
// Chuỗi kết nối
  $id = (int)$_GET['id'];
  $sql = "SELECT * FROM `user` WHERE user.id= {$id}";
  $conn->set_charset("utf8");
  // var_dump($_POST); die();
  $user_name = $_POST['user_name'];
  $full_name = $_POST['full_name'];
  $password = md5($_POST['password']);
  $repassword = md5($_POST['repassword']);
  $lever = $_POST["type"];
  $file_name=$_FILES['fileupload']["name"];
  //lấy đường dẫn tạm lưu nội dung file:
  $file_tmp =$_FILES['fileupload']['tmp_name'];
  //tạo đường dẫn lưu file trên host:
  $path ="upload/".$file_name;
  $link ="/php-intership-team/admin/SourceFile/contacts/upload/".$file_name;
  //upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
move_uploaded_file($file_tmp,$path);  
  if (isset($_FILES['fileupload'])&&$_FILES['fileupload']["name"]!=null) {
    $avatar = $link;
  }
  else{
    $avatar = $_POST['URL'];
  }

    if(!empty($_POST)) {
      // var_dump($_POST);
  		$sql = "UPDATE `user` SET `user_name`='$user_name', `full_name`='$full_name',`avatar`='$avatar',`password`='$password' WHERE user.id= {$id}";
  		mysqli_query($conn,$sql) or die("Sửa dữ liệu thất bại !");
  		header("Location: \php-intership-team\admin\SourceFile\contacts\contacts-table.php");
  	}
 ?>