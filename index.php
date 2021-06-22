<?php get_header(); ?>
	<main>
		<article class="centered-content">
			<div class="centered-content__content">
				<h1>Blog Posts</h1>
			<?php
				if( have_posts() ){

					while( have_posts() ){

						the_post();
						get_template_part('template-parts/content', 'archive');

					}

				}
			?>
			</div>
		</article>
	</main>
<?php get_footer(); ?>
