<?php

 $arquivo="log.txt";
 $string="isso é um teste";


 $arq= fopen($arquivo, "w+");

fwrite($arq, $string);

fclose($arq);

 

?>