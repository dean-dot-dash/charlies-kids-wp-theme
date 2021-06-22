<?php 
/*
Template Name: Board and Team Page
*/
	get_header(); 
?>
	<main>
		<article class="centered-content">
			<?php get_template_part('template-parts/breadcrumbs'); ?>

			<div class="centered-content__content board-team">
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
	</main>
<?php get_footer(); ?>
