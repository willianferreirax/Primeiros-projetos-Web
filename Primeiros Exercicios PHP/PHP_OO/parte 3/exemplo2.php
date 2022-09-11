<!DOCTYPE html>
<html>
<head>
	<title>PHP_OO_CLASSES_OBJETOS</title>
</head>
<body>

	<?php

	//abstração
	abstract class InstrumentoMusical
	{
		public $volume;
		public abstract function tocar();
	}

	class Guitarra extends InstrumentoMusical
	{
		public function tocar(){
			echo "Tocando guitarra <br>";
		}
	}

	 $guitarra = new Guitarra();
	 $guitarra->tocar();
	 
	?>


</body>
</html>