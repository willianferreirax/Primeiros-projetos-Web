<!DOCTYPE html>
<html>
<head>
	<title>exercicio - 7</title>
	<link href="css/form.css " rel="stylesheet">
</head>
<body>

	<?php 
		$carlos=$_GET["tCarlos"];
		$joao=$carlos/3;
		$mes=0;
		


		while ($joao<$carlos) {
			$carlos=$carlos+($carlos*(2/100));
			$joao=$joao+($joao*(5/100));
			$mes++;
		}

		echo "para que o valor de joão seja igual ou maior ao de carlos são necessarios $mes meses";
	 ?>
</body>
</html>