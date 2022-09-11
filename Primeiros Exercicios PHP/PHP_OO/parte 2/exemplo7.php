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
			$this->isPercurssao = $isPercurssao;
			$this->volume = $volume;
		}
	}
	//heranca
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
		//herança
		$guitarra = new Guitarra(true, 40);
		if($guitarra->isPercurssao)
		{
			echo "Instrumento de percussão, volume: ".$guitarra->volume.".<br>";
		}
		else
		{
			echo "Instrumento não de percurssão, volume: ".$guitarra->volume."<br>";
		}

		
?>
</body>
</HTML>