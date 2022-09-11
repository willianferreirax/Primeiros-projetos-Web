<html>
<head>
<title>Form</title>
</head>
<body>
<form action='Ex15.php' method='GET'>
<?php
	$n=0;
	$i = 0;
	while($i <= 9){
		$n = $i+1;
		echo "<h5>Pessoa $n <br></h5>";
		echo "<label>Digite o sexo $n</label>
		<input type='text' name='tSex$i' placeholder='Sexo'><br>";
		echo "<label>Digite a resposta $n</label>
		<input type='text' name='tResp$i' placeholder='Resposta'><br>";
		
		$i++;
	}
?> 
<input type='submit' value='enviar'>
</form>
</body>
</htmL>
