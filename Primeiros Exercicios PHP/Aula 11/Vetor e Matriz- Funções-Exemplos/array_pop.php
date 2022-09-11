<!DOCTYPE html>
<html>
<head>
	<title>Removendo elemento de uma pilha</title>
</head>
<body>
	<?php

		/*Sintaxe
		array_pop(array[posição]);
		*/

		$meuArray = array("Php", "SQL",100, "Assembler");

		//impressão antes do pop
		echo "impressão antes do push <br>";
		print_r($meuArray);

		//impressão depois do pop
		echo "<br> <br> Impressão depois do push";
		array_pop($meuArray);
		print_r($meuArray);	
	?>
</body>
</html>