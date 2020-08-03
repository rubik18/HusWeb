<?php 
// kết nối
  require'db/connect.php';
// Chuỗi kết nối
  $id = (int)$_GET['id'];
  $sql = "SELECT * FROM category, new WHERE new.id= {$id} AND new.id_category = category.id";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn, $sql); 
  if (!$result) {
    die('error'. mysqli_error($conn));
  }
  $row = mysqli_fetch_array($result);
  $title = $_POST['title'];
  $type = $_POST['type'];
  $content = $_POST['content'];
  if(!empty($_POST)) {
		var_dump($_POST);
		$sql1 = "UPDATE `new`,`category` SET `title`='$title',`name`='$type',`content`='$content',`Birth`='$birth',`Password`='$password'WHERE `Id` = {$id}";
		mysqli_query($conn,$sql1) or die("Sửa dữ liệu thất bại !");
		header("Location:select.php");
	}
 ?>