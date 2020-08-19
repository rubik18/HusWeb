<?php 
// Kết nối
	require'db/connect.php';
	$conn->set_charset("utf8");
// Tạo mã SQL
	$id = (int)$_GET['id'];
	$sql = "UPDATE `user` SET `deleted_at` = {$id} WHERE `id` = {$id} AND `deleted_at` is NULL";
	$result = mysqli_query($conn, $sql);
if (!mysqli_query($conn,$sql)) {
	die('error:'. mysqli_error($conn));
}
	header("Location: contacts.php");
 ?>