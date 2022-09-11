<html>
<head>
<title>Form</title>
</head>
<body>
<form action='Ex2.php' method='GET'>
<?php
	$n=0;
	$i = 0;
	while($i <= 9){
		$n = $i+1;
		echo "<label>Digite o valor do objeto $n</label>
		<input type='text' name='obj$i'><br><br>";

		echo "<label>Digite a quantidade vendida do objeto $n</label>
		<input type='text' name='quan$i'><br><br>";
		$i++;
	}
?> 
<input type='submit' value='enviar'>
</form>
</body>
</htmL>
