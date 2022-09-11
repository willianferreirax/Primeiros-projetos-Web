<html>
<head>
<title>Form</title>
</head>
<body>
<?php
	$op=isset($_GET["op"])?$_GET["op"]:0;

	if ($op==1) {
			echo "<form action='consulta.php' method='GET'>";

			echo "Digite a opção<br>
			1-consulta numeros dos voos<br>
			2-consulta origens<br>
			3-consulta destinos";

			echo "<input type='text' name='ops'>";


			echo "<input type='submit' value='enviar'>";
			echo "</form>";
	}

	if ($op==2) {
			echo "<form action='reserv.php' method='GET'>";

			echo "Digite em qual voo deseja reservar<br>";

			echo "<input type='text' name='voo'>";

			echo "<input type='submit' value='enviar'>";
			echo "</form>";
	}	

		

	
?> 

</form>
</body>
</htmL>
