
<?php
	$quant50=0;
	$somai=0;
	$quantR=0;
	$quantA15=0;
	$quantA=0;
	for($i = 0;$i <= 9;$i++){
		$idade = isset($_GET["tIdade$i"])?$_GET["tIdade$i"]:0;
		$peso = isset($_GET["tPeso$i"])?$_GET["tPeso$i"]:0;
		$altura = isset($_GET["tAltura$i"])?$_GET["tAltura$i"]:0;
		$olhos = isset($_GET["tOlhos$i"])?$_GET["tOlhos$i"]:0;
		$cabelo = isset($_GET["tCabelo$i"])?$_GET["tCabelo$i"]:0;


		//Quantidade de pessoas com mais de 50 anos e pesando menos de 60
		if ($idade>50 && $peso<60) {
			$quant50++;
		}

		//media das idades das pessoas com altura menor que 1.50
		if($altura<1.50){
			$somai+=$idade;
			$quantA15++;
		}

		//Quantidade de ruivos sem olhos azuis
		if ($cabelo=='r' && $olhos!='a') {
			$quantR++;
		}

		//porcentagem de pessoas com olhos azuis
		if ($olhos=='a') {
			$quantA++;
		}

		
		
	}
	$mediai = $somai/$quantA15;
	$percent = ($quantA*100)/20;
	
	echo "A quantidade de pessoas com idade maior que 50 anos e peso inferior a 60 Kg é $quant50<br>";
	echo "A média das idades das pessoas com altura inferior a 1.50 é $mediai<br>";
	echo "A porcentagem de pessoas com olhos azuis é $percent<br>";
	echo "A quantidade de pessoas ruivas que não tem olhos azuis é $quantR<br>";
?>