<html>
<head>
<title>Form</title>
</head>
<body>

<fieldset>
	<legend>Exercício 12</legend>
	<form action='Ex12.php' method='GET'>
		<?php
			$n=0;
			$i = 0;
			while($i <= 9){
				$n = $i+1;
				echo "<label for='cNum$i'>Digite o número $n</label>
				<input type='number' name='tNum$i' placeholder='Digite'><br>";
				$i++;
			}
		?> 
		<input type='submit' value='Enviar'>
	</form>
</fieldset>
<hr>


</body>
</htmL>
