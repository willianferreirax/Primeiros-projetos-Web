<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 25
	</title>
	</head>
	<body>
		<?php
			$grau=$_GET["tGraus"];

			if ($grau>=0 && $grau<=90) {
				$quad=1;
			}
			else{
				if ($grau>90 && $grau<=180) {
					$quad=2;
				}
				else{
					if ($grau>180 && $grau<=270) {
						$quad=3;
					}
					else{
						if ($grau>270 && $grau<=360) {
							$quad=4;
						}
					}
				}
			}

			$volta=abs(floor($grau/360));

			echo "o ângulo representa $volta completa";


			echo "o ângulo $grau se localiza no $quad quadrante";
			
			
		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>