<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 3
	</title>
	</head>
	<body>
		<?php
			$num1=$_GET["tNum1"];
			$num2=$_GET["tNum2"];
			

				if($num1 > $num2){
					echo "O maior número é o $num1";
				}
				else{
					if ($num2 > $num1) {
						
						echo "O maior número é o $num2";
					}
					else{
						if ($num1 ==$num2) {
							echo"os números são iguais";
						}
					}
					
				}
				
		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>