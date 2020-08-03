<?php  
// Kết nối
require'db/connect.php';
$conn->set_charset("utf8");
// chuối kết nối
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
		$sql = "INSERT INTO `new` ( `id_category`, `title`, `description`, `content`, `start_date`, `end_date`, `created_at`, `update_at`, `deleted_at`) VALUES ( '$id_category', '$title', '$description', '$content', '', '', '', '', '')";
		mysqli_query($conn,$sql) or die("Thêm dữ liệu thất bại !");
		header("Location:table-master.php");
	}

 ?>