<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio 9 - Área do trapézio
	</title>
	</head>
	<body>
		<?php
		$maior = $_GET["mai"];
		$menor = $_GET["men"];
		$altura = $_GET["alt"];
		$area = (($maior+$menor)*$altura)/2;
			echo "A área do trapézio é igual a ".$area;
		?>
	</body>
</html>