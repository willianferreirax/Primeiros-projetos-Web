
<?php
	$sim=0;
	$nao=0;
	$Msim=0;
	$Hnão=0;
	$homens=0;
	
	for($i = 0;$i <= 9;$i++){
		$sex = isset($_GET["tSex$i"])?$_GET["tSex$i"]:0;
		$resp = isset($_GET["tResp$i"])?$_GET["tResp$i"]:0;
		

		if ($resp=='s') {
			$sim++;
		}

		if ($resp=='n') {
			$nao++;
		}

		if ($sex=='m' && $resp=='s') {
			$Msim++;
		}



		if ($sex=='h') {
			$homens++;
			if ($resp=='n') {
				$Hnão++;
			}
			
		}

	}

	$percent=($Hnão*100)/$homens;

	echo "O número de pessoas que responderam SIM foi $sim<br><br>";

	echo "O número de pessoas que responderam NÃO foi $nao<br><br>";

	echo "O número de mulheres que responderam SIM foi $Msim<br><br>";

	echo "A porcentagem de homens que responderam não foi $percent<br>";


	
?>