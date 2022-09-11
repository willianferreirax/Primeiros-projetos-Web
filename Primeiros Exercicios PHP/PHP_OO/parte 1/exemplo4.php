<!DOCTYPE html>
<html>
<head>
	<title>PHP_OO_CLASSES_OBJETOS</title>
</head>
<body>

	<?php

		class Carro{

			private $velocidade;
			private $cor;
			//define como será iniciado o padrao do objeto
			public function __construct($cor){
				$this->cor=$cor;
				$this->velocidade=120;
			}
			//os getters e setters permitem que sejam alterados os atributos do objeto e nao da classe, diferente do que acontece nos exemplos anteriores
			public function getVelocidade(){
				return $this->velocidade;
			}

			public function getCor(){
				return $this->cor;
			}
		}

	$meuCarro = new Carro("vermelho");

	
	echo "O carro de cor ".$meuCarro->getCor(). " está na velocidade de ".$meuCarro->getVelocidade()."km/h <br>";

	$meuCarro->cor="amarela";
	$meuCarro->velocidade = 220;

	echo "O carro de cor ".$meuCarro->cor. " está na velocidade de ".$meuCarro->velocidade."km/h <br>";//esse deve dar erro pois tenta exibir a variavel da classe, nao o objeto


	?>


</body>
</html>