<?php 
// Kết nối
	session_start();
	require'../db/connect.php';
	$conn->set_charset("utf8");
	if (empty($_SESSION['admin'])) {
	header("Location:/php-intership-team/admin/SourceFile/login/login.php");die();
	}
// Tạo mã SQL
	$id = (int)$_GET['id'];
	$sql = "UPDATE `tag` SET `deleted_at` = {$id} WHERE `id` = {$id} AND `deleted_at` is NULL";
	$result = mysqli_query($conn, $sql);
if (!mysqli_query($conn,$sql)) {
	die('error:'. mysqli_error($conn));
}
	header("Location:table-tag.php");
 ?>