<div class="hero">
	<div class="hero__content">
		<h2>
		<?php 
			the_field('hero_primary_header');
		?>
		</h2>
		<?php if( get_field('hero_secondary_header') ): ?>
			<h3>
				<?php the_field('hero_secondary_header'); ?>
			</h3>
		<?php endif; ?>
		<?php if( get_field('hero_button_label') ): ?>
			<button class="button--large">
				<?php the_field('hero_button_label') ?>
			</button> 
		<?php endif; ?>
	</div>
	<?php if( get_field('hero_background_image') ): ?>
		<img src="<?php the_field('hero_background_image') ?>" alt="Hero Image" />
	<?php endif; ?>
</div>
