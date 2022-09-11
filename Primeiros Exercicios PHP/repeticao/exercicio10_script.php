<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 10</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
			<?php
			session_start();

				
				$quant=$_SESSION['quant'];
				$sex=$_GET['sexo'];
				$exp=$_GET['exp'];
				$idade=$_GET['idade'];
				$masc=0;
				$fem=0;
				$homemCexp=0;
				$homem45=0;
				$mulher21=0;
				$somaidadH=0;
				$menor=1000;

				for ($i=0; $i < $quant; $i++) { 
					if ($sex[$i]=="m") {
						$masc++;
					}
					else{
						if ($sex[$i]=="f") {
							$fem++;
						}
					}
					if ($sex[$i]=="m" && $exp[$i]=="s") {
						$somaidadH+=$idade[$i];
						$homemCexp++;
					}
					if ($sex[$i]=="m" && $idade[$i]>45) {
						$homem45++;
					}
					if ($sex[$i]=="f" && $idade[$i]<21 && $exp[$i]=="s") {
						$mulher21++;
					}

					if ($sex[$i]=="f" && $exp[$i]=="s") {
						$menor=$idade[$i];
					}
					
				}
				$percHomem45=$homem45*100/$masc;
				$idadMediaHomCexp=$somaidadH/$homemCexp;
				echo "o número de candidatos do sexo feminino é $fem<br>
				o número de candidatos do sexo masculino é $masc<br>
				a idade media dos homens que já tem experiencia é $idadMediaHomCexp<br>
				a porcentagem de homens com mais de 45 anos é $percHomem45<br>
				o número de mulheres com menos de 21 anos com experiencia é $mulher21<br>
				a menor idade entre as mulheres que já tem expeciencia é $menor";
			?>


	</body>
</html>