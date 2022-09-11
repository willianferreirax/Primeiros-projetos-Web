<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio 6 - salário
	</title>
	</head>
	<body>
		<?php
		$fixo = $_GET["salario"];
		$vendas= $_GET["vendas"];
		$comissao=((4/100)*$vendas);
		$total=$fixo+$comissao;
			echo "O valor da comissão é igual a $comissao reais. <br>";
			echo "O salário final é igual a $total reais";
		?>
	</body>
</html>