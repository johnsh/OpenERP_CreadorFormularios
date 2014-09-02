<?php
class Campos extends General{
	public $campos_leidos = array();
	public $templates_campos = array();





	function de_templates_a_field( $dato ){

		// Se identifica la cadena automatica
		$dato[1] = ( $dato[1] == 'auto' ? $this->auto(  $dato[2] ) : $dato[1] );
		

		if( strpos( $dato[1], 'auto' ) !== false ) {
			$dato[ 1 ] = str_replace('auto', $this->auto(  $dato[2] ), $dato[ 1 ]);
		}

		// Si dice observacion se cambia por obs
		$dato[ 1 ] = str_replace('observacion', 'obs', $dato[ 1 ]);

		if( strlen($dato[ 1 ]) >= 35 ){
			echo '<strong>' . $dato[ 1 ] . '</strong>' . ' '. $dato[ 2 ] .' '  . ' Campo con longitud muy amplia' . '<br />';
		}

		/*if( in_array( $dato[ 1 ], $this->campos_leidos ) ){
			echo '<strong>' . $dato[ 1 ] . '</strong>' . ' Campo repetido';
		}*/

		// Se identifica el template.
		$tmpl = $this->templates_campos[ $dato[ 0 ] ];

		if( $dato[0] == 's' ) {
			$descripcion = $dato[ 2 ];
			$opciones = $dato[ 3 ];

			$dato[ 2 ] = $opciones;
			$dato[ 3 ] = $descripcion;
			
		}
		if( $dato[0] == 'o2m' ) {
			$descripcion = $dato[ 2 ];
			$tabla = $dato[ 3 ];
			$relacion = $dato[ 4 ];

			$dato[ 2 ] = $tabla;
			$dato[ 3 ] = $relacion;
			$dato[ 4 ] = $descripcion;
			
		}
		if( $dato[ 0 ] == 'm2o' ){
			$descripcion = $dato[ 2 ];
			$tabla = $dato[ 3 ];

			$dato[ 2 ] = $tabla;
			$dato[ 3 ] = $descripcion;
		}


		// Extraemos el primer elemento del array, referente al tipo de dato
		array_shift( $dato );

		$this->campos_leidos[] = vsprintf( $tmpl, $dato );	
	

	}


	function mostrar_campos_leidos(){
		return  $this->campos_leidos;
	}


}


?>