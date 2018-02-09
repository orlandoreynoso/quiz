<?php
/*
Plugin Name: quizes course
Plugin URI:
Description: information about course
Version:     1.0
Author:      Orlando Reynoso
Author URI:  http://www.orlandoreynoso.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/*============= cargando archivos==============*/
/*
function my_rewrite_flush() {
    crear_post_type_reflexiones();    
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' ); */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

if(file_exists(dirname(__FILE__).'/quiz/cpt-quiz.php')){
	require_once dirname( __FILE__ ) . '/quiz/cpt-quiz.php';
}



?>
