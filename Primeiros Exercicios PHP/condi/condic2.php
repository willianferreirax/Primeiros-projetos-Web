<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 2
	</title>
	</head>
	<body>
		<?php
			$nota1=$_GET["tNota1"];
			$nota2=$_GET["tNota2"];
			$nota3=$_GET["tNota3"];
			$media=($nota1+$nota2+$nota3)/3;

				if($media>=0 && $media<=3){
					echo "A nota foi: $media, e o aluno está Reprovado";
				}
				else{
					if ($media>3 && $media<=7) {
						//calculo de nota necessaria
						echo "A nota foi: $media, e o aluno ficou para Exame";
					}
					else{
						if ($media>7 && $media<=10) {
							echo"A nota foi: $media, e o aluno está Aprovado";
						}
						else{
							if ($media>7 && $media<=8) {
								echo "A nota foi: $media, e o conceito é :B";
							}
						}
					}
					
				}
				
		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>