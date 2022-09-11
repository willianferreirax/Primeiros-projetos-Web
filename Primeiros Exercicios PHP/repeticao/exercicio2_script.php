<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 2</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
			<?php
				
				$nota1=$_GET["Aluno11"];
				$nota2=$_GET["Aluno12"];
				$nota3=$_GET["Aluno21"];
				$nota4=$_GET["Aluno22"];
				$nota5=$_GET["Aluno31"];
				$nota6=$_GET["Aluno32"];
				$nota7=$_GET["Aluno41"];
				$nota8=$_GET["Aluno42"];
				$nota9=$_GET["Aluno51"];
				$nota10=$_GET["Aluno52"];
				$nota11=$_GET["Aluno61"];
				$nota12=$_GET["Aluno62"];

				$aluno1=($nota1+$nota2)/2;
				$aluno2=($nota3+$nota4)/2;
				$aluno3=($nota5+$nota6)/2;
				$aluno4=($nota7+$nota8)/2;
				$aluno5=($nota9+$nota10)/2;
				$aluno6=($nota11+$nota12)/2;
				$reprovado=0;
				$aprovado=0;
				$exame=0;

		
			
				if ($aluno1<=3) {
					echo "O aluno 1 foi reprovado<br>";
					$reprovado++;
				}
				else{
					if ($aluno1>3 && 7) {
						echo "O aluno 1 ficou de exame<br>";
						$exame++;
					}
					else{
						echo "O aluno 1 foi aprovado<br>";
						$aprovado++;
					}
				}

				if ($aluno2<=3) {
					echo "O aluno 2 foi reprovado<br>";
					$reprovado++;
				}
				else{
					if ($aluno2>3 && 7) {
						echo "O aluno 2 ficou de exame<br>";
						$exame++;
					}
					else{
						echo "O aluno 2 foi aprovado<br>";
						$aprovado++;
					}
				}

				if ($aluno3<=3) {
					echo "O aluno 3 foi reprovado<br>";
					$reprovado++;
				}
				else{
					if ($aluno3>3 && 7) {
						echo "O aluno 3 ficou de exame<br>";
						$exame++;
					}
					else{
						echo "O aluno 3 foi aprovado<br>";
						$aprovado++;
					}
				}

				if ($aluno4<=3) {
					echo "O aluno 4 foi reprovado<br>";
					$reprovado++;
				}
				else{
					if ($aluno4>3 && 7) {
						echo "O aluno 4 ficou de exame<br>";
						$exame++;
					}
					else{
						echo "O aluno 4 foi aprovado<br>";
						$aprovado++;
					}
				}

				if ($aluno5<=3) {
					echo "O aluno 5 foi reprovado<br>";
					$reprovado++;
				}
				else{
					if ($aluno5>3 && 7) {
						echo "O aluno 5 ficou de exame<br>";
						$exame++;
					}
					else{
						echo "O aluno 5 foi aprovado<br>";
						$aprovado++;
					}
				}

				if ($aluno6<=3) {
					echo "O aluno 6 foi reprovado<br>";
					$reprovado++;
				}
				else{
					if ($aluno6>3 && 7) {
						echo "O aluno 6 ficou de exame<br>";
						$exame++;
					}
					else{
						echo "O aluno 6 foi aprovado<br>";
						$aprovado++;
					}
				}

				$classe=($aluno1+$aluno2+$aluno3+$aluno4+$aluno5+$aluno6)/6;
				echo "o total de alunos aprovados foi $aprovado <br>
				o total de alunos de exame foi $exame <br>
				o total de alunos reprovados foi $reprovado<br>
				a média da classe foi $classe<br>";

			?>
	</body>
</html>