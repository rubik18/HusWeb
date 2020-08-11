<?php 
session_start();
session_destroy();
// session_unset($SESSION["user"]);
// var_dump($SESSION);die();
header("Location: login.php")
 ?>