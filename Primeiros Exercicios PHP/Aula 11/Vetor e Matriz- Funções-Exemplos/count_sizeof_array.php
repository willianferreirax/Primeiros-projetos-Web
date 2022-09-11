<!DOCTYPE html>
<html>
<head>
	<title>Tamanho de array</title>
</head>
<body>
	<?php
		/*Sintaxe
		count(array);
		sizeof(array);
		*/

		$meuArray = array("Php", "SQL",100, "Assembler");

		echo count($meuArray) . "<br>";
		//resultado: 4

		echo sizeof($meuArray);
		//resultado: 4
	?>
</body>
</html>