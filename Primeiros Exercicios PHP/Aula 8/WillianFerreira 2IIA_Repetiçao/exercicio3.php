<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 3</title>
		<link href="css/form.css " rel="stylesheet">
	</head>
	<body>
		<form method="get" action="exercicio3_script.php">
			<?php
				
				for($time=1;$time<6;$time++){
					echo "time $time<br>";
					for ($jogador=1; $jogador< 12; $jogador++) {
						echo "jogador $jogador<br>";
						echo 
						"<label>peso:</label>
						<input type='text' name='peso[]' value='0' /> <br/> <br/>

						<label>altura:</label>
						<input type='text' name='altura[]' value='0' /> <br/> <br/>
						
						<label>idade:</label>
						<input type='text' name='idade[]' value='0' /> <br/> <br/>";
					}
				}
			?>
				<input type="submit" value="Enviar">
		</form>
	</body>
</html>