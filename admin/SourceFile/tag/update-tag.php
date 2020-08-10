<?php 
// kết nối
  require'../db/connect.php';
// Chuỗi kết nối
  $id = (int)$_GET['id'];
  $sql = "SELECT * FROM tag  ";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn, $sql); 
  if (!$result) {
    die('error'. mysqli_error($conn));
  }
  $row = mysqli_fetch_array($result);
  $tag = $_POST['tag'];
  $name = $_POST['name'];
  if(!empty($_POST)) {
		var_dump($_POST);
		$sql1 = "UPDATE `tag` SET `tag`='$tag',`name`='$name'WHERE tag.id= {$id}";
		mysqli_query($conn,$sql1) or die("Sửa dữ liệu thất bại !");
		header("Location:table-tag.php");
	}
 ?>