<?php get_header(); ?>
	<main>
		<article class="centered-content">
			<div class="centered-content__content">
			<?php
				if( have_posts() ){

					while( have_posts() ){

						the_post();
						echo '<h1>' . get_the_title() . '</h1>';
						echo '<div class="single__subtitle" >';
						echo '<h3>' . get_the_author() . '</h3>';
						echo '<span> on ' . get_the_date() . '</span>';
						echo '</div';
						the_content();

					}

				}
			?>
			</div>
		</article>
	</main>
<?php get_footer(); ?>
