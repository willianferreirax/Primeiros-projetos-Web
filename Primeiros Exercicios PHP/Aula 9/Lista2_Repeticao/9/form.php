<html>
<head>
<title>Form</title>
</head>
<body>
<form action='Ex9.php' method='GET'>
<?php
	$n=0;
	$i = 0;
	while($i <= 9){
		$n = $i+1;
		echo "<h5>Pessoa $n <br></h5>";
		echo "<label for='cIdade$i'>Digite a idade $n</label>
		<input type='text' name='tIdade$i' placeholder='Idade'><br><br>";

		echo "<label for='cPeso$i'>Digite o peso $n</label>
		<input type='text' name='tPeso$i' placeholder='Peso'><br><br>";

		echo "<label for='cAltura$i'>Digite a altura $n</label>
		<input type='text' name='tAltura$i' placeholder='Altura'><br><br>";
		$i++;
	}
?> 
<input type='submit' value='enviar'>
</form>
</body>
</htmL>
