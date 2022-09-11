<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 5</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
		<form method="get" action="exercicio5_script.php">
			<?php
				echo "<h4>Digite 'h' para Homem<br>
				Digite 'm' para mulher<br><br></h4>";
					for ($i=0; $i < 15; $i++) {
						echo "<h5>Operario $i </h5><br>"; 
						echo "<label>Numero do operário:</label>
						<input type='text' name='operario[]'/><br>
						<label>Número de peças no mês</label>
						<input type='text' name='peca[]'> <br>
						<label>Sexo:</label>
						<input type='text' name='sex[]'><br>
						<label>Salario minimo:</label>
						<input type='text' name='salario[]'><br><br>";
					}
				
			?>
				<input type="submit" value="Enviar">
		</form>
	</body>
</html>