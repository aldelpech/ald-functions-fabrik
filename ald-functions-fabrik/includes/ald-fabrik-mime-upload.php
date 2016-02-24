<?php
/**
 *
 * Pour autoriser l'upload de fichiers avec certaines extensions
 *
 *
 * @link       	http://parcours-performance.com/anne-laure-delpech/#ald
 * @since      	1.0.0
 *
 * @package    ald-functions-fabrik
 * @subpackage ald-functions-fabrik/includes
 */
 
 
	

function ald_fabrik_add_upload_mime_types( $mimes ) {
	
	$mimes['ino'] = 'application/octet-stream'; 	// arduino files
	$mimes['stl'] = 'application/sla'; 				// 3D drawings
	$mimes['dxf'] = 'application/dxf'; 				// 2D or 3D drawings

    return $mimes;
}

add_filter( 'upload_mimes', 'ald_fabrik_add_upload_mime_types', 1, 1 );