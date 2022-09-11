<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 10
	</title>
	</head>
	<body>
		<?php
			$dia1=$_GET["tDia1"];
			$mes1=$_GET["tMes1"];
			$ano1=$_GET["tAno1"];
			$dia2=$_GET["tDia2"];
			$mes2=$_GET["tMes2"];
			$ano2=$_GET["tAno2"];
			
			if ($ano1>$ano2) {
				echo "A segunda data é a mais velha";
			}
			else{
				if ($ano1<$ano2) {
					echo "a primeira data é a mais velha";
				}
				else{
					if($ano1==$ano2){
						if ($mes1>$mes2) {
							echo "a segunda data é a mais velha";
						}
						else{
							if ($mes1<$mes2) {
								echo "a primeira data é a mais velha";
							}
							else{
								if ($mes1==$mes2) {
									if ($dia1>$dia2) {
										echo "a segunda data é mais velha";
									}
									else{
										if($dia1<$dia2){
											echo "a primeira data é mais velha";
										}
										else{
											echo "as datas são exatamente as mesmas";
										}
									}
								}
							}
						}
					}
				}
			}
				
				
		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>