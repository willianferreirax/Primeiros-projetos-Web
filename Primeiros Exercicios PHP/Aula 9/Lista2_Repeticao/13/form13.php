<html>
<head>
<title>Form</title>
</head>
<body>
<form action='Ex13.php' method='GET'>
<?php
	$n=0;
	$i = 0;
	while($i <= 14){
		$n = $i+1;
		echo "<h5>Pessoa $n <br></h5>";
		echo "<label>Digite a idade $n</label>
		<input type='text' name='tIdade$i' placeholder='Idade'><br>";

		echo "<label>Digite o peso $n</label>
		<input type='text' name='tPeso$i' placeholder='Peso'><br>";
		$i++;
	}
?> 
<input type='submit' value='enviar'>
</form>
</body>
</htmL>
