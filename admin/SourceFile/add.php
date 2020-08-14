<?php  
// Kết nối
require'db/connect.php';
$conn->set_charset("utf8");
// chuối kết nối
  $title = $_POST['title'];
  $content = $_POST['content'];
  $description= $_POST['description'];
  $id_category =$_POST['type'];
// echo "phan tu trong chuoi"." ".$length_chuoi;
	$date_time = explode("-",$_POST['date_time']);
// uploadFile
//lấy tên của file:
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
  if(!empty($_POST['tag'])){
  	$tag = $_POST['tag'];
	  if(!empty($_POST)) {
			$sql = "INSERT INTO `new` ( `id_category`, `title`, `description`,`avatar`,`content`, `start_date`, `end_date`) VALUES ( '$id_category', '$title', '$description','$avatar', '$content', '$date_time[0]','$date_time[1]')";
			mysqli_query($conn,$sql) or die("Thêm dữ liệu thất bại !");
			$news_id = mysqli_insert_id($conn);
			$v = "";
			foreach ($tag as $k=>$value) {
				if($k == 0){
				$v .= "(".$news_id.", ".$value.")";
				} else {
					$v .= ", (".$news_id.", ".$value.")";
				}
			}
			$sql1 = "INSERT INTO `news_tag`(`news_id`,`tags_id`) VALUES $v";
			// var_dump($sql1);die();
				mysqli_query($conn,$sql1) or die("Thêm tag thất bại!");
			header("Location:table-master.php");
		}
	}
  else{
  	$sql = "INSERT INTO `new` ( `id_category`, `title`, `description`,`avatar`,`content`, `start_date`, `end_date`) VALUES ( '$id_category', '$title', '$description','$avatar', '$content', '$date_time[0]','$date_time[1]')";
	mysqli_query($conn,$sql) or die("Thêm dữ liệu thất bại !");
	header("Location:table-master.php");

	
  }
 ?>

