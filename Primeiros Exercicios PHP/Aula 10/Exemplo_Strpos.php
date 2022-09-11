<!DOCTYPE html>
<html>
<head>
	<title>Strpos - posição do caracter na string</title>
</head>
<body>
	<?php
	//strpos - posição do caracter

	$texto = "PI - Programação para Internet";
	$x = strpos($texto, "P");
	while ($x !== false) {
		echo $x." ";
		$x = strpos($texto, "P",$x+1);
	}
	echo "<br>------------------------------------------------------<br>";

	$y = strpos($texto, "r");
	while ($y!==false) {
		echo $y." ";
		$y=strpos($texto, "r",$y+1);
	}
	echo "<br>------------------------------------------------------<br>";

	$frase = "PI - Programação Para Internet - PI PHP";
	$Z = strpos($frase, "PI");
	while ($Z !== false) {
		echo $Z." ";
		$Z = strpos($frase, "PI",$Z+1);
	}
	echo "<br>------------------------------------------------------<br>";
	?>
</body>
</html>