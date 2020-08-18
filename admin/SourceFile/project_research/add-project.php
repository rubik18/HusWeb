<?php  
// Kết nối
require'../db/connect.php';
$conn->set_charset("utf8");
// chuối kết nối
  $id_project = $_POST['id_project'];
  $name = $_POST['name'];
  $leader = $_POST['leader'];
  $workplace = $_POST['workplace'];
  $approval_date = $_POST['approval_date'];
  $acceptance_date = $_POST['acceptance_date'];
  $result = $_POST['result'];
  if(!empty($_POST)) {
    var_dump($_POST);
		  $sql = "INSERT INTO `topic_project` ( `id_project`, `name`, `lead_researcher`,`workplace`,`approval_date`,`acceptance_date`,`result`) VALUES ( '$id_project', '$name','$leader','$workplace','$approval_date','$acceptance_date',$result)";
		    $result = mysqli_query($conn,$sql);
		    if (!$result) {
    			die('error'.' '. mysqli_error($conn));
  			}
			header("Location:table-project.php");
  }
?>
