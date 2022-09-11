
<?php
	$numeros=array(1,2,3,4,5,6,7,8,9,10,11,12);
	$origem=array(10,9,8,7,6,5,4,3,2,1,0,13);
	$destino=array(23,55,76,34,78,32,21,45,12,1,2,13);
	$quantDisp=array(4,3,5,6,2,7,1,0,2,10,12,11);
	
	

	$ops=isset($_GET["voo"])?$_GET["voo"]:0;

	$existe=array_search($ops, $numeros);
		
		if ($quantDisp[$existe]>0) {
			echo "reserva confirmada";
		}
		else{
			echo "voô lotado";
		}

		if ($existe===false) {
			echo "voo inexistente";
		}






	
?>