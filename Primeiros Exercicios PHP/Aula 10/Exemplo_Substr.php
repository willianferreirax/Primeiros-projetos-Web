<!DOCTYPE html>
<html>
<head>
	<title>Substr - capturar substring</title>
</head>
<body>
	<?php
	//substr - capturar substring

	$str = "contato@dominio.com.br";

	$inicio = stripos($str, "@");
	$fim = strpos($str, ".",$inicio);
	$x = substr($str, $inicio+1, $fim-$inicio-1);
	echo $x;
	
	?>
</body>
</html>