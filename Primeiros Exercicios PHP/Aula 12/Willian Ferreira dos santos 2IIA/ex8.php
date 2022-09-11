
<?php
	$numeros1=array(6,8,1,10,3);
	$numeros2=array(20,0,7,2,5);
	$uniao=array();

	echo "numeros1<br>";
	print_r($numeros1);
	echo "<br><br>";

	echo "numeros2<br>";
	print_r($numeros2);
	echo "<br><br>";

	
	sort($numeros1);
	sort($numeros2);

	echo "numeros1 arrumado<br>";
	print_r($numeros1);
	echo "<br><br>";

	echo "numeros2 arrumado<br>";
	print_r($numeros2);
	echo "<br><br>";



	for ($i=0; $i <5 ; $i++) { 
		array_push($uniao,$numeros1[$i]);
		sort($uniao);
	}



	for ($i=0; $i <5 ; $i++) { 
		array_push($uniao,$numeros2[$i]);
		sort($uniao);
	}

	echo "união <br>";

	print_r($uniao);

?>