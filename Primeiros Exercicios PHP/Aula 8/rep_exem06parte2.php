<!DOCTYPE html>
<html>
	<head>
		<title>exemplo 6</title>
	</head>
	<body>
		<fieldset>
			<?php
				$num = isset($_GET["tNum"])?$_GET["tNum"]:1;
					echo "<legend>Tabuada do $num </legend>";
				for ($cont=1; $cont <=10 ; $cont++) { 
					$res=$num *$cont;
					echo "$num X $cont = $res <br/>";
				}
			?>
			<a href="exemplo6.php">Voltar</a>
		</fieldset>
	</body>
</html>