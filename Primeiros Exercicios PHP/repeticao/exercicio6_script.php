<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 6</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
			<?php
				$base=$_GET["basetriangulo"];
				$altura=$_GET["alturatriangulo"];

				if ($base<=0) {
					echo "base invalida<br>
					<a href='exemplo2.php'>Voltar</a>";
				}
				else{
					if ($altura<=0) {
						echo "altura invalida<br>
						<a href='exemplo2.php'>Voltar</a>";
					}
					else{
						$area=($base*$altura)/2;
						echo "a area do triângulo é $area";
					}
				}

			?>

	</body>
</html>