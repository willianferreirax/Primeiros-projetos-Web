<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 20
	</title>
	</head>
	<body>
		<?php
			$produto=$_GET["tCod"];
			$peso=$_GET["tPeso2"];
			$pais=$_GET["tCodP"];
			
			$gramas=$peso*1000;

			if ($produto >=1 && $produto<=4) {
				$precot=10*$gramas;
			}
			else{
				if ($produto >=5 && $produto<=7) {
					$precot=25*$gramas;
				}
				else{
					if ($produto >=8 && $produto<=10) {
						$precot=35*$gramas;
					}
				}
			}

			switch ($pais) {
				case '1':
					$imposto=0;
					break;
				case '2':
					$imposto=(15/100)*$precot;
					break;
				case '3':
					$imposto=(25/100)*$precot;
					break;
			}

			$valort=$precot+$imposto;
			echo "O peso do produto em gramas é $gramas <br>
			o preço total é $precot <br>
			o valor do imposto é $imposto <br>
			o valor total é $valort.";


		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>