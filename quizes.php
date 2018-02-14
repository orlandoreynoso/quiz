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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/*
* Añade el post type de Quizes
* revisar versiones anteriores en tryit.php
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/posttypes.php';

/*
* Regenera las reglas de las URL al activar
*/
register_activation_hook( __FILE__, 'quizbook_rewrite_flush');

/*
* Añade el post type de Quizes
* revisar versiones anteriores en tryit.php
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/metaboxes.php';


/*
* Añade el roles y capabilities a nuestro quiz
*/

require_once plugin_dir_path( __FILE__ ) . 'includes/roles.php';
register_activation_hook( __FILE__, 'quizbook_crear_role');
register_deactivation_hook( __FILE__, 'quizbook_remover_role');

/*
* add funcion about shortcode
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/shortcode.php';

/*
* add file about functiones
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/funciones.php';

/*
* add file about scrips js and styles css
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/scripts.php';

/*
* result about test
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/resultados.php';


?>
