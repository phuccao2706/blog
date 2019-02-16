<?php
		$host ='localhost';
		$dbname = 'personalblog';
		$user = 'root';
		$pass = '';

		$opt = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		);
		try {
			$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, $opt);	
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
?>