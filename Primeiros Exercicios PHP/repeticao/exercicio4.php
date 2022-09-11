<!DOCTYPE html>
<html>
<head>
	<title>exercicio - 4</title>
	<link href="css/form.css " rel="stylesheet">
</head>
<body>
	<?php  
		$num=$_GET["tnum"];
		$cont=0;

		if ($num<=1) {
			echo "numero invalido";
		}
		else{
			for ($i=1; $i <=$num ; $i++) { 
				if ($num%$i==0) {
					$cont++;
				}
			}
		}

		if ($cont==2) {
			echo "O número $num é primo";
		}
		else{
			echo "O número $num não é primo";
		}

	?>
	
</body>
</html>