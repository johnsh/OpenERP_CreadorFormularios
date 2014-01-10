<?php
class Vista extends General{
	public $campos_leidos = array();
	public $templates_view = array();



	function de_templates_a_view( $dato ){
		// Se identifica la cadena automatica
		$dato[1] = ( $dato[1] == 'auto' ? $this->auto(  $dato[2] ) : $dato[1] );
		
		array_shift( $dato );

		$this->campos_leidos[] = vsprintf(  $this->templates_view['field'], $dato );
		// Se extraen las variables
		/*list( $tipo_campo, $nombre_campo, $descripcion ) = $dato;

		$nombre_campo_descripcion = ( $nombre_campo == 'auto' ? $this->auto(  $descripcion ) : $nombre_campo );

		$this->campos_leidos[] = sprintf( $this->templates_view['field'], $nombre_campo_descripcion );	*/

	}


	function mostrar_campos_leidos(){
		return $this->campos_leidos;
	}

}

?>