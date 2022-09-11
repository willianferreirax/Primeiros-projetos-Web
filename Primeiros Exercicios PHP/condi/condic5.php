<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 5
	</title>
	</head>
	<body>
		<?php
			$a=$_GET["tNu4"];
			$b=$_GET["tNu5"];
			$c=$_GET["tNu6"];
			$d=$_GET["tNuerrado"];
			

				if($d >$a && $d>$b){
					if ($d<$c) {
						echo "$a,$b,$c,$d";
					}
					else{
						echo "$a,$b,$d,$c";
					}
				}
				else{
					if ($d<$b && $d<$c) {
						if ($d<$a) {
							echo "$d,$a,$b,$c";
						}
						else{
							echo "$a,$d,$b,$c";
						}
					}
				}
				
				
		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>