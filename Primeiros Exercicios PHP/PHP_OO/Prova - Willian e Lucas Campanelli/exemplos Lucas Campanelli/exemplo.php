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

	//interface
	interface Transportavel
	{
		public function transportar();
	}

	//abstração
	//interface

	class Guitarra extends InstrumentoMusical implements Transportavel
	{
		public function tocar(){
			echo "Tocando guitarra <br>";
		}

		public function transportar(){
			echo "Transporte de guitarra";
		}
	}

	//interface
	
	class Computador implements Transportavel{
		public function transportar(){
			echo "Transporte de computador";
		}
	}

	//abstração
	//interface
	 $guitarra = new Guitarra();
	 $guitarra->tocar();
	 $guitarra->transportar();

	 //interface
	 $computador = new Computador();
	 $computador->transportar();
	?>


</body>
</html>