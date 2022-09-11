
<?php
	$fat = 0;
	$qnt = 0;
	$qntp = 0;
	for($i = 0;$i <= 9;$i++){
		$idade = isset($_GET["tIdade$i"])?$_GET["tIdade$i"]:0;
		$peso = isset($_GET["tPeso$i"])?$_GET["tPeso$i"]:0;
		$altura = isset($_GET["tAltura$i"])?$_GET["tAltura$i"]:0;
		
		//Média das idades
			$fat += $idade;
		
		//Pessoas com peso superior a 90 quilos e altura inferior a 1,50 metros
			if($peso > 90 && $altura < 1.50){
				$qnt += 1;
			}
		
		//Percentagem de pessoas  com idade entre 10 e 30 anos entre as pessoas que medem mais de 1,90 metro
			if(($idade > 10 && $idade < 30) && $peso > 1.90){
				$qntp += 1;
			}
	}
	$mediai = $fat/10;
	$percent = $qntp*10/100;
	
	echo "$mediai é a media das idades<br>";
	echo "$qnt é a quantidade de pessoas com peso superior a 90 quilos e altura inferior a 1.50 metros<br>";
	echo "$percent é a porcentagem de pessoas com idade entre 10 e 30 anos entre as pessoas que medem mais de 1.90 metros.";
?>