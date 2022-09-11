<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exemplo 3 - Switch
	</title>
	</head>
	<body>
		<?php
			$num=isset($_GET["tNum"])?$_GET["tNum"]:0;
			$op= isset ($_GET["top"])?$_GET["top"]:1;
			
			switch($op){
				case 1:
					$res = $num*2;
				break;
				case 2:
					$res = pow($num,3);
				break;
				case 3:
					$res = sqrt($num);
			}
				echo "O resultado da operação é $res";
		?>
		<a href="formularioexemplo.html">Voltar</a>
	</body>
</html>