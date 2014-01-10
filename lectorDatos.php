<?php
$file = fopen("Datos.txt", "r") or exit("Unable to open file!");

while(!feof($file)){

	$linea = fgets($file);
	$linea = substr( $linea, 0, strlen( $linea ) - 2 );

	var_dump( $linea );

	$interpretacion = $Interprete->interpretar_linea( $linea );
	$Campos->de_templates_a_field( $interpretacion );
	$Vista->de_templates_a_view( $interpretacion );
	
}
fclose($file);
?>