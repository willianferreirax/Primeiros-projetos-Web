<!DOCTYPE html>
<html>
<head>
	<title>Criptografia</title>
</head>
<body>
	<?php
	// crypt - senha hash
	$senha = "123abc";
	$senhahash = crypt($senha,1);
	$senhaVolta = "123abc";
	$novoHash = crypt($senhaVolta,1);
		echo $senhahash . " = " . $novoHash;
	echo "<br> <br>";

	//md5
	$senha = "123abc";
	$senhahash =md5($senha);
	$senhaVolta = "123abc";
	$novoHash = md5($senhaVolta);
		echo $senhahash . " = " . $novoHash;
	echo "<br><br>";

	//sha1
	$senha = "123abc";
	$senhahash =sha1($senha);
	$senhaVolta = "123abc";
	$novoHash = sha1($senhaVolta);
		echo $senhahash . " = " . $novoHash;
	echo "<br><br>";
	?>
</body>
</html>