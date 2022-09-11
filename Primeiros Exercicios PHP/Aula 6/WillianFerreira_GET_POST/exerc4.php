<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio 4 - Média ponderada
	</title>
	</head>
	<body>
		<?php
		$nota = $_GET["not1"];
		$nota2= $_GET["not2"];
		$peso = 2;
		$peso2 = 3;
		
		$media= (($nota*$peso)+($nota2*$peso2))/2;
			echo "O media ponderada é igual a $media .";
		?>
	</body>
</html>