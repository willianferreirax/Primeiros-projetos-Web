<html>
<head>
<title>Form</title>
</head>
<body>

<?php
	$data=date("y-m-d h:i:s");
	$ano=date('y');
	$mes=date('m');
	$dia=date('d');
	
	$hr=date('h');
	$min=date('i');
	$seg=date('s');

	
	echo "Data no formato americano: ".$data."<br>";

	echo "Data formato brasileiro: ".$dia."/".$mes."/".$ano." ".$hr.":".$min.":".$seg."<br>";

	
?> 

</body>
</htmL>
