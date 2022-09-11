<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 8</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
			<?php
			session_start();

				
				$quant=$_SESSION['quant'];
				$m=$_GET['m'];
				$n=$_GET['n'];
				$soma=0;

			for ($j=0; $j <$quant ; $j++) {
			$soma=0; 
				
				if ($m[$j]>$n[$j]) {
					for ($i=$n[$j]; $i <$m[$j] ; $i++) { 
						$soma=$m[$j]-$i+$soma;
					}
					$soma=$soma+$m[$j];
					echo "A soma entre todos os números do par $j foi $soma<br>";
				}
				else{
					for ($i=$m[$j]; $i <$n[$j] ; $i++) { 
						$soma=($n[$j]-$i)+$soma;
					}
					$soma=$soma+$n[$j];
					echo "A soma entre todos os números do par $j foi $soma<br>";
				}

				
			}
			?>

	</body>
</html>