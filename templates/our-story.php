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
			<a href="<?php echo get_page_link( get_page_by_title( "Board and Team" )->ID ); ?>">
				<h3>View our Board and Team Members</h3>
				<?php get_template_part('template-parts/icon', 'arrow'); ?>
			</a>
			</div>
		</article>
	</main>
<?php get_footer(); ?>
