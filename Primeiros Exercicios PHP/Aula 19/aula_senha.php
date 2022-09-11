<!DOCTYPE html>
<html>
<head>
	<title>Alterar Senha</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div id="interface">
		<?php

			$erro = null;
			$valido = false;
				try{

					$connection = new PDO("mysql:host=localhost;dbname=banco_php","root","");
					$connection->exec("set names utf8");

				}
				catch(PDOExeption $e){
					echo "Falha: ".$e->getMessage();
					exit();
				}

				if (isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true) {
					if ($_POST["senha"] != $_POST["senhaRepete"]) {
						$erro = "Senhas digitadas diferentes";
						$erro .= "<br> <a href='?id=".$_POST["id"]."'>Tentar novamente </a>";
						echo $erro;
						exit();
					}
					else{
						$valido = true;

						$sql = "UPDATE usuarios set
							senha = ?
							WHERE id = ?";

						$stmt = $connection->prepare($sql);

						$passwordHash = md5($_POST["senha"]);
						$stmt->bindParam(1,$passwordHash);
						$stmt->bindParam(2,$_POST["id"]);
						$stmt->execute();

						if ($stmt->errorCode() != "00000") {
							$valido = false;
							$erro = "Erro código ". $stmt->errorCode().": ";
							$erro.= implode(", ", $stmt->errorInfo());
						}
					}
				}
				else{
					$rs = $connection->prepare("SELECT nome, email from usuarios WHERE id = ?");
					$rs->bindParam(1,$_REQUEST["id"]);

					if ($rs->execute()) {
						
						if ($registro = $rs->fetch(PDO::FETCH_OBJ)) {
							$_POST["nome"] = $registro->nome;
							$_POST["email"] = $registro->email;
						}
						else{
							$erro = "Registro não encontrado";
						}
					}
					else{
						$erro = "Falha na captura do registro";
					}
				}
		?>

		<?php
			if ($valido == true) {
				echo "Senha alterada com sucesso!";
				echo "<br> <br>";
				echo "<a href='aula_lista.php'>Visualizar registros</a>";
			}
			else{

				if (isset($erro)) {
					echo $erro ."<br><br>";
				}
			}

		?>

		<form method="POST" action="?validar=true">
			<fieldset>
				<legend>Alterar senha do Usuário</legend>

				<?php
					$rs = $connection->prepare("SELECT nome, email from usuarios WHERE id = ?");
						$rs->bindParam(1,$_REQUEST["id"]);

						if ($rs->execute()) {
							
							if ($registro = $rs->fetch(PDO::FETCH_OBJ)) {
								$_POST["nome"] = $registro->nome;
								$_POST["email"] = $registro->email;
							}
							else{
								$erro = "Registro não encontrado";
							}
						}
						else{
							$erro = "Falha na captura do registro";
						}
					echo "Usuário: ".$_POST["nome"]."<br>";
					echo "Email: ".$_POST["email"]."<br>";
				?>

				<p>Digite a senha: <input type="password" name="senha"></p>
				<p>Digite a senha novamente: <input type="password" name="senhaRepete"></p>

				<input type="hidden" name="id" value="<?php echo $_REQUEST["id"]; ?>">
				<p><input type="submit" value="Alterar Senha"></p>
			</fieldset>
		</form>

	</div>

</body>
</html>