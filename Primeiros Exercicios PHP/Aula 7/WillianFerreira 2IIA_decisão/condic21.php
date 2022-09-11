<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 21
	</title>
	</head>
	<body>
		<?php
			$origem=$_GET["tCod3"];
			$peso=$_GET["tPeso3"];
			$carga=$_GET["tCod4"];
			
			$quilos=$peso/1000;

			if ($carga >=10 && $carga<=20) {
				$precot=100*$quilos;
			}
			else{
				if ($carga >=21 && $carga<=30) {
					$precot=250*$quilos;
				}
				else{
					if ($carga >=31 && $carga<=40) {
						$precot=340*$quilos;
					}
				}
			}

			switch ($origem) {
				case '1':
					$imposto=(35/100)*$precot;
					break;
				case '2':
					$imposto=(25/100)*$precot;
					break;
				case '3':
					$imposto=(15/100)*$precot;
					break;
				case '4':
					$imposto=(5/100)*$precot;
					break;
				case '3':
					$imposto=0;
					break;
			}

			$valort=$precot+$imposto;
			echo "O peso do produto em quilos é $quilos <br>
			o preço da carga é $precot <br>
			o valor do imposto é $imposto <br>
			o valor total é $valort.";


		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>