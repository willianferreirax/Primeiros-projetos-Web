
<?php

	$num = isset($_GET["tNum"])?$_GET["tNum"]:0;
	echo "<h5>Tabuada do $num <br><br></h5>";
	for($i = 1;$i <= 10;$i++){
		echo $num." x ".$i." = ".$num*$i."<br>";
		
	
	}
	
?>