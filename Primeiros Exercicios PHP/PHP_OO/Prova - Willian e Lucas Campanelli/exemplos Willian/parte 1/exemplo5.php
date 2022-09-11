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
		}

	$meuCarro = new Carro("vermelho");

	
	echo "O carro de cor ".$meuCarro->getCor(). " está na velocidade de ".$meuCarro->getVelocidade()."km/h <br>";

	$meuCarro->setCor("amarelo");
	$meuCarro->setVelocidade(70);

	echo "O carro de cor ".$meuCarro->getCor(). " está na velocidade de ".$meuCarro->getVelocidade()."km/h <br>";


	$meuCarro->setVelocidade(125);
	//deve exibir uma mensagem de velocidade acima do permitido
	echo "O carro de cor ".$meuCarro->getCor(). " está na velocidade de ".$meuCarro->getVelocidade()."km/h <br>";
	?>


</body>
</html>