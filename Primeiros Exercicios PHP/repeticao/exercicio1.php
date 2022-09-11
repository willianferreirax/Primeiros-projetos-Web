<!DOCTYPE html>
<html>
<head>
	<title>exercicio 1</title>
	<link href="css/form.css " rel="stylesheet">
</head>
<body>
	<?php 
		$salario=1000;
		$aumento=1.5;

		for ($ano=2006;$ano <=2017;$ano++) { 
			$salario=$salario+($salario*($aumento/100));
			$aumento=$aumento*2;
		}

		echo "O salário do funcionario no atual ano de $ano é $salario";
	 ?>

</body>
</html>