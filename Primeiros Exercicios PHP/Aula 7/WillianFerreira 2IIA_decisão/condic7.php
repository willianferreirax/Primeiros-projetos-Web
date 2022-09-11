<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/form.css " rel="stylesheet">
	<title>
	Exercicio - 7
	</title>
	</head>
	<body>
		<?php
			$a=$_GET["tA"];
			$b=$_GET["tB"];
			$c=$_GET["tC"];
			$i=$_GET["tInt2"];

			switch ($i) {
				case '1':

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
				break;

				case '2':
					if($a > $b && $a>$c){
					if ($b>$c) {
						echo "$a,$b,$c";
					}
					else{
						echo "$a,$c,$b";
					}
				}
				else{
					if ($b>$a && $b>$c) {
						if ($a>$c) {
							echo "$b,$a,c";
						}
						else{
							echo "$b,$c,$a";
						}
					}
					else{
						if ($a>$b) {
							echo "$c,$a,$b";
						}
						else{
							echo "$c,$b,$a";
						}
					}
				}
				break;
				case '3':
					if ($a>$b) {
						echo "$b $a $c";
					}
					else{
						if ($b>$a) {
							echo "$a $b $c";
						}
						else{
							if ($c>$a) {
								echo "$a $c $b";
							}
						}
					}
				break;
			}

				
				
		?>
		<a href="decision.html">Voltar</a>
	</body>
</html>