<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 10</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
		<form method="get" action="exercicio10_script.php">
			<?php
				session_start();
				$quant=$_GET['quant'];
				$_SESSION['quant']=$quant;

				echo "<h4>Use 'm' para masculino<br>
				Use 'f' para feminino<br><br>
				Use 's' para confirmar experiencia<br>
				Use 'n' para negar experiencia<br></h4>";
				
					for ($i=1; $i<=$quant; $i++) {
						echo "Candidato $i<br>";
						echo "<label>idade $i:</label>
						<input type='text' name='idade[]'/> <br/> <br/>
						<label>sexo $i:</label>
						<input type='text' name='sexo[]'/> <br/> <br/>
						<label>experiencia $i:</label>
						<input type='text' name='exp[]'/> <br/> <br/>";
					}
			?>
				<input type="submit" value="Enviar">
		</form>
	</body>
</html>