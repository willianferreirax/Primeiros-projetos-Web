<!DOCTYPE html>
<html>
<head>
	<title>Impressão de valores</title>
</head>
<body>
	<?php
		/*Sintaxe
		print_r(array);*/

		$meuArray = array("Php", "SQL",100, "Assembler");
		print_r($meuArray);
		/*Resultado: Array ([0] => Php [1] => SQL [2] => 100 [3] => Assembler)*/
	?>
</body>
</html>