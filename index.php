<?php
require_once('templates.php');
require_once('General.php');
require_once('Campos.php');
require_once('Vista.php');
require_once('Interprete.php');
require_once('Archivo.php');

// Instancias.
$Campos = new Campos();
$Campos->templates_campos = $tmpl_campos;

$Vista = new Vista();
$Vista->templates_view = $tmpl_view;

$Interprete = new Interprete();

require_once('lectorDatos.php');


//$Campos->mostrar_campos_leidos();

//$Vista->mostrar_campos_leidos();

$Archivo = new Archivo();

$Archivo->escribir_en_archivo( $Campos->mostrar_campos_leidos(), 'py.txt' );

$Archivo->escribir_en_archivo( $Vista->mostrar_campos_leidos(), 'view.txt' );
?>

