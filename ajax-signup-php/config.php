<?php

	define('DBhost', 'localhost');
	define('DBuser', 'root');
	define('DBPass', '');
	define('DBname', 'bit_db01');
	
	try {
		
		$DBcon = new PDO("mysql:host=".DBhost.";dbname=".DBname,DBuser,DBPass);
		
	} catch(PDOException $e){
		
		die($e->getMessage());
	}