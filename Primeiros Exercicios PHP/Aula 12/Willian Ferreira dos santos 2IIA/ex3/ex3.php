
<?php
	$vet1= array(3,5,4,2,2,5,3,2,5,9);
	$vet2= array(7,15,20,0,18,4,55,23,8,6);
	$vet3= array();
	$j=0;
	for ($i=0; $i <10 ;$i++) { 
		$vet3[$j]=$vet1[$i];
		$j++;
		$vet3[$j]=$vet2[$i];
		$j++;
	}


	for ($i=0; $i <20 ;$i++) { 
		echo $vet3[$i]."<br>";
	}

?>