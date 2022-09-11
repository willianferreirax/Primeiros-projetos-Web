
<?php
	$somai=0;
	for($i = 0;$i <= 3;$i++){
		$idade = isset($_GET["tIdade$i"])?$_GET["tIdade$i"]:0;
		
		$somai+=$idade;

	}

	$mediai = $somai/4;
	
	echo "A média das idades digitadas foi $mediai";
?>