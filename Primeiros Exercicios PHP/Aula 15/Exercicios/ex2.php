<?php

 $diretorio="C:/";

 $dir=opendir($diretorio);

 

 for ($i=0; $i <12 ; $i++) { 
 	echo readdir($dir)."<br>";
 }




 closedir($dir);

?>