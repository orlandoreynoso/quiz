<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


function quizbook_frontend_styles(){

	// Registrar los estilos
	wp_enqueue_style('quizbook_css', plugins_url( '../assets/css/quizbook.css',__FILE__), array(), '1.25');
	wp_enqueue_script('quizbookjs', plugins_url( '../assets/js/quizbook.js',__FILE__), array('jquery'), 1.25, true);

	wp_localize_script('quizbookjs','admin_url', array(
			'ajax_url'  =>  admin_url('admin-ajax.php')

	));


/*	wp_register_style('style', get_template_directory_uri().'/style.css', array('bootstrap'), '1.0');

	wp_register_script('lightbox', get_template_directory_uri().'/js/lightbox.js', array('jquery'),'2.9.0', true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('popper');	*/


}

add_action('wp_enqueue_scripts','quizbook_frontend_styles');


function quizbook_admin_style($hook){

	global $post;

	if ($hook == 'post-new.php' || $hook =='post.php') {
		if ($post->post_type == 'quiz') {
			wp_enqueue_style( 'quizbookcss', plugins_url( '../assets/css/admin-quizbook.css',__FILE__), array(), '1.25');			
		}

	}

	//wp_register_script('lightbox', get_template_directory_uri().'/js/lightbox.js', array('jquery'),'2.9.0', true);
	//wp_enqueue_script('jquery');

}

add_action( 'admin_enqueue_scripts', 'quizbook_admin_style' );

?>