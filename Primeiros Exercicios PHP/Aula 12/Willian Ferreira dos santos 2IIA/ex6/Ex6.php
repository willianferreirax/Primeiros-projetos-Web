
<?php
	$numeros=array();
	

	for ($i=0; $i <10 ; $i++) { 
		$num=isset($_GET["num$i"])?$_GET["num$i"]:0;
		array_push($numeros,$num);
	}

	rsort($numeros);

	print_r($numeros);

?>