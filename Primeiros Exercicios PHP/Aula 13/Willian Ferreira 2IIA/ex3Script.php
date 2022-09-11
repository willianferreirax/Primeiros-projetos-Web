<html>
<head>
<title>Form</title>
</head>
<body>

<?php
	$data=date('y-m-d h:i:s');

	$array = array();

	$array[0]=date('y');
	$array[1]=date('m');
	$array[2]=date('d');
	
	$array[3]=date('h');
	$array[4]=date('i');
	$array[5]=date('s');

	
	echo "Data no formato americano: ".$data."<br>";

	echo "Data formato brasileiro: ";

	print_r($array);

	
?> 

</body>
</htmL>
