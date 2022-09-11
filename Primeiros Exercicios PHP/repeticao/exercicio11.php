<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 11</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
		<form method="get" action="exercicio11_script.php">
			<?php
				session_start();
				$quant=$_GET['quant'];
				$_SESSION['quant']=$quant;

				
					for ($i=1; $i<=$quant; $i++) {
						echo "Consumidor $i<br>";
						echo "<label>Salário:</label>
						<input type='text' name='salario[]'/> <br/> <br/>
						<label>Quilowats consumidos:</label>
						<input type='text' name='wats[]'/> <br/> <br/>
						<label>Tipo de Consumidor</label>
						<input type='text' name='tipo[]'/> <br/> <br/>";
					}
			?>
				<input type="submit" value="Enviar">
		</form>
	</body>
</html>