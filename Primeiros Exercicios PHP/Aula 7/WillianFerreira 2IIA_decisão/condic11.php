<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 11
	</title>
	</head>
	<body>
		<?php
			$hora1=$_GET["tHora1"];
			$min1=$_GET["tMin1"];
			$hora2=$_GET["tHora2"];
			$min2=$_GET["tMin2"];
			
			$ti=$hora1*60+$min1;
			$tf=$hora2*60+$min2;

			if ($tf<$ti) {
				$tr=1440-$ti;
				$tr+=$tf;
				echo floor($tr/60),":",$tr%60;
			}
			else{
				$tr=$tf-$ti;
				echo floor($tr/60),":",$tr%60;
			}

		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>