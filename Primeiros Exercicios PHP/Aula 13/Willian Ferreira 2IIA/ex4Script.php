<html>
<head>
<title>Form</title>
</head>
<body>

<?php
	$data=mktime(12,30,0,15,04,2018);
	$data2=mktime(12,30,0,20,05,2018);
	

	$difdias=((($data2-$data)/60)/60)/24;

	echo $difdias;

	
?> 

</body>
</htmL>
