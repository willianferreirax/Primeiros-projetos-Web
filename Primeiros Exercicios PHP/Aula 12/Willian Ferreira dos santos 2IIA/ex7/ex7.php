
<?php
	$numeros=array();
	

	for ($i=0; $i <8 ; $i++) { 
		$num=isset($_GET["num$i"])?$_GET["num$i"]:0;
		array_push($numeros,$num);
		sort($numeros);
	}

	print_r($numeros);

?>