<html>
<head>
	<title>PHP_OO_HERANÇA_ELEMENTOS_ESTÁTICOS</title>
</head>
<body>

<?php
	class InstrumentoMusical
	{
		public $isPercurssao;
		public volume;
		
		public function _construct($isPercurssao, $volume)
		{
			$this->isPercurssao = $isPercurssao
			$this->volume = $volume;
		}
	}
		//heranca
		public function tocar()
		{
			echo "Tocado no volume: ".$this->volume." decibéis.<br>";
		}
	}
	class Guitarra extends InstrumentoMusical
	{
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
		//metodo
		$instrumentoMusical->tocar();
		
		$guitarra = new Guitarra(false, 40);
		if($guitarra->isPercurssao)
		{
			echo "Instrumento de percussão, volume: ".$guitarra->volume.".<br>";
		}
		else
		{
			echo "Instrumento não de percurssão, volume: ".$guitarra->volume."<br>";
		}
		//metodo
		$guitarra->tocar();		
?>
</body>
</HTML>