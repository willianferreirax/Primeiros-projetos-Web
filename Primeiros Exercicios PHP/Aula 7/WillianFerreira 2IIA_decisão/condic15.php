<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 15
	</title>
	</head>
	<body>
		<?php
			$salariomin=$_GET["tSalario3"];
			$hrtrab=$_GET["tHrtrab"];
			$dep=$_GET["tDep"];
			$hrext=$_GET["tHrex"];

			$valhrtrab=1/5*$salariomin;
			$salario=$hrtrab*$valhrtrab;
			$salario=$salario+(32*$dep);
			$valhrextrab=$valhrtrab+((50/100)*$valhrtrab);
			$salario=$salario+$hrext*$valhrextrab;

			if ($salario>=200 && $salario<=500) {
				$salario=$salario - ((10/100)*$salario);
			}
			else{
				$salario=$salario - ((20/100)*$salario);
			}

			if ($salario<=350) {
				$salario=$salario+100;
			}
			else{
				$salario=$salario+50;
			}
			echo "O salário a receber é $salario";

			
				
		?>
		<a href="decision.html">Voltar</a>
			
	</body>
</html>