<!DOCTYPE html>
<html>
<head>
	<title>Lista Usuário</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div id=interface>
		<fieldset>
			<legend>Lista de Usuário</legend>
				<table>
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Idade</th>
						<th>Sexo</th>
						<th>Estado Civil</th>
						<th>Humanas</th>
						<th>Exatas</th>
						<th>Biológicas</th>
						<th>Hash de Senha</th>
					</tr>

					<?php
						try {
							
							$connection = new PDO("mysql:host=localhost;dbname=banco_php","root","");
							$connection->exec("set name utf8");

						} 
						catch (PDOExeption $e) {

							echo "Falha: ".$e->getMessage();
							exit();
							
						}
						//rotina de exclusão
						
						if (isset($_REQUEST["excluir"]) && $_REQUEST["excluir"] ==true) {

							$stmt = $connection->prepare("delete from usuarios where id = ?");
							$stmt->bindParam(1,$_REQUEST["id"]);
							$stmt->execute();

							if ($stmt->errorCode() != "00000") {
								
								echo "Erro código ". $stmt->errorCode().": ";
								echo implode(", ", $stmt->errorInfo());

							}
							else{
								echo "Usuário removido com sucesso!!! <br> <br>";
							}
						}

						//fim rotina de exclusão

						$rs = $connection->prepare("SELECT * FROM usuarios");

						if ($rs->execute()) {
							while ($registro = $rs -> fetch(PDO::FETCH_OBJ)) {
								echo "<tr>";
									echo "<td>". $registro->nome ."</td>";
									echo "<td>". $registro->email ."</td>";
									echo "<td>". $registro->idade ."</td>";
									echo "<td>". $registro->sexo ."</td>";
									echo "<td>". $registro->estado_civil ."</td>";
									echo "<td>". $registro->humanas ."</td>";
									echo "<td>". $registro->exatas ."</td>";
									echo "<td>". $registro->biologicas ."</td>";
									echo "<td>". $registro->senha ."</td>";

									echo "<td>";
									echo "<a href='?excluir=true&id=".$registro->id."'>Exclusão </a>";
									echo "<a href='aula_alterar.php?id=".$registro->id."'>Alteração </a>";
									echo "<a href='aula_senha.php?id=".$registro->id."'>Alteração de Senha</a>";

									echo "<td>";

								echo "<tr>";
							}
						}
						else{
							echo "Falha na seleção de usuários <br>";
						}
					?>

				</table>
		</fieldset>
		<p><a href="menu.php">Menu Principal</a></p>
	</div>
</body>
</html>