<div <?php echo 'class="newsletter-sign-up--' . get_field('newsletter_signup_styling_variant') . '"' ?>>
	<h2>
		<?php the_field('newsletter_signup_header') ?>
	</h2>
	<?php if( get_field('newsletter_signup_paragraph') ): ?>
		<p>
			<?php the_field('newsletter_signup_paragraph'); ?>
		</p>
	<?php endif; ?>
	<?php if( get_field('newsletter_signup_secondary_header') ): ?>
		<h3>
			<?php the_field('newsletter_signup_secondary_header'); ?>
		</h3>
	<?php endif; ?>
	<div class="newsletter-sign-up__input">
		<input type="email" placeholder="Enter Your Email Address..."><button class="button">Sign Up</button>
	</div>
</div>
