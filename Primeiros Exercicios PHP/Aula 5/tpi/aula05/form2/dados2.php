<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
<?php
	$valor = $_GET["tValor"];
	$raizq = sqrt($valor);
		echo "O Valor digitado é igual a ". number_format($raizq,2);
?>
</body>
</html>