<!DOCTYPE html>
<html>
<head>
	<title>Strchr - capturar caracter na string</title>
</head>
<body>
	<?php
	//strchr - capturar caracter

	$str = "contato@dominio.com.br";
	$x = strchr($str, "@");
	echo $x;
	?>
</body>
</html>