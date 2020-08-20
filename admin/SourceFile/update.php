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
  $date_time = explode("-",$_POST['date_time']);
  $file_name=$_FILES['fileupload']["name"];
  //lấy đường dẫn tạm lưu nội dung file:
  $file_tmp =$_FILES['fileupload']['tmp_name'];
  //tạo đường dẫn lưu file trên host:
  $path ="upload/".$file_name;
  //upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
move_uploaded_file($file_tmp,$path);  
  if (isset($_FILES['fileupload'])&&$_FILES['fileupload']["name"]!=null) {
    $avatar = $path;
  }
  else{
    $avatar = $_POST['URL'];
  }
  if ($id_category == '2') {
    $date_time = explode("-",$_POST['date_time']);
    $location = $_POST['location'];
  }
  else{
    $date_time = '';
    $location = '';
  }
  if(!empty($_POST['tag'])){
    $tag = $_POST['tag'];
    if(!empty($_POST)) {
      // var_dump($_POST);
  		$sql1 = "UPDATE `new`,`category` SET `title`='$title',`id_category`='$id_category',`content`='$content',`description`='$description',`start_date` = '$date_time[0]',`end_date` = '$date_time[1]',`avatar` = '$avatar',`location` = '$location' WHERE new.id= {$id} AND new.id_category = category.id";
  		mysqli_query($conn,$sql1) or die("Sửa dữ liệu thất bại !");
      foreach ($tag as $value) {
        $sql2 = "UPDATE `news_tag` SET `tags_id` = '$value'";
        mysqli_query($conn,$sql2) or die("Sửa dữ liệu thất bại !");
      }
  		header("Location:table-master.php");
  	}
  }
  else{
        $sql1 = "UPDATE `new`,`category` SET `title`='$title',`id_category`='$id_category',`content`='$content',`description`='$description',`start_date` = '$date_time[0]',`end_date` = '$date_time[1]',`avatar` = '$avatar',`location` = '$location' WHERE new.id= {$id} AND new.id_category = category.id";
      mysqli_query($conn,$sql1) or die("Sửa dữ liệu thất bại !");
      header("Location:table-master.php");
  }
 ?>