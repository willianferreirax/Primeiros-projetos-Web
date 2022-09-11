<!DOCTYPE html>
<html>
<head>
	<title>array_key_exists</title>
</head>
<body>
	<?php
	/*Sintaxe
	array_key_exists(chave, array);
	*/
	$meuArray = array("pos1" => "Php", "pos2" => "SQL", "pos3" =>100, "pos4" =>"Assembler");

	//impressão antes do array_key_exists
	echo "Impressão antes do array_key_exists <br>";
	print_r($meuArray);

	//impressão depois do array_key_exists
	echo "<br> Impressão depois do array_key_exists <br>";
	if (array_key_exists("pos1",$meuArray)) {
		echo "Sim, essa posição existe";
	}
	else{
		echo "Não, essa posição não existe";
	}
	?>
</body>
</html>