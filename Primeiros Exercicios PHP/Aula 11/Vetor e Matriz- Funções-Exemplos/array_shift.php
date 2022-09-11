<!DOCTYPE html>
<html>
<head>
	<title>Removendo elemento de uma fila</title>
</head>
<body>
	<?php
	/*Sintaxe
	array_shitf(array[posição])
	*/

	$meuArray = array("Php","SQL",100,"Assembler");

	//impressão antes do array_shift
	echo "impressão antes do array_shift <br>";
	print_r($meuArray);

	//impressão depois do array_shift
	echo " <br> <br> Impressão depois do array_shift";
	array_shift($meuArray);
	print_r($meuArray);
	?>
</body>
</html>