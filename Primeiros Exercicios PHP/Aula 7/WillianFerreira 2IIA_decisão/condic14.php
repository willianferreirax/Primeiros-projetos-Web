<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 14
	</title>
	</head>
	<body>
		<?php
			$salarioini=$_GET["tSalario2"];


		
			if($salarioini<=500){
				$salario=$salarioini+((5/100)*$salarioini);
				$salario=$salario+150;
			}
			else{
				if ($salarioini>500 && $salarioini<=1200) {
					$salario=$salarioini+((12/100)*$salarioini);
					if ($salarioini<=600) {
						$salario=$salario+150;
					}
					else{
						$salario=$salario+100;
					}
				}
				else{
					if ($salarioini>1200) {
						$salario=$salarioini+100;
					}
				}
			}


				
		?>
		<a href="decision.html">Voltar</a>
			
	</body>
</html>