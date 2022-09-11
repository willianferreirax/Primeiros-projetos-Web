
<?php
	$gabarito=array(2,4,5,6,8,7,1,0);
	$numerosA=array(1,2,3,4,5,6,7,8,9,10);
	$resp0=array(2,3,5,6,2,7,1,0);
	$resp1=array(4,3,5,6,2,7,1,0);
	$resp2=array(4,3,5,6,2,7,1,0);
	$resp3=array(4,3,5,6,2,7,1,0);
	$resp4=array(4,3,5,6,2,7,1,0);
	$resp6=array(4,3,5,6,2,7,1,0);
	$resp7=array(4,3,5,6,2,7,1,0);
	$resp8=array(4,3,5,6,2,7,1,0);
	$resp9=array(4,3,5,6,2,7,1,0);
	$cont=0;
	$aprov=0;

	for ($j=0; $j <10 ; $j++) { 
		$cont=0;

		for ($i=0; $i <8 ; $i++) { 

			if ($resp0[$i]==$gabarito[$i]) {
				$cont=$cont+1;
			}

		}
		echo "o aluno[$j] tem nota $cont<br>";
	

		if ($cont>=6) {
			$aprov++;
		}

	}

	$x=($aprov*100)/10;

	echo "A porcentagem de aprovados foi $x";

	



	
?>