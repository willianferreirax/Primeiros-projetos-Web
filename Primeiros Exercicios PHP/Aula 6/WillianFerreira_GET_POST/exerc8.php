<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio 8 - Peso em gramas
	</title>
	</head>
	<body>
		<?php
		$peso = $_GET["peso2"];
		$gramas =  $peso*1000;
			echo "O peso da pessoa em gramas é igual a ".$gramas;
		?>
	</body>
</html>