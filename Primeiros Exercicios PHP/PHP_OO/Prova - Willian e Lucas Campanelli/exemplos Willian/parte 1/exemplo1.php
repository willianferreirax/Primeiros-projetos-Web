<!DOCTYPE html>
<html>
<head>
	<title>PHP_OO_CLASSES_OBJETOS</title>
</head>
<body>

	<?php

		class Carro{

			public $velocidade;
			public $cor;

		}

	$meuCarro = new Carro();

	$meuCarro->velocidade = 50;
	$meuCarro->cor = "prata";

	echo "O carro de cor".$meuCarro->cor. " está na velocidade de ".$meuCarro->velocidade."km/h <br>";

	?>


</body>
</html>