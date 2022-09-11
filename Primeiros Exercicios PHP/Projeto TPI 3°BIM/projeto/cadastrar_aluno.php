<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastrar Aluno</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="Classes.css" rel="stylesheet">
		
	</head>
	<body class="body">

		<center>  	
	    	<div class="topo">
	    		
	    		<a href='menuprincipal.php'><img src="chapeu.png" height="300" width="200">
	    		<a href='menuprincipal.php'><img src="titulo.png" height="300" width="800" >
	    		
	    	</div>
    	
    	<div class="tela">
    		<nav>
				<ul class="menu2">
					<li>	
						<a href="Cadastrar_aluno.php">Cadastrar Aluno</a>
					</li>

					<li>	
						<a href="Cadastrar_prof.php">Cadastrar Professor</a>
					</li>

					<li>
						<a href="pesquisar_nome.php">Pesquisa por nome</a>
					</li>

					<li>
						<a href="Pesquisa_geral.php">Pesquisa geral</a>
					</li>
					
					<li>
						<a href="login.html">Sair</a>
					</li>
				</ul>
			</nav>
			
    		<div class="tela2">
					<p style="font-size: 40px"> Cadastrar aluno </p>
				
				<form method="POST" action="?validar=true">
					<p>Nome: <input type="text" name="nome"></p>

					<p>RG: <input type="text" name="rg"></p>
					
					<p>Turma: <input type="text" name="turma"></p>
					
					<p>Sexo: 
						<input type="radio" name="sexo" value="M">Masculino 
						<input type="radio" name="sexo" value="F">Feminino
					</p>

					<p>Endereço: <input type="text" name="endereco"></p>
			
					<input type="hidden" name="id" value="<?php echo $_REQUEST["id"]; ?>">
					
					<p><input type="reset" value="Limpar"> <input type="submit" name="cadastrar" value="Cadastrar"></p>

				</form>
			</div>
		</div>
		</center>
	</body>
</html>

<?php
	
	if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true){
		include 'conexao.php';
		$conn = conexao();
		
		$stmt = $conn->prepare("insert into aluno (nome_do_aluno, endereco, rg, nome_da_turma, sexo) values (?, ?, ?, ?, ?)");
		
		//Atrelando os dados às tabelas
		$stmt->bindParam(1, $_POST["nome"]);
		$stmt->bindParam(2, $_POST["endereco"]);
		$stmt->bindParam(3, $_POST["rg"]);
		$stmt->bindParam(4, $_POST["turma"]);
		$stmt->bindParam(5, $_POST["sexo"]);
		
		$stmt->execute();
		
		if($stmt->errorCode() != "00000"){
				$erro = "Erro código " . $stmt->errorCode() . ": ";
				$erro .= implode(", ", $stmt->errorInfo());
				echo $erro;
		}
		else{
			echo "<script language='javascript'>";
			echo "alert('Aluno cadastrado com sucesso.');";
			echo "</script>";
		}
	}