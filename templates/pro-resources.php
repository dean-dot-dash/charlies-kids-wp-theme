<?php 
/*
Template Name: Professional Resources Page
*/
	get_header(); 
?>
	<main>
		<div class="hero">
			<div class="hero__content">
				<h2>Charlie’s Kids Provides Resources to Professionals
in the Safe Sleep Space</h2>
<h3>Order books, explore, and download resources and books here:</h3>
				<button class="button--large">Read Our Story</button>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/HeroImage.png" alt="Hero Image" />
		</div>
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
	</main>
<?php get_footer(); ?>
