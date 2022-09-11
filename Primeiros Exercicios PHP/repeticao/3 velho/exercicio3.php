<!DOCTYPE html>
<html>
	<head>
		<title>exercicio 3</title>
	</head>
	<body>
		<form method="get" action="exercicio3_script.php">
			<?php
				
				for($time=1;$time<6;$time++){
					echo "time $time<br>";
					for ($jogador=1; $jogador< 12; $jogador++) {
						echo "jogador $jogador<br>";
						echo "<label for='peso$time$jogador'>peso:</label>
						<input type='text' name='peso$time$jogador' id='peso$time$jogador' max='100' min='0' value='0' /> <br/> <br/>
						<label for='altura$time$jogador'>altura:</label>
						<input type='text' name='altura$time$jogador' id='altura$time$jogador' max='100' min='0' value='0' /> <br/> <br/>
						<label for='idade$time$jogador'>idade:</label>
						<input type='text' name='idade$time$jogador' id='idade$time$jogador' max='100' min='0' value='0' /> <br/> <br/>";
					}
				}
			?>
				<input type="submit" value="Enviar">
		</form>
	</body>
</html>