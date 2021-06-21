<?php 
	/*
	Template Name: Archive Page
	*/
	get_header(); 
?>
	<main>
		<article class="centered-content">
			<div class="centered-content__content">
				<h1>turds</h1>
			<?php
				if( have_posts() ){

					while( have_posts() ){

						// the_post();
						// the_excerpt();

					}

				}
			?>
			</div>
		</article>
	</main>
<?php get_footer(); ?>
