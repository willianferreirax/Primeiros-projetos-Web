<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio 10 - Área do quadrado
	</title>
	</head>
	<body>
		<?php
		$lado = $_GET["lado"];
		$area = $lado*$lado;
			echo "A área do quadrado é igual a ".$area;
		?>
	</body>
</html>