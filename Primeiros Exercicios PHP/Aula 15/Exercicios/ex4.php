<?php

 $arquivo="config.txt";
 $string="server = localhost <br> port =80 <br> on=true";


 $arq= fopen($arquivo, "w+");

fwrite($arq, $string);

fclose($arq);


$array = file("config.txt");


foreach ($array as $elemento) {
	echo utf8_encode($elemento);
}
 

?>