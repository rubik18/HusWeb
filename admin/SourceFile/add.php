
 <?php  
// Kết nối
require'db/connect.php';
$conn->set_charset("utf8");
// chuối kết nối
  $title = $_POST['title'];
  $content = $_POST['content'];
  $description= $_POST['description'];
  $id_category =$_POST['type'];
  if(!empty($_POST['tag'])){
  	$tag = $_POST['tag'];
  	$len = sizeof($tag); 
  }
  if(!empty($_POST)) {
		var_dump($_POST);
		$sql = "INSERT INTO `new` ( `id_category`, `title`, `description`, `content`, `start_date`, `end_date`) VALUES ( '$id_category', '$title', '$description', '$content', '', '')";
		mysqli_query($conn,$sql) or die("Thêm dữ liệu thất bại !");
		$news_id = mysqli_insert_id($conn);
		for ($i=0; $i < $len; $i++) { 
			$sql1 = "INSERT INTO `news_tag`(`news_id`,`tags_id`) VALUES ('$news_id','$tag[$i]')";
			mysqli_query($conn,$sql1) or die("Thêm tag thất bại!");
		}
		header("Location:table-master.php");
	}
 ?>

