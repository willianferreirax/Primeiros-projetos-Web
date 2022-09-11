<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 17
	</title>
	</head>
	<body>
		<?php
			$a=$_GET["tA2"];
			$b=$_GET["tB2"];
			$c=$_GET["tC2"];
			
			
			$delta=$b^2 - (4*$a*$c);
			if($delta >0){
				$x= (-$b+sqrt($delta))/(2*a);
				$x2= (-$b-sqrt($delta))/(2*a);
				echo "O resultado de x1 = $x , e x2 = $x2";
			}
			else{
				echo "O delta é negativo";
			}
				
				
		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>