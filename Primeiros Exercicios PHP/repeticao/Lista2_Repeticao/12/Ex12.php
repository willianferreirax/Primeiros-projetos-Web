
<?php
	$qnt = 0;
	$qd = 0;
	for($i = 0;$i <= 9; $i++){
		$Num = isset($_GET["tNum$i"])?$_GET["tNum$i"]:0;
		$qd=0;
		//Soma dos números primos
		for($j = 1; $j <= $Num; $j++){
			if($Num	% $j ==	0){
				$qd += 1;
			}
		}

		if($qd == 2){
			$qnt += 1;
		}
	}
	
	echo "$qnt é a quantidade dos números primos<br>";
?>