<!DOCTYPE html>
<html>
<head>
	<title>PHP_OO_CLASSES_OBJETOS</title>
</head>
<body>

	<?php
	abstract class FormaGeometrica{
		abstract function calculoDaArea();
	}


	class Quadrado extends FormaGeometrica {
		public $comprimento;
		public $altura;

		public function _construct($comprimento,$altura){
			$this->comprimento= $comprimento;
			$this->altura = $altura;
		}


		public function calculoDaArea(){
			$area = $this->comprimento*$this->altura;
			echo $area;
		}
	}

	class Circulo extends FormaGeometrica {
		public $raio;

		public function _construct($raio){
			$this->raio= $raio;
		}

		public function calculoDaArea(){
			$area = 3.14*($this->raio*$this->raio);
			echo $area;
		}

	}

	class Losango extends FormaGeometrica {
		public $diagonalMaior;
		public $diagonalMenor;

		public function _construct($diagonalMenor,$diagonalMaior){
			$this->diagonalMenor= $diagonalMenor;
			$this->diagonalMaior = $diagonalMaior;
		}
		public function calculoDaArea(){
			$area =($this->diagonalMaior*$this->diagonalMenor)/2;
			echo $area;
		}
	}
	
	echo "Quadrado :";
	$quadrado = new Quadrado(10,10);
	$quadrado->comprimento=10;
	$quadrado->altura=10;
	$quadrado->calculoDaArea();
	echo "<br>";
	echo "Losango :";
	$losango = new Losango(11,15);
	$losango->diagonalMaior=11;
	$losango->diagonalMenor=15;
	$losango->calculoDaArea();
	echo "<br>";
	echo "Circulo :";
	$circulo = new Circulo(20);
	$circulo->raio=20;
	$circulo->calculoDaArea();
	echo "<br>";
	?>


</body>
</html>