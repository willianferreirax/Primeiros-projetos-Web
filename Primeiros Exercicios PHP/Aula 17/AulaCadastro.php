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
			<input type="radio" value="h" name="humanas">Ciências Humanas 
			<input type="radio" value="e" name="exatas">Ciências Exatas 
			<input type="radio" value="b" name="biologicas">Ciências Biológicas
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
								if (isset($_POST["humanas"]) != "h" && isset($_POST["exatas"]) != "e" && isset($_POST["biologicas"]) != "b") {
									$erro = "Selecione o campo Interesses corretamente";
								}
								else{
									$valido=true;
									/*inicio do codigo de conexao*/
									
									try{
										$connection = new PDO("mysql:host=localhost;dbname=banco_php","root","");
										$connection ->exec("set names utf8");
									}
									catch(PDOExeption $e){
										echo "Falha: ".$e->getMessage();
										exit();
									}
									
									$sql = "INSERT INTO usuarios(nome,email,idade,sexo,estado_civil,humanas,exatas,biologicas,senha)
									VALUES(?,?,?,?,?,?,?,?,?)";
									$stmt = $connection->prepare($sql);

									$stmt->bindParam(1, $_POST["nome"]);
									$stmt->bindParam(2, $_POST["email"]);
									$stmt->bindParam(3, $_POST["idade"]);
									$stmt->bindParam(4, $_POST["sexo"]);
									$stmt->bindParam(5, $_POST["estadocivil"]);

									$checkHumanas = isset($_POST["humanas"]) ? 1 : 0;
									$stmt->bindParam(6,$checkHumanas);
									
									$checkExatas = isset($_POST["exatas"]) ? 1 : 0;
									$stmt->bindParam(7,$checkExatas);

									$checkBiologicas = isset($_POST["biologicas"]) ? 1 : 0;
									$stmt->bindParam(8,$checkBiologicas);

									$passwordHash= md5($_POST["senha"]);
									$stmt->bindParam(9, $passwordHash);

									$stmt ->execute();

									if($stmt->errorCode() != "00000"){

										$valido = false;
										$erro = "Erro código ". $stmt->errorCode(). ": ";
										$erro.= implode(", ", $stmt->errorInfo());

									}
									/*FIm do codigo de conexao*/

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