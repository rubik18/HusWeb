<?php 
// kết nối
  require'db/connect.php';
// Chuỗi kết nối
  $id = (int)$_GET['id'];
  $sql = "SELECT * FROM category, new WHERE new.id= {$id} AND new.id_category = category.id ";
  $conn->set_charset("utf8");
  $title = $_POST['title'];
  $content = $_POST['content'];
  $description= $_POST['description'];
  $id_category = $_POST['type'];
  if(!empty($_POST)) {
    // var_dump($_POST);
		$sql1 = "UPDATE `new`,`category` SET `title`='$title',`id_category`='$id_category',`content`='$content',`description`='$description' WHERE new.id= {$id} AND new.id_category = category.id";
		mysqli_query($conn,$sql1) or die("Sửa dữ liệu thất bại !");
		header("Location:table-master.php");
	}
 ?>