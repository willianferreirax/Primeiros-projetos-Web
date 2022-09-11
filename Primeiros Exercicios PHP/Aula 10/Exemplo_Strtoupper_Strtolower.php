<!DOCTYPE html>
<html>
<head>
	<title>Maiúscula e minúscula</title>
</head>
<body>
	<?php
	//strtoupper - transforma em maiúsculo

	$str = "Aprendendo PHP em PI. PHP é bem legal!!!";
	$str = strtoupper($str);
	echo $str;
	echo "<br><br>";

	//strtolower - transforma em minusculo
	$str = strtolower($str);
	echo $str;
	echo "<br><br>";

	//ucfirst - primeira letra em maiúsculo
	$str = ucfirst($str);
	echo $str;
	echo "<br><br>";


	?>
</body>
</html>