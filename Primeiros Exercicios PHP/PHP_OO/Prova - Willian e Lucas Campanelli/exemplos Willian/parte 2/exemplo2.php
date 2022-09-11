<html>
<head>
	<title>PHP_OO_HERANÇA_ELEMENTOS_ESTÁTICOS</title>
</head>
<body>

<?php
	class InstrumentoMusical
	{
		public $isPercurssao;
		public $volume;
		
		public function _construct($isPercurssao, $volume)
		{
			$this->isPercurssao = $isPercurssao
			$this->volume = $volume;
		}
		//public final function, impede a sobrescrita - (!)Fatal Error: Cannot override final method InstrumentoMusical::tocar()
		public final function tocar()
		{
			echo "Tocado no volume: ".$this->volume." decibéis.<hr>";
		}
	}
	//Metodo sobrescrito
	class Guitarra extends InstrumentoMusical
		public function tocar()
		{
			echo "Amplificador ligado em: ".$this->volume." decibéis.<br>";
		}
		
		
	}
		
		$instrumentoMusical = new InstrumentoMusical(true, 80);
		if($instrumentoMusical->isPercurssao)
		{
			echo "Instrumento de percurssão, volume: " . $instrumentoMusical->volume . ".<br>";
		}
		else
		{
			echo "Instrumento não de percurssão, volume: ".$instrumentoMusical->volume."<br>";
		}
		
		$instrumentoMusical->tocar();	

		$guitarra = new Guitarra(false, 40);
		if($guitarra->isPercurssao)
		{
			echo "Instrumento de percurssão, volume: " . $instrumentoMusical->volume . ".<br>";
		}
		else
		{
			echo "Instrumento não de percurssão, volume: ".$guitarra->volume."<br>";
		}
		$guitarra->tocar(); 
?>
</body>
</HTML>