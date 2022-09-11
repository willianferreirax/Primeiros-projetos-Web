<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio 5 - Produto
	</title>
	</head>
	<body>
		<?php
		$prc = $_GET["preço"];
		$prcfinal= $prc - (10/100)*$prc;
		
		echo "O valor final do produto com 10% de desconto é $prcfinal reais";
		
		?>
	</body>
</html>