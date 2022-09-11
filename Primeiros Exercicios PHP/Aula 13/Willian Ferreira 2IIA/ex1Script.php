<html>
<head>
<title>Form</title>
</head>
<body>

<?php
	$data=date(d-m-y h:i:s);
	$dia=date('d');
	$mes=date('m');
	$ano=date('y');
	$hr=date('h');
	$min=date('i');
	$seg=date('s');

	echo "Data formato brasileiro: ".$data."<br>";


	echo "Data formato americano: ".$ano."/".$mes."/".$dia." ".$hr.":".$min.":".$seg."<br>";

	
?> 

</body>
</htmL>
