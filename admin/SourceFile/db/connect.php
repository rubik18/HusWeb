<?php 
// kết nối đến MySQl
$db = array(
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'dbname' => 'adminhus'
);
$conn =mysqli_connect( $db['server'],$db['username'], $db['password'] , $db['dbname']);
if (!$conn) {
	die('fail connect'). mysqli_connect_error($conn);
}
echo "successful";
 ?>