<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exemplo 1 - Condição if else
	</title>
	</head>
	<body>
		<?php
			$ano=isset($_GET["tAno"])?$_GET["tAno"]:1900;
			$idade= date("Y") - $ano;
				echo"Você nasceu em $ano e tem $idade anos. <br>";
				if($idade >=18){
					$vota="já pode votar";
					$dirige="já pode dirigir";
				}
				else{
					$vota="não pode votar";
					$dirige="não pode dirigir";
				}
				echo "Com essa idade você $vota e também $dirige .";
		?>
		<a href="formularioexemplo.html">Voltar</a>
	</body>
</html>