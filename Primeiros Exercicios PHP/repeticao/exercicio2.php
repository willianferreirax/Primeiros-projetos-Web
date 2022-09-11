<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 2</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
		<form method="get" action="exercicio2_script.php">
			<?php
				
				for($aluno=1;$aluno<7;$aluno++){
					echo "Aluno $aluno<br>";
					for ($i=1; $i < 3; $i++) { 
						echo "<label>nota $i:</label>
						<input type='number' name='Aluno$aluno$i'/><br/>";
					}
				}
			?>
				<input type="submit" value="Enviar">
		</form>
	</body>
</html>