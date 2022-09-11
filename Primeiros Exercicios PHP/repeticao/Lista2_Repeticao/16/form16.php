<html>
<head>
<title>Form</title>
</head>
<body>
<form action='Ex16.php' method='GET'>
<?php
	$n=0;
	$i = 0;
	while($i <= 3){
		$n = $i+1;
		echo "<label for='cIdade$i'>Digite a idade $n</label>
		<input type='text' name='tIdade$i' placeholder='Idade'><br>";
		
		$i++;
	}
?> 
<input type='submit' value='enviar'>
</form>
</body>
</htmL>
