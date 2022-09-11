<!DOCTYPE html>
<html>
<head>
	<title>Navegação em Array</title>
</head>
<body>
	<?php
		/*Sintaxe
		foreach(array as parte) {bloco de código};
		*/

		$meuArray = array("Php", "SQL",100, "Assembler");

		foreach ($meuArray as $parte) {
			echo "Tem no array: ".$parte."<br>";

		}

		/*Resultado:
		Tem no array: Php
		Tem no array: SQL
		Tem no array: 100
		Tem no array: Assembler
		*/
	?>
</body>
</html>