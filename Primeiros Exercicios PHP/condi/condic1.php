<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 1
	</title>
	</head>
	<body>
		<?php
			$trabalho=$_GET["tTrabalho"];
			$semestral=$_GET["tSem"];
			$exame=$_GET["tExam"];
			$media=(($trabalho*2)+($semestral*3)+($exame*5))/10;

				if($media>=0 && $media<=5){
					echo "A nota foi: $media, e o conceito é :E";
				}
				else{
					if ($media>5 && $media<=6) {
						echo "A nota foi: $media, e o conceito é :D";
					}
					else{
						if ($media>6 && $media<=7) {
							echo"A nota foi: $media, e o conceito é :C";
						}
						else{
							if ($media>7 && $media<=8) {
								echo "A nota foi: $media, e o conceito é :B";
							}
							else{
								if ($media>8 && $media<=10) {
									echo "A nota foi: $media, e o conceito é :A";
								}
							}
						}
					}
					
				}
				
		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>