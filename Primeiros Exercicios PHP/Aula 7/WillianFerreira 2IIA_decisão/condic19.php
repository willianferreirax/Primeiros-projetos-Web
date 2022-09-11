<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 19
	</title>
	</head>
	<body>
		<?php
			$alt=$_GET["tAlt"];
			$peso=$_GET["tPeso"];
			
			if ($alt<1.20) {
				if ($peso<=60) {
					echo "Classificado como A";
				}
				else{
					if ($peso>60 && $peso<=90) {
						echo "Classificado como D";
					}
					else{
						if ($peso>90) {
							echo "Classificado como G";
						}
					}
				}
			}
			else{
				if ($alt>=1.20 && $alt<=1.70) {
					if ($peso<=60) {
						echo "Classificado como B";
					}
					else{
						if ($peso>60 && $peso<=90) {
							echo "Classificado como E";
						}
						else{
							if ($peso>90) {
								echo "Classificado como H";
							}
						}
					}
				}
				else{
					if ($peso<=60) {
						echo "Classificado como C";
					}
					else{
						if ($peso>60 && $peso<=90) {
							echo "Classificado como F";
						}
						else{
							if ($peso>90) {
								echo "Classificado como I";
							}
						}
					}
				}
			}
				
		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>