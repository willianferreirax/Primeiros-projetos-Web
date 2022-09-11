<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>
	<link href="css/form.css " rel="stylesheet">
	Exercicio 7 - Engordar e Emagrecer
	</title>
	</head>
	<body>
		<?php
		$peso = $_GET["peso"];
		$engordar=$peso + ((15/100)*$peso);
		$emagrecer=$peso - ((20/100)*$peso);

			echo "O peso da pessoa será ".$engordar." kg, caso engorde 15% <br>";
			echo "O peso da pessoa será ".$emagrecer." kg, caso emagreça 20%";
		?>
	</body>
</html>