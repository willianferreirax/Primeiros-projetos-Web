
<?php
	$precos=array();
	$quant=array();
	$valGeral=0;
	$valTotal=0;

	for ($i=0; $i <10 ; $i++) { 
		$prec_uni=isset($_GET["obj$i"])?$_GET["obj$i"]:0;
		$quant_vendas=isset($_GET["quan$i"])?$_GET["quan$i"]:0;
		array_push($precos,$prec_uni);
		array_push($quant,$quant_vendas);
	}


	for ($i=0; $i <10 ; $i++) { 
		$n = $i+1;

		$valTotal=$precos[$i]*$quant[$i];

		echo "Objeto $n:<br>
		custo: $precos[$i];<br>
		Quantidade de vendas: $quant[$i];<br>
		Valor total das vendas $valTotal <br><br>";
		$valGeral=$valGeral+$valTotal;

	}


	echo "O valor Geral das ventas foi $valGeral<br>";

	$comiss=(5/100)*$valGeral;

	echo "O valor da comissão paga ao vendedor é $comiss<br>";



	$maior=$quant[0];
	$posi=0;
	$precoMaior=$precos[0];
	for ($i=0; $i <10 ; $i++) { 

		if ($quant[$i]>$maior) {
			$maior=$quant;
			$precoMaior=$precos[$i];
			$posi=$i;
		}
		
	}

	echo "O valor do objeto mais vendido é $precoMaior e sua posição no vetor é $posi";

?>