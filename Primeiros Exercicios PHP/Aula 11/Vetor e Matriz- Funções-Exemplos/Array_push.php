<!DOCTYPE html>
<html>
<head>
	<title>Inserindo elementos em fila e pilha</title>
</head>
<body>
	<?php
		/*Sintaxe
		array_push(array[posição]);
		*/

		$meuArray = array("Php", "SQL",100, "Assembler");

		//impressão antes do push
		echo "impressão antes do push <br>";
		print_r($meuArray);

		//impressão depois do push
		echo "<br> <br> impressão depois do push";
		array_push($meuArray, "Java");
		print_r($meuArray);
	?>
</body>
</html>