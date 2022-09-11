<html>
<head>
<title>Form</title>
</head>
<body>
<form action='Ex8.php' method='GET'>
<?php
	$n=0;
	$i = 0;
	echo "Para olhos use: a - azul, p - preto, v - verde, c - castanho;<br><br>";
	echo "Para olhos use: p - preto, c - castanho, l - louro, r - ruivo;<br><br><br>";
	while($i <= 19){
		$n = $i+1;
		echo "<h5>Pessoa $n <br></h5>";
		echo "<label>Digite a idade $n</label>
		<input type='text' name='tIdade$i' placeholder='Idade'><br><br>";

		echo "<label>Digite o peso $n</label>
		<input type='text' name='tPeso$i' placeholder='Peso'><br><br>";

		echo "<label>Digite a altura $n </label>
		<input type='text' name='tAltura$i' placeholder='Altura'><br><br>";

		echo "<label>Digite a cor dos olhos $n </label>
		<input type='text' name='tOlhos$i' placeholder='Olhos'><br><br>";

		echo "<label>Digite a cor dos cabelos $n </label>
		<input type='text' name='tCabelo$i' placeholder='Cabelo'><br><br><br>";
		$i++;
	}
?> 
<input type='submit' value='enviar'>
</form>
</body>
</htmL>
