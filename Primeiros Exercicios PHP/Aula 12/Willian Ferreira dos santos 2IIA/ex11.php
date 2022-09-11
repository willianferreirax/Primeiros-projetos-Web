
<?php
	$temperatura=array(34,22,20,18,23,25,27,18,15,21,17,32);
	
	$maior=$temperatura[0];
	$mesMaior=0;


	for ($i=0; $i <12 ; $i++) { 

		if ($temperatura[$i]>$maior) {
			$maior=$temperatura[$i];
			$mesMaior=$i;

		}

	}


	$menor=$temperatura[0];
	$mesMenor=0;


	for ($i=0; $i <12 ; $i++) { 

		if ($temperatura[$i]<$menor) {
			$menor=$temperatura[$i];
			$mesMenor=$i;

		}

	}


	if ($mesMaior==0) {
		echo "O mês com maior temperatura média é Janeiro<br>";
	}
	if ($mesMaior==1) {
		echo "O mês com maior temperatura média é Fevereiro<br>";
	}
	if ($mesMaior==2) {
		echo "O mês com maior temperatura média é Março<br>";
	}
	if ($mesMaior==3) {
		echo "O mês com maior temperatura média é Abril<br>";
	}
	if ($mesMaior==4) {
		echo "O mês com maior temperatura média é Maio<br>";
	}
	if ($mesMaior==5) {
		echo "O mês com maior temperatura média é Junho<br>";
	}
	if ($mesMaior==6) {
		echo "O mês com maior temperatura média é Julho<br>";
	}
	if ($mesMaior==7) {
		echo "O mês com maior temperatura média é Agosto<br>";
	}
	if ($mesMaior==8) {
		echo "O mês com maior temperatura média é Setembro<br>";
	}
	if ($mesMaior==9) {
		echo "O mês com maior temperatura média é Outubro<br>";
	}
	if ($mesMaior==10) {
		echo "O mês com maior temperatura média é Novembro<br>";
	}
	if ($mesMaior==11) {
		echo "O mês com maior temperatura média é Dezembro<br>";
	}



	if ($mesMenor==0) {
		echo "O mês com menor temperatura média é Janeiro<br>";
	}
	if ($mesMenor==1) {
		echo "O mês com menor temperatura média é Fevereiro<br>";
	}
	if ($mesMenor==2) {
		echo "O mês com menor temperatura média é Março<br>";
	}
	if ($mesMenor==3) {
		echo "O mês com menor temperatura média é Abril<br>";
	}
	if ($mesMenor==4) {
		echo "O mês com menor temperatura média é Maio<br>";
	}
	if ($mesMenor==5) {
		echo "O mês com menor temperatura média é Junho<br>";
	}
	if ($mesMenor==6) {
		echo "O mês com menor temperatura média é Julho<br>";
	}
	if ($mesMenor==7) {
		echo "O mês com menor temperatura média é Agosto<br>";
	}
	if ($mesMenor==8) {
		echo "O mês com menor temperatura média é Setembro<br>";
	}
	if ($mesMenor==9) {
		echo "O mês com menor temperatura média é Outubro<br>";
	}
	if ($mesMenor==10) {
		echo "O mês com menor temperatura média é Novembro<br>";
	}
	if ($mesMenor==11) {
		echo "O mês com menor temperatura média é Dezembro<br>";
	}

	

	
?>