<?php 
// kết nối
  require'../db/connect.php';
// Chuỗi kết nối
  $id = (int)$_GET['id'];
  var_dump($_POST);die();
  $id_project = $_POST['id_project'];
  $name = $_POST['name'];
  $leader = $_POST['leader'];
  $workplace = $_POST['workplace'];
  $approval_date = $_POST['approval_date'];
  $acceptance_date = $_POST['acceptance_date'];
  $result = $_POST['result'];
  $id_type = $_POST['type'];
		 $s = "UPDATE `topic_project`,`type_topic_project` SET `id_type`='$id_type',`id_project`='$id_project',`name`='$name',`lead_researcher`='$leader',`workplace` = '$workplace',`approval_date` = '$approval_date',`acceptance_date` = '$acceptance_date',`result` = '$result' WHERE topic_project.id= {$id} AND topic_project.id_type = type_topic_project.id";
     mysqli_query($conn,$s) or die("Sửa dữ liệu thất bại !");
		 header("Location:./table-project.php");
 ?>