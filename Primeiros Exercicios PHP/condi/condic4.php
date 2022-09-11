<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 4
	</title>
	</head>
	<body>
		<?php
			$a=$_GET["tNu1"];
			$b=$_GET["tNu2"];
			$c=$_GET["tNu3"];
			

				if($a < $b && $a<$c){
					if ($b<$c) {
						echo "$a,$b,$c";
					}
					else{
						echo "$a,$c,$b";
					}
				}
				else{
					if ($b<$a && $b<$c) {
						if ($a<$c) {
							echo "$b,$a,c";
						}
						else{
							echo "$b,$c,$a";
						}
					}
					else{
						if ($a<$b) {
							echo "$c,$a,$b";
						}
						else{
							echo "$c,$b,$a";
						}
					}
				}
				
				
		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>