<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 6</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
		<form method="get" action="exercicio6_script.php">
			<?php				
						echo "triangulo<br>";
						echo "<label for='basetriangulo'>base:</label>
						<input type='text' name='basetriangulo' id='basetriangulo' value='0' /> <br/> <br/>
						<label for='alturatriangulo'>altura:</label>
						<input type='text' name='alturatriangulo' id='alturatriangulo' value='0' /> <br/> <br/>";
			?>
				<input type="submit" value="Enviar">
		</form>
	</body>
</html>