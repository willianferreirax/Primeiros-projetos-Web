<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio 2 - multiplicação
	</title>
	</head>
	<body>
		<?php
		$valor = $_GET["tValor3"];
		$valor2= $_GET["tValor4"];
		$valor3= $_GET["tValor5"];
		
		$mult=$valor*$valor2*$valor3;
			echo "O valor da multiplicação é igual a $mult .";
		?>
	</body>
</html>