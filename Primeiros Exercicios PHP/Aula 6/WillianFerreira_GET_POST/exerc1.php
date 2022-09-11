<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio 1 - subtração
	</title>
	</head>
	<body>
		<?php
		$valor = $_GET["tValor"];
		$valor2= $_GET["tValor2"];
		$sub=$valor-$valor2;
			echo "O valor da subtração é igual a $sub .";
		?>
	</body>
</html>