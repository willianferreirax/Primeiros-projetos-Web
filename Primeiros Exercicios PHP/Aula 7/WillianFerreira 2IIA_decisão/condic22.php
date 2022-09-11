<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 22
	</title>
	</head>
	<body>
		<?php
			$salario=$_GET["tSalario4"];
			$tempo=$_GET["tTempo"];
			

			if ($salario<200) {
				$imposto=0;
			}
			else{
				if ($salario>=200 && $salario<=450) {
					$imposto=(3/100)*$salario;
				}
				else{
					if ($salario>450 && $salario<700) {
						$imposto=(8/100)*$salario;
					}
					else{
						if ($salario>=700) {
							$imposto=(12/100)*$salario;
						}
					}
				}
			}


			if ($salario>500 ) {
				if ($tempo<=3) {
					$grat=20;
				}
				else{
					$grat=30;
				}
			}
			else{
				if ($salario<=500) {
					if ($tempo<=3) {
						$grat=23;
					}
					else{
						if($tempo>3 && $tempo<=6){
							$grat=35;
						}
						else{
							if ($tempo>6) {
								$grat=33;
							}
						}
					}
				}
			}

			$salarioL=$salario-$imposto+$grat;

			if ($salarioL<=350) {
				$classi=A;
			}
			else{
				if ($salarioL>350 && $salarioL<=600) {
					$classi=B;
				}
				else{
					$classi=C;
				}
			}


			echo "O valor do imposto é $imposto <br>
			O valor da gratificação é $grat <br>
			O valor do salário liquido é $salarioL <br>
			O salário está na categoria $classi";

		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>