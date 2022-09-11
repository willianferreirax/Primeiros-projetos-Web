<!DOCTYPE html>
<html>
<head>
	<title>PHP_OO_CLASSES_OBJETOS</title>
</head>
<body>

	<?php
	
	class usuario{
		public $nome;
		public $telefone;
		public $endereco;
		public $numFilme;



	public function usuario($nome,$telefone,$endereco,$numFilme){
		$this->nome=$nome;
		$this->telefone=$telefone;
		$this->endereco=$endereco;
		$this->numFilme=$numFilme;
	}

	public function exibe(){
		echo $this->nome;
		echo "<br>";
		echo $this->telefone;
		echo "<br>";
		echo $this->endereco;
		echo "<br>";
		echo $this->numFilme;
	}
	}

	class funcionario{

		public $nome;
		public $telefone;
		public $endereco;
		public $salario;

		public function funcionario($nome,$telefone,$endereco,$salario){
		$this->nome=$nome;
		$this->telefone=$telefone;
		$this->endereco=$endereco;
		$this->salario=$salario;
		}

		public function exibe(){
		echo $this->nome;
		echo "<br>";
		echo $this->telefone;
		echo "<br>";
		echo $this->endereco;
		echo "<br>";
		echo $this->salario;
	}


	}


	class cd{
		public $artista;
		public $album;
		public $estilo;

		public function cd($artista,$album,$estilo){
		$this->artista=$artista;
		$this->album=$album;
		$this->estilo=$estilo;
		}


		public function exibe(){
		echo $this->artista;
		echo "<br>";
		echo $this->album;
		echo "<br>";
		echo $this->estilo;
		
		}
	}

	class dvd{
		
		public $titulo;
		public $estilo;

		public function cd($titulo,$estilo){
		
		$this->titulo=$titulo;
		$this->estilo=$estilo;
		}


		public function exibe(){
		
		echo $this->titulo;
		echo "<br>";
		echo $this->estilo;
		
		}
	}

	class bluray{
		public $titulo;
		public $resolucao;
		public $estilo;

		public function cd($titulo,$resolucao,$estilo){
		$this->titulo=$titulo;
		$this->resolucao=$resolucao;
		$this->estilo=$estilo;
		}


		public function exibe(){
		echo $this->titulo;
		echo "<br>";
		echo $this->resolucao;
		echo "<br>";
		echo $this->estilo;
		
		}
	}

	$usuario = new usuario("ze roberto",24567809,"casa do carai",200);
	$usuario->exibe();

	$func = new funcionario("jao",098876543,"rua do sei la",1000);
	$func->exibe();

	$cd = new cd("luan santana","paixao","sertanejo");
	$cd->exibe();

	$dvd = new dvd("viajem ao centero da terra","aventura");
	$dvd->exibe();

	$blu = new bluray("a aventura do leozin","infantil","full HD");
	$blu->exibe();
	?>


</body>
</html>