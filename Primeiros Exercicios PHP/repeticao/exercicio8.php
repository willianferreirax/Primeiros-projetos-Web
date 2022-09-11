<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 8</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
		<form method="get" action="exercicio8_script.php">
			<?php
				session_start();
				$quant=$_GET['quant'];
				$_SESSION['quant']=$quant;

				
					for ($i=1; $i<=$quant; $i++) {
						echo "Par $i<br>";
						echo "<label>M:</label>
						<input type='text' name='m[]'/> <br/> <br/>
						<label>N:</label>
						<input type='text' name='n[]'/> <br/> <br/>";
					}
			?>
				<input type="submit" value="Enviar">
		</form>
	</body>
</html>