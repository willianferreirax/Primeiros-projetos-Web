<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exemplo 2 - Condição if else aninhado
	</title>
	</head>
	<body>
		<?php
			$ano=isset($_GET["tAno2"])?$_GET["tAno2"]:1900;
			$idade= date("Y") - $ano;
				echo"Você nasceu em $ano e tem $idade anos. <br>";
				if($idade < 16){
					$tipoVoto="não vota";
				}
				else{
					if(($idade >=16 && $idade<18) || ($idade >65)){
						$tipoVoto = "voto opcional";
					}
					else{
						$tipoVoto = "voto obrigatório";
					}
				}
				echo "Com essa idade, $tipoVoto .";
		?>
		<a href="formularioexemplo.html">Voltar</a>
	</body>
</html>