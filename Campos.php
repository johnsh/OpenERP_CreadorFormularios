<?php
class Campos extends General{
	public $campos_leidos = array();
	public $templates_campos = array();



	function de_templates_a_field( $dato ){
		// Se extraen las variables
		list( $tipo_campo, $nombre_campo, $descripcion ) = $dato;

		// Se identifica el template.
		$tmpl = $this->templates_campos[ $tipo_campo ];

		$nombre_campo_descripcion = ( $nombre_campo == 'auto' ? $this->auto(  $descripcion ) : $nombre_campo );

		if( $tipo_campo == 'b' ){
			$this->campos_leidos[] = sprintf( $tmpl, $nombre_campo_descripcion,  $descripcion );	
		} else if( $tipo_campo == 'i' ){
			$this->campos_leidos[] = sprintf( $tmpl, $nombre_campo_descripcion,  $descripcion );	
		}
		

	}


	function mostrar_campos_leidos(){
		return  $this->campos_leidos;
	}


}


?>