<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 12
	</title>
	</head>
	<body>
		<?php
			$cargo=$_GET["tCargo"];
			$salario=$_GET["tSalarioa"];

			switch ($cargo) {
				case '1':
					$aumento=(50/100)*$salario;
					$salario=$salario+$aumento;
					echo "O cargo é Escriturário, o aumento corresponde a $aumento e o novo salario é R$ $salario";
					break;
				case '2':
					$aumento=(35/100)*$salario;
					$salario=$salario+$aumento;
					echo "O cargo é Secretário, o aumento corresponde a $aumento e o novo salario é R$ $salario";
					break;
				case '3':
					$aumento=(20/100)*$salario;
					$salario=$salario+$aumento;
					echo "O cargo é Caixa, o aumento corresponde a $aumento e o novo salario é R$ $salario";
					break;
				case '4':
					$aumento=(10/100)*$salario;
					$salario=$salario+$aumento;
					echo "O cargo é Gerente, o aumento corresponde a $aumento e o novo salario é R$ $salario";
					break;
				case '5':
			
					echo "O cargo é Diretor, Não há aumento";
					break;

				
				default:
					echo "digite um código válido";
					break;
			}
				
		?>
		<a href="decision.html">Voltar</a>
			}
	</body>
</html>