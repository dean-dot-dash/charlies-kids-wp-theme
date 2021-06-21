<div <?php echo 'class="cta-banner--' . get_field('cta_banner_styling_variant') . '"' ?>>
	<?php if( get_field('cta_banner_primary_header') ): ?>
		<h2>
			<?php the_field('cta_banner_primary_header'); ?>
		</h2>
	<?php endif; ?>
	<?php if( get_field('cta_banner_secondary_header') ): ?>
		<h3>
			<?php the_field('cta_banner_secondary_header'); ?>
		</h3>
	<?php endif; ?>
	<?php if( get_field('cta_banner_paragraph') ): ?>
		<p>
			<?php the_field('cta_banner_paragraph'); ?>
		</p>
	<?php endif; ?>
	<button class="button">
		<?php the_field('cta_banner_button_label'); ?>
	</button>
</div>
