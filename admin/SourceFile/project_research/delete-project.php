<?php 
// Kết nối
	require'../db/connect.php';
	$conn->set_charset("utf8");
	if (!isset($_SESSION['user'])) {
	header("Location:login/login.php");die();
	}
// Tạo mã SQLs
	$id = (int)$_GET['id'];
	// var_dump($id);die();
	$sql = "UPDATE `topic_project` SET `deleted_at` = {$id} WHERE `id` = {$id} AND `deleted_at` is NULL";
	$result = mysqli_query($conn, $sql);
if (!mysqli_query($conn,$sql)) {
	die('error:'. mysqli_error($conn));
}
	
	 header("Location:./table-project.php");
 ?>