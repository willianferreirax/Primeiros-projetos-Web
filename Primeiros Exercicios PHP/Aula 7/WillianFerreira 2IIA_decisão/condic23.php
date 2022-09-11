<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 23
	</title>
	</head>
	<body>
		<?php
			$salario=$_GET["tSalario5"];
			$turno=$_GET["tTurno"];
			$cat=$_GET["tCat"];
			$hora=$_GET["thora3"];
			
			switch ($turno) {
				case '1':
					$coef=(10/100)*$salario
					break;
				case '2':
					$coef=(15/100)*$salario
					break;
				case '3':
					$coef=(12/100)*$salario
					break;
			}

			$salarioB=$hora*$coef;

			if ($cat ==1) {
				if ($salarioB>=300) {
					$imposto=(5/100)*$salarioB
				}
				else{
					$imposto=(3/100)*$salarioB
				}
			}
			else{
				if ($cat==2) {
					if ($salarioB>=400) {
						$imposto=(6/100)*$salarioB
					}
					else{
						$imposto=(4/100)*$salarioB
					}
				}
			}


			if ($turno=3 && $hora>80) {
				$grat=50;
			}
			else{
				$grat=30;
			}


			if ($cat==1 || $coef<=25) {
				$alime=$salarioB;
			}
			else{
				$alime=$salarioB/2;
			}

			$salarioL=$salarioB-$imposto+$grat+$alime;

			if ($salarioL<350) {
				$classi="mal remunerado";
			}
			else{
				if ($salarioL>=350 && $salarioL<=600) {
					$classi="Normal";
				}
				else{
					if ($salarioL>600) {
						$classi="bem remunerado";
					}
				}
			}

			echo "O coeficiente do salário é $coef <br>
			o valor do salário bruto é $salarioB <br>
			o valor do imposto é $imposto <br>
			o valor da gratificação é $grat <br>
			o valor do auxilio alimentação é $alime <br>
			o valor do salário líquido é $salarioL <br>
			a salário é classificado como $classi";

		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>