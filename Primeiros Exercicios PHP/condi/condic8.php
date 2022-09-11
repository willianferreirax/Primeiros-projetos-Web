<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 8
	</title>
	</head>
	<body>
		<?php
			$op=$_GET["tOp"];
			$raiz=$_GET["tNu8"]
			$num1=$_GET["tNu7"];
			$num2=$_GET["tNuesqueci"];
			
			if ($op==1) {
				$soma=$num1+$num2;
				echo "O resultado da soma é $soma";
			}
			else{
				if($op==2){
					$result=sqrt($raiz);
					echo "A raiz quadrada de $raiz é $result";
				}
			}
				
				
		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>