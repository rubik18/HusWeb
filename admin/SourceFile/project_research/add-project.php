<?php  
// Kết nối
require'../db/connect.php';
$conn->set_charset("utf8");
// chuối kết nối
  $id_project = $_POST['id_project'];
  $id_type= $_POST['type'];
  $name = $_POST['name'];
  $leader = $_POST['leader'];
  $workplace = $_POST['workplace'];
  $approval_date = $_POST['approval_date'];
  $acceptance_date = $_POST['acceptance_date'];
  $result = $_POST['result'];
  if ( isset($_POST['submit']) || empty($id_project) || empty($name) || empty($leader) || empty($workplace) || empty($approval_date || empty($approval_date) || empty($acceptance_date)) ) {
    header("Location:form-project.php?Empty= Please fill in the blanks");
  }
  else{
    if(!empty($_POST)) {
      var_dump($_POST);
    	  $sql = "INSERT INTO `topic_project` ( `id_project`,`id_type`, `name`, `lead_researcher`,`workplace`,`approval_date`,`acceptance_date`,`result`) VALUES ( '$id_project','$id_type', '$name','$leader','$workplace','$approval_date','$acceptance_date','$result')";
    	    $result = mysqli_query($conn,$sql);
    	    if (!$result) {
      			die('error'.' '. mysqli_error($conn));
    			}
    		header("Location:table-project.php");
    }
  }
?>
