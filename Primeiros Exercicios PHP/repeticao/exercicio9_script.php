<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 9</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
			<?php
			session_start();

				$num=$_GET['num'];
				$quant=$_SESSION['quant'];
				$maior=$num[1];
				$menor=$num[1];
				$par=0;
				$impar=0;
				$somapar=0;
				$soma=0;

				for ($i=0; $i <$quant ; $i++) { 
					$soma+=$num[$i];

					if ($num[$i]>$maior) {
						$maior=$num[$i];
					}
					if ($num[$i]<$menor) {
						$menor=$num[$i];
					}
					if ($num[$i]%2==0) {
						$somapar+=$num[$i];
						$par++;
					}
					else{
						$impar++;
					}

				}
				$media=$soma/$quant;
				$mediapar=$somapar/$par;
				$percimp=($impar*100)/$quant;

				echo "a soma dos números digitados é $soma <br>
				a quantidade de números digitados é $quant <br>
				a média dos números digitados foi $media <br>
				o maior número digitado foi $maior <br>
				o menor número digitado foi $menor <br>
				a média dos números pares foi $mediapar <br>
				a porcentagem de números ímpares foi $percimp";

			?>

	</body>
</html>