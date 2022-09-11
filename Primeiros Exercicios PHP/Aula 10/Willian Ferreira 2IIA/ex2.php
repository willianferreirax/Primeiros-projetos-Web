<!DOCTYPE html>
<html>
<head>
	<title>Ex2</title>
</head>
<body>
	<?php
	function reverter(){
		$str="Exemplo de string";
		$tamanho=strlen($str);
		for ($i=$tamanho; $i > 0; $i--) { 
			echo $str[$i];
		}
	}

	reverter();
	?>
</body>
</html>