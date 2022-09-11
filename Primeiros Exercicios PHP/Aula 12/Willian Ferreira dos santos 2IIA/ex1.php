
<?php
	$num= array(3,5,4,2,2,5,3,2,5,9);
	
	for ($i=0; $i <10 ; $i++) { 

		$cont=0;


		for ($j=1; $j<=$num[$i]	; $j++) { 

			if ($num[$i] % $j == 0) {
				$cont=$cont+1;
			}

		}
		if ($cont==2) {
			echo "$num[$i] , é primo e está na posição $i<br>";
		}	
	}

?>