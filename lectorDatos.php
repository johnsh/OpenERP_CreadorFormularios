<?php
$file = fopen("codigo_generado/Datos_". $trabajar_en .".txt", "r") or exit("Unable to open file!");

while(!feof($file)){

	$linea = fgets($file);
	$linea = substr( $linea, 0, strlen( $linea ) - 2 );

	if( $linea == '' ){
		continue;
	}

	$interpretacion = $Interprete->interpretar_linea( $linea );
	$Campos->de_templates_a_field( $interpretacion );
	$Vista->de_templates_a_view( $interpretacion );
	
}
fclose($file);
?>