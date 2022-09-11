<?php
	$erro = null;
	$valido = false;

		try {
			
			$connection = new PDO("mysql:host=localhost;dbname=banco_php","root","");
			$connection->exec("set names utf8");


		} catch (PDOException $e) {
			
			echo "Falha: ".$e->getMessage();
			exit();

		}
?>