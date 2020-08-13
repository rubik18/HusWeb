<?php 
// kết nối đến MySQl
	$db = array(
		'server' => 'php-intern.cxo36tfgnhhp.ap-southeast-1.rds.amazonaws.com',
		'username' => 'root',
		'password' => '12345678',
		'dbname' => 'adminhus'
	);
	$conn =mysqli_connect( $db['server'],$db['username'], $db['password'] , $db['dbname']);
	if (!$conn) {
		die('fail connect'). mysqli_connect_error($conn);
	}
	// echo "successful";
 ?>
