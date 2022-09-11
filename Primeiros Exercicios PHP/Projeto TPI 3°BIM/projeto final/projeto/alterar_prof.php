<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Alterar Professor</title>
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
    		
				
				<p style="font-size: 40px" class="expandir"> Alterar dados do professor </p>

				<form method="POST" action="?validar=true">
					<p>Nome: <input type="text" name="nome" class="input"></p>

					<p>RG: <input type="text" name="rg" class="input"></p>

					<p>CPF: <input type="text" name="cpf" class="input"></p>
					
					<p>Endereço: <input type="text" name="endereco" class="input"></p>
					
					<p>Sexo: 
						<input type="radio" name="sexo" value="M">Masculino 
						<input type="radio" name="sexo" value="F">Feminino
					</p>

					<p>Login do sistema: <input type="text" name="login_sis" class="input"></p>

					<p>Senha do sistema: <input type="text" name="senha_sis" class="input"></p>
					
					<p>Matricula do Professor: <input type="text" name="id" class="input"></p>

					
					
					
					
					<input type="hidden" name="id" value="<?php echo $_REQUEST["id"]; ?>">
					
					<p><input type="reset" value="Limpar" class="botao"> <input type="submit" name="Alterar" class="botao"></p>

				</form>
			</div>
				
			
		</div>
		</center>
	</body>
</html>

<?php
	
	if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true){
		include 'conexao.php';
		$id=$_POST['id'];
		$conn = conexao();
		
		$stmt = $conn->prepare("update professor set nome_do_professor = ?, rg = ?, cpf = ?, endereco = ?, sexo = ?, login = ?, senha = ? where matricula_do_professor = ?");
		
		
		$erro = null;
		$valido = false;

		
			if (strlen(utf8_decode($_POST["nome"]))<5 || strlen(utf8_decode($_POST["nome"]))>255) {
				$erro = "Preencha o campo nome corretamente (5 ou mais caracteres ou menos de 255)";
			}
			
				else{
					if(strlen(utf8_decode($_POST["rg"]))<9 || strlen(utf8_decode($_POST["rg"]))>9 || !is_numeric($_POST['rg'])){
						$erro= "Digite corretamente o RG";
							
					}
					else{
						if(strlen(utf8_decode($_POST["cpf"]))<11 || strlen(utf8_decode($_POST["cpf"]))>11 || !is_numeric($_POST['cpf'])){
							$erro= "Digite corretamente o CPF";
						}
						else{
							if(strlen(utf8_decode($_POST["endereco"]))<3){
								$erro="Digite o endereço do professor corretamente";
							}
							else{
								if(strlen(utf8_decode($_POST["login_sis"]))<1){
									$erro="Digite um login";
								}
								else{
									if(strlen(utf8_decode($_POST["senha_sis"]))<1){
										$erro="Digite uma senha";
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
		
					
						
	if(isset($valido) && $valido ==true){
		
		//Atrelando os dados às tabelas
		$stmt->bindParam(1, $_POST["nome"]);
		$stmt->bindParam(2, $_POST["rg"]);
		$stmt->bindParam(3, $_POST["cpf"]);
		$stmt->bindParam(4, $_POST["endereco"]);
		$stmt->bindParam(5, $_POST["sexo"]);
		$stmt->bindParam(6, $_POST["login_sis"]);
		
		$senhaHash = md5($_POST["senha_sis"]);
		$stmt->bindParam(7, $senhaHash);
		
		
		
		$stmt->execute();
		
		
			echo "<script language='javascript'>";
			echo "alert('Dados do professor alterados com sucesso.');";
			echo "</script>";
		}
		else{
			if (isset($erro)) {
				echo $erro."<br>";
			}
		}
		
		
	
	
?>