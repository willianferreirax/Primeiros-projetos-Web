<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 6
	</title>
	</head>
	<body>
		<?php
			$imparpar=$_GET["tInt"];
			$test=$imparpar%2;
			

				if($test ==0){
					echo "O número $imparpar é par";
				}
				else{
					echo "O número $imparpar é impar";
				}
				
				
		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>