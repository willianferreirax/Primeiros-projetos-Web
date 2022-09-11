<!DOCTYPE html>
<html>
	<head>
		<title>exemplo 6</title>
	</head>
	<body>
		<form method="get" action="rep_exem06parte2.php">
			<select name="tNum">
				<?php
					for ($cont=1; $cont<=10 ; $cont++) { 
							echo "<option>$cont</option>";
					}
				?>
			</select>
			<input type="submit" value="Tabuada">
		</form>
	</body>
</html>