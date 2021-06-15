<?php 
/*
Template Name: The Problem Page
*/
	get_header(); 
?>
	<main>
		<div class="fixed-cta">
			<div class="fixed-cta__content">
				<p>Learn more about Safe Sleep Basics if you are are parent or caregiver.</p>
				<button class="button">Learn More</button>
			</div>
		</div>
		<article class="centered-content">
			<div class="centered-content__content the-problem">
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
		<div class="cta">
			<h2 class="header--alt-color">Safe Sleep is the Solution.</h2>
			<button class="button">Learn More</button>
		</div>
	</main>
<?php get_footer(); ?>
