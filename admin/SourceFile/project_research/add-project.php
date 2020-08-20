<?php  
// Kết nối
require'../db/connect.php';
session_start();
unset($_SESSION['id_project']);
unset($_SESSION['name']);
unset($_SESSION['leader']);
unset($_SESSION['workplace']);
unset($_SESSION['approval_date']);
unset($_SESSION['acceptance_date']);
unset($_SESSION['result']);
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
  // session
  $_SESSION['id_project'] = $id_project;
  $_SESSION['name'] = $name;
  $_SESSION['leader'] = $leader;
  $_SESSION['workplace'] = $workplace;
  $_SESSION['approval_date'] = $approval_date;
  $_SESSION['acceptance_date'] = $acceptance_date;
  $_SESSION['result'] = $result;
  if ( isset($_POST['submit']) || empty($id_project) || empty($name) || empty($leader) || empty($workplace) || empty($approval_date || empty($acceptance_date)|| empty($result)) ) {
    header("Location:form-project.php?empty=true");
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

