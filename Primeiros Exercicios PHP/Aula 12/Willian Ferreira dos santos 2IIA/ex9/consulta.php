
<?php
	$numeros=array(1,2,3,4,5,6,7,8,9,10,11,12);
	$origem=array(10,9,8,7,6,5,4,3,2,1,0,13);
	$destino=array(23,55,76,34,78,32,21,45,12,1,2,13);
	$quantDisp=array(4,3,5,6,2,7,1,0,2,10,12,11);
	
	

	$ops=isset($_GET["ops"])?$_GET["ops"]:0;

	if ($ops==1) {

		echo "Os numeros dos voos são:";

		for ($i=0; $i <12 ; $i++) { 
			echo $numeros[$i]."<br>";
		}

	}

	if ($ops==2) {

		echo "A origem dos voos são:";

		for ($i=0; $i <12 ; $i++) { 
			echo $origem[$i]."<br>";
		}

	}

	if ($ops==3) {

		echo "Os destinos dos voos são:";

		for ($i=0; $i <12 ; $i++) { 
			echo $destino[$i]."<br>";
		}

	}





	
?>