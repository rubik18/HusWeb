<?php  
// Kết nối
require'../db/connect.php';
$conn->set_charset("utf8");
// chuối kết nối
$tag = $_POST['tag'];
$sql1 = "SELECT * FROM tag WHERE tag.deleted_at is NULL";
$result = mysqli_query($conn, $sql1); 
if ( isset($_POST['submit'])|| empty($tag){
	header("Location:form-tag.php?Empty= Please fill in the blanks");
}
else{
  if(!empty($_POST)) {
    var_dump($_POST);
		  $sql = "INSERT INTO `tag` ( `tag`) VALUES ( '$tag')";
		    mysqli_query($conn,$sql) or die("Thêm tag thất bại !");
			header("Location:table-tag.php");
  }
}
?>
