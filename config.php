<?php
	$config = array('host' => '127.0.0.1',
					'username' => 'root',
					'password' => '',
					'database' => 'pendataan');

	$db = new mysqli($config['host'],
					 $config['username'],
					 $config['password'],
					 $config['database']);

	if (mysqli_connect_errno()) {
		echo "Koneksi error";
	}
?>