<!DOCTYPE html>
<html>
<head>
	<title>Exemplo Simples</title>
</head>
<body>

	<form method="post" action="form_simples.php">
		<p>Nome: <input type="text" name="nome"></p>
		<p>Sobrenome: <input type="text" name="sobrenome"></p>
		<p>Estado Civil:
			<select name="estadocivil">
				<option>Solteiro</option>
				<option>Casado</option>
				<option>Divorciado</option>
				<option>Viúvo</option>
			</select>
		</p>

		<p><input type="reset" value="Limpar"> <input type="submit" value="Enviar"></p>
		
	</form>


</body>
</html>