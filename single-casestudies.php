<?php get_header();
/* 
Template Name: Case Study Single
Template Post Type: ck_casestudy, casestudies
*/
 ?>
	<main>
		<article class="centered-content">
			<div class="centered-content__content">
			<?php
				if( have_posts() ){

					while( have_posts() ){

						the_post();
						
						the_content();

					}

				}
			?>
			</div>
			<h1>Case Study Template</h1>
		</article>
	</main>
<?php get_footer(); ?>
