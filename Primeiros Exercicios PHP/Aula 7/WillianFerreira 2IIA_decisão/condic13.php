<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 13
	</title>
	</head>
	<body>
		<?php
			$op=$_GET["tOp2"];
			$salario=$_GET["tNu8"];

			switch ($op) {
				case '1':
					if ($salario<500) {
						$imposto=(5/100)*$salario;
						echo "O valor do imposto é $imposto";
					}
					else{
						if ($salario>=500 && $salario<=850) {
							$imposto=(10/100)*$salario;
							echo "O valor do imposto é $imposto";
						}
						else{
							if($salario>850){
								$imposto=(15/100)*$salario;
							echo "O valor do imposto é $imposto";
							}
						}
					}
					break;
				case '2':
					if ($salario>1500) {
						$novo=25+$salario;
						echo "O valor do novo salário é $novo";
					}
					else{
						if ($salario>=750 && $salario<=1500) {
							$novo=50+$salario;
							echo "O valor do novo salário é $novo";
						}
						else{
							if($salario>=450 && $salario<750){
								$novo=75+$salario;
								echo "O valor do novo salário é $novo";
							}
							else{
								if ($salario < 450) {
									$novo=100+$salario;
									echo "O valor do novo salário é $novo";
								}
							}
						}
					}
					break;
				case '3':
					if ($salario<=700) {
						echo "O funcionário é classificado como mal remunerado";
					}
					else{
						if($salario>700){
							echo "O funcionário é classificado como bem remunerado";
						}
					}
					break;

				default:
					echo "digite uma opção válida";
					break;
			}
				
		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>