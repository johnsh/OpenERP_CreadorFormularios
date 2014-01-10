<?php
class Archivo{

	function escribir_en_archivo( $datos, $archivo ){
		$fp = fopen( $archivo, "w+");
		foreach( $datos as &$valor ) {
			fwrite($fp, $valor  . PHP_EOL);
		}

		fclose($fp);
	}

}


?>