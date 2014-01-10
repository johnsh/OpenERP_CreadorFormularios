<?php
class Vista extends General{
	public $campos_leidos = array();
	public $templates_view = array();



	function de_templates_a_view( $dato ){
		// Se extraen las variables
		list( $tipo_campo, $nombre_campo, $descripcion ) = $dato;

		$nombre_campo_descripcion = ( $nombre_campo == 'auto' ? $this->auto(  $descripcion ) : $nombre_campo );

		$this->campos_leidos[] = sprintf( $this->templates_view['field'], $nombre_campo_descripcion );	

	}


	function mostrar_campos_leidos(){
		return $this->campos_leidos;
	}

}

?>