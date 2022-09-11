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

			public function __construct($cor){
				$this->cor=$cor;
				$this->velocidade=0;
			}

		}

	$meuCarro = new Carro("vermelho");

	
	echo "O carro de cor ".$meuCarro->cor. " está na velocidade de ".$meuCarro->velocidade."km/h <br>";

	?>


</body>
</html>