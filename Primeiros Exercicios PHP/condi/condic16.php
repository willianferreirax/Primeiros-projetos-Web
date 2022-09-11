<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 16
	</title>
	</head>
	<body>
		<?php
			$venda=$_GET["tVenda"];
			$preco=$_GET["tPreco"];

			if ($venda < 500 && $preco < 30) {
				$preco=$preco+ ((10/100)*$preco);
				echo "O produto vai sofrer aumento de 10% e passará a custar $preco";
			}
			else{
				if ($venda >= 500 && $venda < 1200 && $preco >= 30 && $preco <80) {
					$preco=$preco+ ((15/100)*$preco);
					echo "O preço do produto vai sofrer aumento de 15 % e passará a custar $preco";
				}
				else{
					if ($venda >= 1200 && $preco>=80) {
						$preco=$preco- ((20/100)*$preco);
						echo "O preço do produto vai sofrer redução de 20% e passará a custar $preco";
					}
				}
			}		
				
		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>