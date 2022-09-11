<!DOCTYPE html>
<html>
<head>
	<title>Ex3</title>
</head>
<body>
	<?php
	function posicao(){

		$str="exemplo de string";
		$strn=str_replace("exemplo de string", "ex", $str);
		$exibir=strlen($strn);

		echo $exibir;
	}

	posicao();

	?>
</body>
</html>