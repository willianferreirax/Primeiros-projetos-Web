<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 11</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
			<?php
			session_start();

				
				$quant=$_SESSION['quant'];
				$salario=$_GET['salario'];
				$wats=$_GET['wats'];
				$tipo=$_GET['tipo'];
				$faturamento=0;
				$valorwat=0;
				$valorpago=0;
				$cons=0;

				for ($i=0; $i < $quant; $i++) { 
					$valorwat=$salario[$i]/8;

					if ($tipo[$i]==1) {
						$valorpago=($wats[$i]*$valorwat);
						$valorpago=$valorpago+((5/100)*$valorpago);
						$faturamento=$faturamento+$valorpago;
					}else{
						if ($tipo[$i]==2) {
							$valorpago=($wats[$i]*$valorwat);
							$valorpago=$valorpago+((10/100)*$valorpago);
							$faturamento=$faturamento+$valorpago;
						}else{
							if ($tipo[$i]==3) {
								$valorpago=($wats[$i]*$valorwat);
								$valorpago=$valorpago+((15/100)*$valorpago);
								$faturamento=$faturamento+$valorpago;
							}
						}

					}
					if ($valorpago>=500 && $valorpago<=1000) {
						$cons++;
						
					}





					echo "o valor do quilowatt do consumidor $i é $valorwat <br>
					o valor a ser pago pelo consumidor $i é $valorpago <br>"
					;
				}
				echo "o faturamento final da empresa é $faturamento <br>
					a quantidade de consumidores que pagam entre 500 e 1000 reais é $cons";

			?>

	</body>
</html>