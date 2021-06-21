<div class="recent-studies__study">
	<?php
		$featured_img = wp_get_attachment_image_src( $post->ID );
		the_post_thumbnail();
		echo '<div class="recent-studies__content">';
		echo '<h3>' . get_the_title() . '</h3>';
		echo '<p>' . get_the_excerpt() . '</p>';
	?>
		<a href="<?php the_permalink(); ?>" >
			<button class="button--icon ">
				View Now
				<?php get_template_part('template-parts/icon', 'arrow'); ?>
			</button>
		</a>
	<?php
		echo '</div>';
	?>
</div>
