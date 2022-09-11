<!DOCTYPE html>
<html>
	<head>
		<title>exemplo 2</title>
	</head>
	<body>
		<form method="get" action="rep_exem02parte2.php">
			<?php
				$cont=1;
				while($cont<=5){
					echo "<label for='cValor$cont'>Valor $cont:</label>
					<input type='number' name='tValor$cont' id='cValor$cont' max='100' min='0' value='0' /> <br/> <br/>";
					$cont++;
				}
			?>
				<input type="submit" value="Enviar">
		</form>
	</body>
</html>