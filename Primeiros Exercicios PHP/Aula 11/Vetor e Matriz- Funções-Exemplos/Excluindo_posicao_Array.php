<!DOCTYPE html>
<html>
<head>
	<title>Excluindo posição</title>
</head>
<body>
	<?php
		/*Sintaxe
		unset (array[posição])
		*/

		$meuArray = array("Php", "SQL",100, "Assembler");

		//impressão antes do unset
		echo "impressão antes do unset <br>";
		print_r($meuArray);

		//impressão depois do unset
		echo "<br> <br> Impressão depois do unset <br>";
		unset($meuArray[1]);
		print_r($meuArray);
	?>
</body>
</html>