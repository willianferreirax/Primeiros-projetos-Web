<!DOCTYPE html>
<html>
<head>
	<title>Exemplo Avançado</title>
</head>
<body>

	<form method="POST" action="?validar=true">
		<p>Nome: <input type="text" name="nome"></p>
		<p>E-mail: <input type="text" name="email"></p>
		<p>Idade: <input type="text" name="idade"></p>
		<p>Sexo: 
			<input type="radio" name="sexo" value="M">Masculino 
			<input type="radio" name="sexo" value="F">Feminino
		</p>
		<p>Interesses: 
			<input type="radio" value="h" name="interesse">Ciências Humanas 
			<input type="radio" value= "e" name="interesse">Ciências Exatas 
			<input type="radio" value= "b" name="interesse">Ciências Biológicas
		</p>
		<p>Estado Civil:
			<select name="estadocivil">
				<option>Selecione</option>
				<option>Solteiro(a)</option>
				<option>Casado(a)</option>
				<option>Divorciado(a)</option>
				<option>Viúvo(a)</option>
			</select>
		</p>
		<p>Senha: <input type="password" name="senha"></p>
		<p><input type="reset" value="Limpar"> <input type="submit" name="Enviar"></p>

	</form>

	<?php
		$erro = null;
		$valido = false;

		if (isset($_REQUEST["validar"]) && $_REQUEST["validar"]==true) {
			if (strlen(utf8_decode($_POST["nome"]))<5) {
				$erro = "Preencha o campo nome corretamente (5 ou mais caracteres)";
			}
			else{
				if (strlen(utf8_decode($_POST["email"]))<5) {
					$erro = "E-mail inválido, preencha o campo email corretamente";
				}
				else{
					if(is_numeric($_POST["idade"])==false){
						$erro = "O campo idade deve ser numérico";
					}
					else{
						if ($_POST["sexo"] != "M" && $_POST["sexo"] !="F") {
							$erro = "Selecione o campo sexo corretamente";
						}
						else{
							if ($_POST["estadocivil"] != "Solteiro(a)" && $_POST["estadocivil"] != "Casado(a)" && $_POST["estadocivil"] != "Divorciado(a)" && $_POST["estadocivil"] != "Viúvo(a)") {
								$erro = "Selecione o campo estado civil corretamente";
							}
							else{
								//validação campo interesse
								if (isset($_POST["interesse"]) != "h" && isset($_POST["interesse"]) != "e" && isset($_POST["interesse"]) != "b") {
									$erro = "Selecione o campo Interesses corretamente";
								}
								else{
									$valido=true;
								}
							}
						}
					}
				}
			}
		}
	?>

	<?php
		if($valido== true){
			echo "Dados enviados com sucesso !!!";
		}
		else{
			if (isset($erro)) {
				echo $erro."<br>";
			}
		}
	?>


</body>
</html>