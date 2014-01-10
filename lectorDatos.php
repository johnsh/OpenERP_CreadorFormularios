<?php
$file = fopen("Datos.txt", "r") or exit("Unable to open file!");

while(!feof($file)){

	$linea = fgets($file);
	$interpretacion = $Interprete->interpretar_linea( $linea );
	$Campos->de_templates_a_field( $interpretacion );
	
}
fclose($file);
?>