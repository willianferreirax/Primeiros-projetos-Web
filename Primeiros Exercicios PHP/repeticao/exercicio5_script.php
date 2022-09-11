<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 5</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
			<?php

				$numero=$_GET['operario'];
				$peça=$_GET['peca'];
				$sexo=$_GET['sex'];
				$salmin=$_GET['salario'];
				$maior=0;
				$numMaior=0;
				$classe=0;
				$quant=0;
				$salario=0;
				$quanthomem=0;
				$quantmulher=0;
				$totalpeças=0;
				$folha=0;
				$somapecahomem=0;
				$somapecamulher=0;

				for ($i=0; $i <15 ; $i++) { 

					if ($peça[$i]<=30) {
						$classe=1;
					}
					else{
						if ($peça[$i]>=31 && $peça[$i]<=41) {
							$classe=2;
							$quant=$peça[$i]-30;
						}
						else{
							if ($peça[$i]>41) {
								$classe=3;
								$quant=$peça[$i]-30;
							}
						}
					}


					if ($classe==1) {
						$salario=$salmin[$i];
					}
					else{
						if($classe==2){
							$salario=$salmin[$i]+((3/100)*$salmin)*$quant;
						}
						else{
							if ($classe==3) {
								$salario=$salmin[$i]+((5/100)*$salmin)*$quant;
							}
						}
					}

					echo "O operario de número $numero[$i] tem salario igual a $salario<br><br>";

					if ($salario>$maior) {
						$maior=$salario;
						$numMaior=$numero[$i];
					}






					if ($sexo[$i]=="h") {
						$somapecahomem=$somapecahomem+$peça[$i];
						$quanthomem++;
					}
					else{
						if ($sexo[$i]=="m") {
							$somapecamulher=$somapecamulher+$peca[$i];
							$quantmulher++;
						}
					}
					

					$totalpeças=$totalpeças+$peça[$i];
					$folha=$folha+$salario;
				}

				$mediapecahomem=$somapecahomem/$quanthomem;
				$mediapecamulher=$somapecamulher/$quantmulher;

				echo "O total de peças fabricadas no mês foi $totalpeças<br>
				A média de peças fabricadas por homens é $mediapecahomem<br>
				A média de peças fabricadas por mulheres é $mediapecamulher<br>
				o total da folha de pagamento da fabrica é $folha<br>
				o numero do operario(a) com maior salário é $numMaior";


			?>
	</body>
</html>