<!DOCTYPE html>
<html>
<head>
	<title>Quebra de Linhas</title>
</head>
<body>
	<?php
	//quebra de linha
	//exemplo 1 - sem quebra
	echo "Texto";
	echo "<b> Negrito </b>";
	echo 45;

	//exemplo 2 - quebra de linha na apresentação
	echo "<br>Texto<br>";
	echo "<br><b>Negrito</b><br>";
	echo 45;

	//exemplo 3 - quebra na apresentação e no código html
	echo "\r\n<br>Texto<br>\r\n";
	echo "<b>Negrito</b>\r\n";
	echo 45;
	?>
</body>
</html>