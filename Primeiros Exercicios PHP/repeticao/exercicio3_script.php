<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 3</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
			<?php
			$peso=$_GET['peso'];
			$altura=$_GET['altura'];
			$idade=$_GET['idade'];
			$times=5;
			$jogadores=11;
			$menor18=0;
			$peso80=0;
			$alturaMedia=0;

			for ($i=0; $i <$times ; $i++) { 
				$idadeMedia=0;
				for ($j=0; $j <$jogadores ; $j++) { 
					$idadeMedia=$idadeMedia+$idade[$j];	
					$alturaMedia=$alturaMedia+$altura[$j];
					
					if($idade[$j]<18){
						$menor18++;
					}
					if ($peso[$j]>80) {
						$peso80++;
					}
				}

				$idadeMedia=$idadeMedia/$jogadores;
				echo "a media das idades no time $i é igual a $idadeMedia<br>";
			}
			$alturaMedia=$alturaMedia/55;
			$porcent80=($peso80*100)/55;
			
			echo "A quantidade de jogadores com idade menor que 18 é igual a $menor18<br>";
			echo "A média da altura de todos os jogadores é $alturaMedia<br>";
			echo "a porcentagem de jogadores com mais de 80kg é $porcent80<br>";
			?>
	</body>
</html>