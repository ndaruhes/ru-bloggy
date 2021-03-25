<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db_name = 'mn_temp';

	try{
		$connect = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);
		$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERMODE_EXCEPTION);
	}catch(PDOException $e){
		dia("Terjadi kesalahan: $e->getMessage()");
	}
?>