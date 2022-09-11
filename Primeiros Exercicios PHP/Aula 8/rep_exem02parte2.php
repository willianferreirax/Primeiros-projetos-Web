<!DOCTYPE html>
<html>
	<head>
		<title>exemplo 2</title>
	</head>
	<body>
			<?php
				$i=1;
				while($i<=5){
					$valor=$i;
					$url="tValor".$i;
					$$valor = isset($_GET[$url])?$_GET["$url"]:0;
					$i++;
				}
				$i=1;
				while ($i<=5) {
					$valor=$i;
					echo "Valor $i ==>> ".$$valor."<br/>";
					$i++;
				}
			?>
			<a href="exemplo2.php"></a>
	</body>
</html>