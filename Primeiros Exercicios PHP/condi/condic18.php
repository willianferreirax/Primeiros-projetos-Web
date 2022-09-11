<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 18
	</title>
	</head>
	<body>
		<?php
			$lado1=$_GET["tA3"];
			$lado2=$_GET["tB3"];
			$lado3=$_GET["tC3"];
				
			if ($lado1+$lado2>$lado3 && $lado3+$lado1>$lado2 && $lado2+$lado3>$lado1) {
				if($lado1==$lado2 && $lado1==$lado3 && $lado2==$lado3){
					echo "Seu triângulo é equilatero";
				}
				else{
					if($lado1<>$lado2 && $lado1<>$lado3 && $lado2<>$lado3){
						echo "Seu triângulo é escaleno";
					}
					else{
						if($lado1==$lado2 && $lado1<>$lado3){
							echo "Seu triângulo é isosceles";
						}
						else{
							if ($lado1==$lado3 && $lado1<>$lado2) {
								echo "Seu triângulo é isosceles";
							}
							else{
								if ($lado2==$lado3 && $lado1<>$lado2) {
									echo "Seu triângulo é isosceles";
								}
							}
						}
					}
				}
			}
			else{
				echo "os lados não compõem um triângulo";
			}
				
		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>