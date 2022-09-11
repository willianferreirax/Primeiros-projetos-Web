
<?php
	$somaI=0;
	$quantO=0;
	$quantR=0;
	$quantB=0;
	
	for($i = 0;$i <= 14;$i++){
		$idade = isset($_GET["tIdade$i"])?$_GET["tIdade$i"]:0;
		$opiniao = isset($_GET["tOpiniao$i"])?$_GET["tOpiniao$i"]:0;
		
		if ($opiniao==3) {
			$somaI+=$idade;
			$quantO++;
		}
		if ($opiniao==1) {
			$quantR++;
		}

		if ($opiniao==2) {
			$quantB++;
		}
		
	}
	$mediai = $somaI/$quantO;
	$percent =($quantB*100)/15 ;
	
	echo "A média das idades das pessoas que responderam ÓTIMO é $mediai";
	echo "A quantidade de pessoas que responderam REGULAR é $quantR";
	echo "A porcentagem de pessoas que responderam BOM é $percent";
?>