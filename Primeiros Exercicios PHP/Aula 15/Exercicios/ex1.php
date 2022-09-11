<?php
	
	$origem ='teste.txt';
	
	$destino = 'teste2.txt';
	
	$arquivo=fopen($destino, "w+");
	
	copy($origem, $destino);

	fclose($arquivo);

?>