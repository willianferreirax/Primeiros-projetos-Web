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
		
		public function _construct($isPercurssao, $volume){
			$this->isPercurssao = $isPercurssao;
			$this->volume = $volume;
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
		
		
		
?>
</body>
</HTML>