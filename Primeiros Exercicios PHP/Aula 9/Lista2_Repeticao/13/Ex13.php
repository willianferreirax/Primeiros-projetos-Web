
<?php
	$somapeso1=0;
	$somapeso2=0;
	$somapeso3=0;
	$somapeso4=0;
	$quant1=0;
	$quant2=0;
	$quant3=0;
	$quant4=0;
	for($i = 0;$i <= 14;$i++){
		$idade = isset($_GET["tIdade$i"])?$_GET["tIdade$i"]:0;
		$peso = isset($_GET["tPeso$i"])?$_GET["tPeso$i"]:0;

		if ($idade>=1 && $idade<=10) {
			$somapeso1+=$peso;
			$quant1++;
		}

		if ($idade>=11 && $idade<=20) {
			$somapeso2+=$peso;
			$quant2++;
		}

		if ($idade>=21 && $idade<=30) {
			$somapeso3+=$peso;
			$quant3++;
		}

		if ($idade>=31) {
			$somapeso4+=$peso;
			$quant4++;
		}
		
		
	}
	$media1=$somapeso1/$quant1;
	$media2=$somapeso2/$quant2;
	$media3=$somapeso3/$quant3;
	$media4=$somapeso4/$quant4;

	echo "A media do peso das pessoas na faixa etária de 1 a 10 anos é $media1<br>";
	echo "A media do peso das pessoas na faixa etária de 11 a 20 anos é $media2<br>";
	echo "A media do peso das pessoas na faixa etária de 21 a 30 anos é $media3<br>";
	echo "A media do peso das pessoas na faixa etária de 31 anos pra cima é $media4<br>";

?>