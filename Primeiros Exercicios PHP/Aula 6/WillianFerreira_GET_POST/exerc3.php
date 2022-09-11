<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio 3 - divisão
	</title>
	</head>
	<body>
		<?php
		$valor = $_GET["tValor6"];
		$valor2= $_GET["tValor7"];
		$div=$valor/$valor2;
			echo "O valor da divisão é igual a $div .";
		?>
	</body>
</html>