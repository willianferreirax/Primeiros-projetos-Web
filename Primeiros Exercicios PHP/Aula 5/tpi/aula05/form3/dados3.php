<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
<?php
	$nome = isset ($_GET["tNome"])?$_GET["tNome"]:"[não informado]";

	$ano = isset ($_GET["tAno"])?$_GET["tAno"]:"[não informado]";

	$sexo = isset ($_GET["tSexo"])?$_GET["tSexo"]:"[não informado]";

	$idade = date("Y") - $ano;


	
		echo "Seu nome é ".$nome.", é do sexo ".$sexo." e tem ".$idade." anos de idade.";
?>
</body>
</html>