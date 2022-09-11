<html>
<head>
<title>Form</title>
</head>
<body>
<form action='Ex7.php' method='GET'>
<?php
	$n=0;
	$i = 0;
	while($i <= 24){
		$n = $i+1;
		echo "<h5>Pessoa $n<br></h5>";
		echo "<label>Digite a idade $n</label>
		<input type='text' name='tIdade$i' placeholder='Idade'><br>";

		echo "<label>Digite o peso $n</label>
		<input type='text' name='tPeso$i' placeholder='Peso'><br>";

		echo "<label>Digite a altura $n</label>
		<input type='text' name='tAltura$i' placeholder='Altura'><br>";
		$i++;
	}
?> 
<input type='submit' value='enviar'>
</form>
</body>
</htmL>
