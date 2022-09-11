<html>
<head>
	<title>PHP_OO_HERANÇA_ELEMENTOS_ESTATICOS</title>
</head>
<body>

<?php
//estatico
	class EscalaMundial
	{
		public static $escalaDoMaior = "C-D-E-F-G-A-B-C";
		//metodo estatico
		public static function calculaDecibeis($watts){
			return $watts/10;
		}
	}
	
		echo EscalaMusical::$escalaDoMaior . "<br>";
		echo EscalaMusical::calculaDecibeis(127). "decibéis.";
?>
</body>
</html>