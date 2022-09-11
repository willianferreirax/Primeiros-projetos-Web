<!DOCTYPE html>
<html>
<head>
	<title>Str_replace - substituir substring</title>
</head>
<body>
	<?php
	//str_replace - substituir substring

	$str = "Aprendendo PHP em PI. PHP é bem legal!!!";

	$str = str_replace("PHP", "Java", $str);
	echo $str;

	?>
</body>
</html>