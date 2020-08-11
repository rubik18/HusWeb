<?php 
session_start();
session_unset();
// var_dump($SESSION);die();
// session_unset($SESSION["user"]);
header("Location: login.php")
 ?>