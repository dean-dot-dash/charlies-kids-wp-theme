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
		<section class="recent-studies__wrapper">
			<div class="recent-studies">
				<?php 
					$args = array(
						'post_type' => 'ck_casestudy',
						'post_status' => 'publish',
						'posts_per_page' => 3,
						'orderby' => 'title',
						'order' => 'ASC',
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post();
						get_template_part( 'template-parts/content', 'recentstudies' );
					endwhile;

					wp_reset_postdata();
				?>
			</div>
		</section>
		<?php get_template_part( 'template-parts/newsletter', 'signup' ); ?>
	</main>
<?php get_footer(); ?>
