
<?php
	$numeros=array(3,8,4,2,1,6,8,7,11,9);
	$numeros2=array(2,1,5,12,3,0,1,4,5,6);
	$uniao=array();
	$uniao2=array();
	//3,8,4,2,1,6,7,11,9,5,12,0
	$test=0;

	for ($i=0; $i <8 ; $i++) {	

		$test=array_search($numeros[$i],$uniao2);

		if ($test==false) {
			$uniao=$numeros[$i];
		}

		


	}


	for ($i=0; $i <8 ; $i++) {	

		$test=array_search($numeros2[$i],$uniao2);

		if ($test==false) {
			$uniao=$numeros2[$i];
		}

		


	}



	

	print_r($uniao);

?>