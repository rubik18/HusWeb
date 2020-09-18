<?php 
// kết nối đến MySQl
	$db = array(
		// 'server' => 'php-intern.cxo36tfgnhhp.ap-southeast-1.rds.amazonaws.com',
		// 'username' => 'root',
		// 'password' => '12345678',
		// 'dbname' => 'adminHUS'
		'server' => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'dbname' => 'adminHUS'
	);
	$conn =mysqli_connect( $db['server'],$db['username'], $db['password'] , $db['dbname']);
	if (!$conn) {
		die('fail connect'). mysqli_connect_error($conn);
	}
	// echo "successful";
 ?>
