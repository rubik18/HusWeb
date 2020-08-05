<?php  
// Kết nối
require'../db/connect.php';
$conn->set_charset("utf8");
// chuối kết nối
$tag = $_POST['tag'];
$name = $_POST['name'];
$sql1 = "SELECT * FROM tag WHERE tag.deleted_at is NULL";
$result = mysqli_query($conn, $sql1); 

  if(!empty($_POST)) {
    var_dump($_POST);
    if (mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)) {
        if ($tag != $row['tag']) {
		  $sql = "INSERT INTO `tag` ( `tag`, `name`) VALUES ( '$tag', '$name')";
		    mysqli_query($conn,$sql) or die("Thêm tag thất bại !");
	    }
	    echo "tag đa tồn tại";
	  }
	}
	header("Location:table-tag.php");
  }
?>
