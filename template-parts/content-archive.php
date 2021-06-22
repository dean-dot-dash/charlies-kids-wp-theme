<div class="archive-card">
	<img src="<?php the_post_thumbnail_url(); ?>" alt="blog post thumbnail">
	<div class="archive-card__content">
		<h3>
			<?php the_title(); ?>	
		</h3>
		<span><?php the_date(); ?></span>
		<?php the_excerpt(16); ?>
		<a href="<?php the_permalink(); ?>" >
			<button class="button--icon ">
				View Now
				<?php get_template_part('template-parts/icon', 'arrow'); ?>
			</button>
		</a>
	</div>
	<!-- <?php
		the_title();
		the_date();
		the_excerpt();
		the_permalink();
	?> -->

</div>
