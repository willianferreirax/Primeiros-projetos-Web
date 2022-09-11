<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 9</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
		<form method="get" action="exercicio9_script.php">
			<?php
				session_start();
				$quant=$_GET['quant'];
				$_SESSION['quant']=$quant;

				
					for ($i=1; $i<=$quant; $i++) {
						echo "<label>Número $i:</label>
						<input type='text' name='num[]'/> <br/> <br/>";
					}
			?>
				<input type="submit" value="Enviar">
		</form>
	</body>
</html>