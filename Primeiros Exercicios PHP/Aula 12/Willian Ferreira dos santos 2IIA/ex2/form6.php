<html>
<head>
<title>Form</title>
</head>
<body>
<form action='Ex6.php' method='GET'>
<?php
	$n=0;
	$i = 0;
	while($i <= 9){
		$n = $i+1;
		echo "<label>Digite o $n ° número</label>
		<input type='text' name='num$i'><br><br>";

		$i++;
	}
?> 
<input type='submit' value='enviar'>
</form>
</body>
</htmL>
