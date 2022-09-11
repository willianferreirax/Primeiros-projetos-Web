<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 24
	</title>
	</head>
	<body>
		<?php
			$preco=$_GET["tPreco2"];
			$tipo=$_GET["tTipo"];
			$refri=$_GET["tRef"];
			
			switch ($refri) {
				case '1':
					
					if ($tipo==1) {
						$precoA=8;
					}
					else{
						if ($tipo==2 || $tipo==3) {
							$precoA=0;
						}
					}

				break;

				case '2':

					if ($tipo==1 && $preco<15) {
						$precoA=2;
					}
					else{
						$precoA=5;
					}

					if ($tipo==2 && $preco<10) {
						$precoA=1.50;
					}
					else{
						$precoA=2.50;
					}

					if ($tipo==3 && $preco<30) {
						$precoA=3;
					}
					else{
						$precoA=2.50;
					}
				break;
				
			}

			if ($preco<25) {
				$imposto=(5/100)*$preco;
			}
			else{
				if ($preco>=25) {
					$imposto=(8/100)*$preco;
				}
			}

			$precoC=$preco+$imposto;


			if ($tipo!=1 && $refri!=1) {
				$desc=(3/100)*$precoC;
			}
			else{
				$desc=0;
			}

			$precoN=$precoC+$precoA-$desc;


			if ($precoN<=50) {
				$classi="barato";
			}
			else{
				if ($precoN>50 && $precoN<100) {
					$classi="normal";
				}
				else{
					$classi="caro";
				}
			}

			echo "O valor adicional é igual a $precoA <br>
			o valor do imposto é $imposto <br>
			o preço de custo é $precoC <br>
			o valor do desconto é $desc <br>
			o novo preço é igual a $precoN <br>
			o preço do produto é classificado como $classi";
			
		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>