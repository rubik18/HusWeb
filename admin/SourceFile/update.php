<?php 
// kết nối
  require'db/connect.php';
// Chuỗi kết nối
  $id = (int)$_GET['id'];
  $sql = "SELECT * FROM category, new WHERE new.id= {$id} AND new.id_category = category.id AND new.delete_at = NULL";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn, $sql); 
  if (!$result) {
    die('error'. mysqli_error($conn));
  }
  $row = mysqli_fetch_array($result);
  $title = $_POST['title'];
  $content = $_POST['content'];
  $description= $_POST['description'];
  if($_POST['type'] == "Tin tức"){
      $id_category = 1;
  }
  elseif ($_POST['type'] == "Sự kiện") {
      $id_category = 2;
  }else{
    $id_category = 3;
  };
  if(!empty($_POST)) {
		var_dump($_POST);
		$sql1 = "UPDATE `new`,`category` SET `title`='$title',`id_category`='$id_category',`content`='$content',`description`='$description'WHERE new.id= {$id} AND new.id_category = category.id";
		mysqli_query($conn,$sql1) or die("Sửa dữ liệu thất bại !");
		header("Location:table-master.php");
	}
 ?>