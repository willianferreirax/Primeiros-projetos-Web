
<?php
	$vet1= array(3,-5,4,-2,2,-5,3,-2,5,-9);
	$posi= array();
	$neg= array();
	$j=0;
	for ($i=0; $i <10 ;$i++) { 
		if ($vet1[$i]>=0) {
			$posi[$i]=$vet1[$i];
		}
		else{
			if ($vet1[$i]<0) {
				$neg[$i]=$vet1[$i];
			}
		}

	}

	print_r($posi);
	echo "<br>";
	print_r($neg);



?>