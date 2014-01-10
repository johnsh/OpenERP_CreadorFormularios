<?php
class Interprete{

	function interpretar_linea( $dato = '' ){
		$dato = preg_split('/;/', $dato);

		return $dato;
	}
}

?>
