<html>
	<head>
		<meta charset="UTF-8">
		<title>
			Script Ex1
		</title>
		<link href="../style/style.css" rel="stylesheet">
	</head>
	<body>
		<form method="get" action="ex3.php">
		<?php
		const NUM_TIMES = 5;
		const NUM_JOGADORES = 11;
		$i=0;
		$j=0;
		$idade=$_GET['idade'];
		$menores18=0;
		$acima80kgs=0;
		$total_pessoas=NUM_TIMES*NUM_JOGADORES;
		$peso=$_GET['peso'];
		$altura=$_GET['altura'];
		$idade_media=0;
		$altura_media=0;
		$porcentagem_acima80kgs=0;
		for($i = 0; $i < NUM_TIMES; $i++){
			$idade_media = 0.0;
			for($j = 0; $j < NUM_JOGADORES; $j++){
				echo"Digite a idade, o peso e a altura do jogador $j do time $i <br>";
				echo "<input type='text' name='idade[]'> <br>";
				echo "<input type='text' name='altura[]'> <br>";
				echo "<input type='text' name='peso[]'> <br>";
				$idade_media += $idade[$j];
				$altura_media += $altura[$j];
				if ($idade[$j] < 18){
				$menores18++;
				}
				if ($peso[$j] >= 80.0){
				$acima80kgs++;
				} 
				
			}
			$idade_media = $idade_media / NUM_JOGADORES ;
			echo "A média das idades do time $i é $idade_media <br>";
		}

		$altura_media = $altura_media / $total_pessoas;
		$porcentagem_acima80kgs = 100.0 * $acima80kgs / $total_pessoas;

		echo "A média das alturas é $altura_media <br>" ;
		echo"O número de jogadores com menos de 18 anos é $menores18 <br>";
		echo"A porcentagem de jogadores com mais de 80kgs é $porcentagem_acima80kgs <br>";


		for($i = 0; $i < NUM_TIMES; $i++){
			$idade_media = 0.0;
			for($j = 0; $j < NUM_JOGADORES; $j++){
				echo "Digite a idade, o peso e a altura do jogador $j do time $i <br>";
				echo "<input type='text' name='idade[]'> <br>";
				echo "<input type='text' name='altura[]'> <br>";
				echo "<input type='text' name='peso[]'> <br>";
				$idade_media += $idade[$j];
				$altura_media += $altura[$j];
				if ($idade[$j] < 18){ 
				$menores18++;
				}
				if ($peso[$j] >= 80.0){ 
				$acima80kgs++;
				}
				
			}
			$idade_media = $idade_media / NUM_JOGADORES ;
			echo "A média das idades do time $i é $idade_media <br>";
		}

		$altura_media = $altura_media / $total_pessoas;
		$porcentagem_acima80kgs = 100.0 * $acima80kgs / $total_pessoas;

		echo"A média das alturas é $altura_media <br>";
		echo "O número de jogadores com menos de 18 anos é $menores18 <br>";
		echo"A porcentagem de jogadores com mais de 80kgs é $porcentagem_acima80kgs <br>";
				?>
				<input type="submit">
				</form>
		</body>
	</html>

		