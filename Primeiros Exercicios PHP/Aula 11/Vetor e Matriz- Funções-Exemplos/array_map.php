<!DOCTYPE html>
<html>
<head>
	<title>array_map</title>
</head>
<body>
	<?php
	/*Sintaxe
	array_map(função,array)
	*/
	function insereTexto($var){

	$var ="Um dos elementos do array é ".$var;
	return $var;
	}


	$meuArray = array("Php", "SQL" , 100, "Assembler");

	//impressão antes do array_map
	echo "impressão antes do array_map <br>";
	print_r($meuArray);

	//impressão depois do array_map
	echo " <br> <br> Impressão depois do array_map <br>";
	$novoArray = array_map("insereTexto", $meuArray);
	print_r($novoArray);
	?>
</body>
</html>