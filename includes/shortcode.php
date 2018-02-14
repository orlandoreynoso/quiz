<?php 


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
* Creando el shortcode: [quizbook]
* Creando el shortcode 2da version: [quizbook preguntas ="" orden =""]  
*/


function quizbook_shortcode($atts){
/*
	echo "<pre>";
	var_dump($atts);
	echo "</pre>";
*/

	$args = array(
		'post_type' => 'quiz',
		'posts_per_page' => $atts['preguntas'],
		'orderby' => $atts['orden']
	);

	$quizbook = new WP_Query($args);

	?>
	<form action="" name="quizbook_enviar" id="quizbook_enviar">
		<div id="quizbook" class="quizbook">
			<ul>
				<?php while ($quizbook->have_posts()):$quizbook->the_post(); ?>
					<li>
						<?php the_title('<h2>','</h2>'); ?>
						<?php the_content(); ?>
						<?php 

						$opciones = get_post_meta( get_the_ID());
/*

						$ejemplo = strpos("I love php, I love php too!","php");
						echo $ejemplo;

						if ($ejemplo === 7) {
							echo "esta en siete (7)";
						}
						else{
							echo "no está en siete";
						}

							echo "<pre>";
							var_dump($ejemplo);
							echo "</pre>";


*/
						foreach ($opciones as $key => $opcion) {
							$resultado = quizbook_filtrar_preguntas($key);

							if ($resultado === 0) {

								//echo  $key;

								$numero = explode('_', $key);

								//echo $numero['2'];

									?>
										<div id="<?php echo get_the_ID() .":". $numero['2']; ?>" class="respuesta">
											<?php echo $opcion['0']; ?>
										</div>


									<?php
							}

							?>
							<?php /*
						<pre>
							<?php var_dump($resultado); ?>
						</pre>
						*/ ?>
						<?php 
						}

						/*
							echo "<pre>";
							var_dump($opciones);
							echo "</pre>";
						*/
						?>
							
					</li>
				<?php endwhile; wp_reset_postdata();  ?>
			</ul>
		</div>
		<input type="submit" value="Enviar" id="quizbook_btn_submit">
		
	</form>

	<?php
}

add_shortcode( 'quizbook', 'quizbook_shortcode' );

?>