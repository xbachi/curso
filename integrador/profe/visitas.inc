<?php
$nom="visitas";
if(file_exists($nom)){
	$f=fopen($nom,"r");
	$cant=fgets($f);
	fclose($f);
}else{
	$cant=0;
}
$cant++;
$f=fopen($nom,"w");
fwrite($f,$cant);
fclose($f);
echo "Visitas: $cant.";
?>