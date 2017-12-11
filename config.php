<?php
	$DB_HOST = 'localhost';
	$DB_USER = 'webdeqgk_event';
	$DB_PASS = 'webdesky@2017';
	$DB_NAME = 'webdeqgk_event';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		return $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	?>