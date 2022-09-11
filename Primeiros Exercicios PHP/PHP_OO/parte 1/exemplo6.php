<!DOCTYPE html>
<html>
<head>
	<title>PHP_OO_CLASSES_OBJETOS</title>
</head>
<body>

	<?php

		class Carro{
			//sempre crie as propriedades como privado
			private $velocidade;
			private $cor;
			//define como será iniciado o padrao do objeto
			public function __construct($cor){
				$this->cor=$cor;
				$this->velocidade=0;
			}
			//sempre crie os métodos get e set (se o usuario puder alterar como publico, senão privado)
			public function getVelocidade(){
				return $this->velocidade;
			}

			public function getCor(){
				return $this->cor;
			}

			public function setCor($cor){
				$this->cor=$cor;
			}

			public function setVelocidade($velocidade){

				if($velocidade > 120){
					echo "velocidade não permitida <br>";
				}
				else{
					$this->velocidade= $velocidade;
				}
			}

			public function acelerar(){
				$this->setVelocidade($this->getVelocidade() + 5);
			}

			public function frear(){
				$this->setVelocidade($this->getVelocidade() - 3);
			}
		}

	$meuCarro = new Carro("vermelho");

	//velocidade 0
	echo "O carro de cor ".$meuCarro->getCor(). " está na velocidade de ".$meuCarro->getVelocidade()."km/h <br>";

	$meuCarro->acelerar();//acelerando

	//velocidade 5
	echo "O carro de cor ".$meuCarro->getCor(). " está na velocidade de ".$meuCarro->getVelocidade()."km/h <br>";


	$meuCarro->acelerar();//acelerando

	//velocidade 10
	echo "O carro de cor ".$meuCarro->getCor(). " está na velocidade de ".$meuCarro->getVelocidade()."km/h <br>";

	$meuCarro->frear();//desacelerando

	//velocidade 7
	echo "O carro de cor ".$meuCarro->getCor(). " está na velocidade de ".$meuCarro->getVelocidade()."km/h <br>";

	$meuCarro->frear();//desacelerando

	//velocidade 4
	echo "O carro de cor ".$meuCarro->getCor(). " está na velocidade de ".$meuCarro->getVelocidade()."km/h <br>";
	?>


</body>
</html>