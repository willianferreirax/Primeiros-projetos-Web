<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exemplo 3A - Switch
	</title>
	</head>
	<body>
		<?php
			$op=isset($_GET["tDia"])?$_GET["tDia"]:0;
			
			switch($op){
				case 1:
					echo "Vai para a escola";
					break;
				case 2:
					echo "Vai para a escola";
					break;
				case 3:
					echo "Vai para a escola";
					break;
				case 4:
					echo "Vai para a escola";
					break;
				case 5:
					echo "Vai para a escola";
					break;
				case 6:
					echo "Vai para a escola";
					break;
				case 7:
					echo "Fica em casa";
					break;
				case 8:
					echo "Fica em casa";
					break;
			}
		?>
		<a href="formularioexemplo.html">Voltar</a>
	</body>
</html>