<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<title>Números digitados (Lucas Campanelli)</title>
	<link rel="icon" type="image/png" href="Logo.png" />
	<link rel="stylesheet" href="css/form.css">
	<style>
		span.texto{
			color:white;
		}
	</style>
	</head>
	<body>
		<?PHP
		session_start();
		$qnt = $_SESSION['quantidade'];
		$soma = 0;
		$Num = $_GET["tVal"];
		$maior = $Num[1];
		$menor = $Num[1];
		$Num[$qnt] = 30000;
		$smedia = 0;
		$smediap = 0;
		$numimp = 0;
		//Recebendo as variáveis do Formulário
		for($i = 0;$i <= $qnt; $i++){
			$soma += $Num[$i];
			$smedia += $Num[$i];
			if($Num[$i] > $maior){
				$maior = $Num[$i];
			}
			if($Num[$i] < $menor){
				$menor = $Num[$i];
			}
			if($Num[$i] % 2 == 0){
				$smediap += $Num[$i];
			}
			if($Num[$i] % 2 == 1){
				$numimp += $Num[$i];
			}
			echo "<span class='texto'><center>$Num[$i]<br></span></center>";
		}
		$media = $smedia/$qnt;
		$imp = ($numimp * 100)/$qnt;
		$mediap = $smediap/$qnt;
		echo "<span class='texto'><center>$soma é a soma dos números<br></span></center>";
		echo "<span class='texto'><center>$qnt números foram digitados<br></span></center>";
		echo "<span class='texto'><center>$media é a média do número<br></span></center>";
		echo "<span class='texto'><center>$mediap é a média dos números pares<br></span></center>";
		echo "<span class='texto'><center>$imp % é a porcentagem dos números ímpares<br></span></center>";
		?>
		<footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
			<center><a href="Form.php"> Voltar </a></center>
               Lucas Campanelli - 2° Informática - TURMA B, ETEC da Zona Leste. São Paulo, 2018.
			   </div>
          </div>
        </div>
    </header>
	</body>
</html>