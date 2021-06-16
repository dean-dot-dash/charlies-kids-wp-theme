<?php 
/*
Template Name: Professional Resources Page
*/
	get_header(); 
?>
	<main>
		<?php get_template_part('template-parts/hero'); ?>
		<article class="centered-content">
			<div class="centered-content__content pro-resources">
			<?php
				if( have_posts() ){

					while( have_posts() ){

						the_post();
						the_content();

					}

				}
			?>
			</div>
		</article>
		<?php get_template_part( 'template-parts/newsletter', 'signup' ); ?>
	</main>
<?php get_footer(); ?>
