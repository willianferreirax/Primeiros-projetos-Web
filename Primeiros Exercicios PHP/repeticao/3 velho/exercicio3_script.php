<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 3</title>
	</head>
	<body>
			<?php
			

			$time=1;
			while ($time<=5) {
				$jogador=1;
				while($jogador<=11){
					$peso=$time;
					$$peso=$jogador;
					$url="peso".$time.$jogador;
					$$$peso =isset($_GET[$url])?$_GET["$url"]:0;
					$jogador++;
				}
				$time++;
			}

			$time=1;
			while ($time<=5) {
				$jogador=1;
				while($jogador<=11){
					$peso=$time;
					$$peso=$jogador;
					echo "time".$peso."jogador".${$peso}."peso".${$$peso}."<br>";
					$jogador++;
				}
				$time++;
			}


	/*

			$time=1;
			while ($time<=5) {
				$jogador=1;
				while($jogador<=11){
					$altura=$time;
					$$altura=$jogador;
					$url="altura".$time.$jogador;
					$$$altura =$_GET[$url];
					$jogador++;
				}
				$time++;
			}

			$time=1;
			while ($time<=5) {
				$jogador=1;
				while($jogador<=11){
					$idade=$time;
					$$idade=$jogador;
					$url="idade".$time.$jogador;
					$$$idade =$_GET[$url];
					$jogador++;
				}
				$time++;
			}



			

	
			//descobrindo a media da altura

			$somaaltura=0;

			while ($time<=5) {
				$jogador=1;
				while($jogador<=11){
					$altura=$time;
					$$altura=$jogador;
					$somaaltura=$somaaltura+$$$altura;
					$jogador++;
				}
				$time++;

			$mediaaltura=$somaaltura/55;

			//descobrindo menores de idade de cada time


			$time=1;
			while ($time<=5) {
				$jogador=1;
				while($jogador<=11){
					$idade=$time;
					$$idade=$jogador;
					

					if ($$$idade<18) {
						$menordeidade++;
					}

					$jogador++;
				}
				$time++;
			}

			//desobrindo a media de idade de cada time

			$time=1;
			while ($time<=5) {
				$jogador=1;
				while($jogador<=11){
					$idade=$time;
					$$idade=$jogador;
					$somaidade=$somaidade+$$$idade;
					$jogador++;
				}
				$mediaidade=$somaidade/11;
				echo "a media de idade no time $time é $mediaidade";
				$somaidade=0;
				$time++;
			}

			//descobrindo a % de jogadores com +80 kg

			$time=1;
			while ($time<=5) {
				$jogador=1;
				while($jogador<=11){
					$peso=$time;
					$$peso=$jogador;
					
					if ($$$peso>80) {
						$contpeso++;
					}

					$jogador++;
				}
				$time++;
			}

			$perc80=($contpeso*100)/55;
	*/
			?>
	</body>
</html>