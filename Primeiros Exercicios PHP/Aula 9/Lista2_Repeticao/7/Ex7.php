
<?php
	$quant50=0;
	$cont10a20=0;
	$cont40=0;
	$somaA=0;
	for($i = 0;$i <= 24;$i++){
		$idade = isset($_GET["tIdade$i"])?$_GET["tIdade$i"]:0;
		$peso = isset($_GET["tPeso$i"])?$_GET["tPeso$i"]:0;
		$altura = isset($_GET["tAltura$i"])?$_GET["tAltura$i"]:0;
		
		if ($idade>50) {
			$quant50++;
		}

		if ($idade>=10 && $idade<=20) {
			$somaA+=$altura;
			$cont10a20++;
		}

		if ($peso<40) {
			$cont40++;
		}



	}
	$mediaA = $somaA/$cont10a20;
	$percent = ($cont40*100)/25;
	
	echo "A quantidade de pessoas com idade superior a 50 é $quant50<br>";
	echo "A média das alturas das pessaos com idade entre 10 e 20 anos é $mediaA<br>";
	echo "A porcentagem de pessoas com peso menor a 40Kg é $<br>";
?>