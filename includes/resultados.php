<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/*
* Recibe parámetros por medio de quizbook.js y devuelve los resultados por medio de ajax.
*/


function quizbook_resultados(){

	$respuesta = array(
		'respuesta' => $_POST
	);

	header('Content-type: application/json');
	echo json_encode($respuesta);
	die();

}

add_action('wp_ajax_nopriv_quizbook_resultados','quizbook_resultados');
add_action('wp_ajax_quizbook_resultados','quizbook_resultados');

?>