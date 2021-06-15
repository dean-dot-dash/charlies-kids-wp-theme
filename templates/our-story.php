<?php 
/*
Template Name: Our Story Page
*/
	get_header(); 
?>
	<main>
		<article class="centered-content">
			<div class="centered-content__content our-story">
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
