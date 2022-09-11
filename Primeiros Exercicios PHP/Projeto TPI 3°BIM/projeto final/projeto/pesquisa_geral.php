<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Pesquisa geral </title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="Classes.css" rel="stylesheet">
		
	</head>
	<body class="body">

		<center>  	
	    	<div class="topo">
	    		
	    		<a class="subir" href='menuprincipal.php'><img src="chapeu.png" height="300" width="200"></a>
	    		<a class="subir" href='menuprincipal.php'><img src="titulo.png" height="300" width="800" ></a>
	    		
	    	</div>
    	


    	<div class="tela">

    		<nav>
				<ul class="menu2">
					<li>	
						<a class="faixa" href="Cadastrar_aluno.php">Cadastrar Aluno</a>
					</li>

					<li>	
						<a class="faixa" href="Cadastrar_prof.php">Cadastrar Professor</a>
					</li>

					<li>
						<a class="faixa" href="pesquisar_nome.php">Pesquisa por nome</a>
					</li>

					<li>
						<a class="faixa" href="Pesquisa_geral.php">Pesquisa geral</a>
					</li>

					<li>
						<a class="faixa" href="login.html">Sair</a>
					</li>
				</ul>
			</nav>
    		
			<div class="tela2">
				<p style="font-size: 40px" class="expandir"> Pesquisa geral </p>

				<form method="POST" action="?validar=true">
					<p><input type="submit" name="pesquisar" value="Pesquisar" class="botao"></p>
				

				</form>

				<?php
	
	if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true){
		include 'conexao.php';
		$conn = conexao();
		
		$stmt = $conn->prepare("select * from aluno; select * from professor;");
		echo "<table>";
		echo "<tr>
		<th>RM</th>
		<th>Nome do aluno</th>
		<th>Endereco</th>
		<th>RG</th>
		<th>Nome da turma</th>
		<th>Excluir aluno</th>
		<th>Alterar dados do aluno</th>
		</tr>";
		if($stmt->execute()){
			while($registro = $stmt->fetch(PDO::FETCH_OBJ)){
				echo "<tr class='tr'>";
					echo "<td>".$registro->rm."</td>";
					echo "<td>".$registro->nome_do_aluno."</td>";
					echo "<td>".$registro->endereco."</td>";
					echo "<td>".$registro->rg."</td>";
					echo "<td>".$registro->nome_da_turma."</td>";
					echo "<td class='del'><a href='?excluira=true&id=".$registro->rm."'>Excluir </a></td>";
					echo "<td class='alt'><a href='alterar_aluno.php'>Alterar</a></td>";
				echo "</tr>";
			}
		}
		else{
			echo "Falha na exibição dos alunos";
		}
		
	
	
	echo "</table><br>";
	echo "<table>";
	$stmt = $conn->prepare("select * from professor;");


		echo "<tr>
		<th>Matricula do professor</th>
		<th>Nome do professor</th>
		<th>RG</th>
		<th>CPF</th>
		<th>Endereço</th>
		<th>Excluir professor</th>
		<th>Alterar dados do professor</th>
		</tr>";
		if($stmt->execute()){
			while($registro = $stmt->fetch(PDO::FETCH_OBJ)){
				echo "<tr class='tr'>";
					echo "<td>".$registro->matricula_do_professor."</td>";
					echo "<td>".$registro->nome_do_professor."</td>";
					echo "<td>".$registro->rg."</td>";
					echo "<td>".$registro->cpf."</td>";
					echo "<td>".$registro->endereco."</td>";
					echo "<td class='del'><a href='?excluirp=true&id=".$registro->matricula_do_professor."'>Excluir</a></td>";
					echo "<td class='alt'><a href='alterar_prof.php'>Alterar</a></td>";
				echo "</tr>";
			}
		}
		
	echo "</table>";
	}
	
	
	if(isset($_REQUEST["excluirp"]) && $_REQUEST["excluirp"] == true)
			{
				include 'conexao.php';
				$conn = conexao();
				$stmt = $conn->prepare("DELETE FROM professor WHERE matricula_do_professor = ?");
				$stmt->bindParam(1, $_REQUEST["id"]);
				$stmt->execute();
				
				if($stmt->errorCode() != "00000")
				{
					echo "Erro código ".$stmt->errorCode() . ": ";
					echo implode(", ", $stmt->errorInfo());
				}
				else
				{
					echo "<script language='javascript'>";
					echo "alert('Professor removido com sucesso.');";
					echo "</script>";
				}
			}
			
			if(isset($_REQUEST["excluira"]) && $_REQUEST["excluira"] == true)
			{
				include 'conexao.php';
				$conn = conexao();
				$stmt = $conn->prepare("DELETE FROM aluno WHERE rm = ?");
				$stmt->bindParam(1, $_REQUEST["id"]);
				$stmt->execute();
				
				if($stmt->errorCode() != "00000")
				{
					echo "Erro código ".$stmt->errorCode() . ": ";
					echo implode(", ", $stmt->errorInfo());
				}
				else
				{
					echo "<script language='javascript'>";
					echo "alert('Aluno removido com sucesso.');";
					echo "</script>";
				}
			}
?>
			</div>
			
		</div>
		</center>
	</body>
</html>