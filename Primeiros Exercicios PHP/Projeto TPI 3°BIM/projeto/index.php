<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Menu Principal</title>
	</head>
	<body>
	<?php
		include 'conexao.php';
		$conn = conexao();
		$select = "SELECT login,senha from professor";
		
		$res = $conn->query($select);
		
		foreach($res as $row){
			$usuario1 = ($row['login']);
			$senha1 = ($row['senha']);
		}
		
		
		$login = $_POST['login'];
		$senha = md5($_POST['senha']);
		if ($login==$usuario1 && $senha==$senha1){
			echo "<script language='javascript'>";
					echo "alert('Bem-vindo, ".$login."!');";
				echo "</script>";
				sleep(3);
			echo "<script>window.location = 'menuprincipal.php';</script>"; 
		}
		else{
			echo"Acesso Negado";
		}
		
	?>
	</body>
</html>