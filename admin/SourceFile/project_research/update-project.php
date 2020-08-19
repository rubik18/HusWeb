<?php 
// kết nối
  require'../db/connect.php';
// Chuỗi kết nối
  $id = (int)$_GET['id'];
  $sql = "SELECT * FROM topic_project ";
  $conn->set_charset("utf8");
  $r = mysqli_query($conn, $sql); 
  if (!$r) {
    die('error'. mysqli_error($conn));
  }
  $row = mysqli_fetch_array($r);
  $id_project = $_POST['id_project'];
  $name = $_POST['name'];
  $leader = $_POST['leader'];
  $workplace = $_POST['workplace'];
  $approval_date = $_POST['approval_date'];
  $acceptance_date = $_POST['acceptance_date'];
  $result = $_POST['result'];
  $id_type = $_POST['type'];
  // var_dump($id_type);die();
  if(!empty($_POST)) {
		var_dump($_POST);
		$sql1 = "UPDATE `topic_project` SET `id_project`='$id_project',`id_type`='$id_type',`name`='$name',`lead_researcher` = '$leader',`workplace`='$workplace',`approval_date`='$approval_date',`acceptance_date`='$acceptance_date',`result`='$result' WHERE topic_project.id= {$id}";
		$result1 = mysqli_query($conn,$sql1) or die("Sửa dữ liệu thất bại !");
		header("Location:./table-project.php");
	}
 ?>