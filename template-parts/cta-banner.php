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
	<a href="<?php the_field('cta_banner_button_link') ?>" class="button">
		<?php the_field('cta_banner_button_label'); ?>
	</a>
</div>
