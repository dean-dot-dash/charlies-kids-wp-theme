<?php 
/*
Template Name: Do's and Don'ts Page
*/
	get_header(); 
?>
	<main>
		<article class="centered-content">
			<div class="centered-content__content dos-donts">
			<!-- <?php
				if( have_posts() ){

					while( have_posts() ){

						the_post();
						the_content();

					}

				}
			?> -->
			<section class="dos-donts__container">
				<h1>The Do & Don’t List for Safe Sleep</h1>
				<div class="dos-donts__lists">
					<div class="dos-donts__do-list">
						<div class="dos-donts__list-header">
							<h4>Do</h4>
							<?php get_template_part('template-parts/icon', 'check'); ?>
						</div>
						<ul class="dos-donts__list">
							<?php get_template_part('template-parts/icon', 'check'); ?>
							<li>Do put your baby to sleep on his/her back for every sleep.</li>
							<?php get_template_part('template-parts/icon', 'check'); ?>
							<li>Do put your baby’s crib in the same room as your bed (room-sharing)</li>
							<?php get_template_part('template-parts/icon', 'check'); ?>
							<li>Do put your baby in a crib to sleep for naptime and bedtime</li>
							<?php get_template_part('template-parts/icon', 'check'); ?>
							<li>Do find your own way to stay awake while feeding your baby</li>
							<?php get_template_part('template-parts/icon', 'check'); ?>
							<li>Do use a firm crib mattress covered by a fitted sheet</li>
							<?php get_template_part('template-parts/icon', 'check'); ?>
							<li>Do breastfeed your baby.</li>
							<?php get_template_part('template-parts/icon', 'check'); ?>
							<li>Do offer a pacifier for sleep once breastfeeding is established</li>
							<?php get_template_part('template-parts/icon', 'check'); ?>
							<li>Do use a wearable blanket to keep your baby warm.</li>
							<?php get_template_part('template-parts/icon', 'check'); ?>
							<li>Do vaccinate your baby.</li>
						</ul>
					</div>
					<div class="dos-donts__dont-list">
						<div class="dos-donts__list-header">
							<h4>Don't</h4>
							<?php get_template_part('template-parts/icon', 'x'); ?>
						</div>
						<ul class="dos-donts__list">
							<?php get_template_part('template-parts/icon', 'x'); ?>
							<li>Don’t put your baby to sleep on his/her side or stomach</li>
							<?php get_template_part('template-parts/icon', 'x'); ?>
							<li>Don’t sleep with your baby on a shared surface.</li>
							<?php get_template_part('template-parts/icon', 'x'); ?>
							<li>Don’t put your baby to sleep on a couch, armchair, or adult bed.</li>
							<?php get_template_part('template-parts/icon', 'x'); ?>
							<li>Don’t fall asleep holding or feeding your baby.</li>
							<?php get_template_part('template-parts/icon', 'x'); ?>
							<li>Don’t use a car seat, swing, stroller or infant carrier for routine sleep.</li>
							<?php get_template_part('template-parts/icon', 'x'); ?>
							<li>Don’t have blankets, pillows, toys or bumper pads in the crib.</li>
							<?php get_template_part('template-parts/icon', 'x'); ?>
							<li>Don’t smoke, drink, or use drugs.</li>
							<?php get_template_part('template-parts/icon', 'x'); ?>
							<li>Don’t swaddle your baby if he/she shows signs of rolling over.</li>
							<?php get_template_part('template-parts/icon', 'x'); ?>
							<li>Don’t let your baby overheat.</li>
						</ul>
					</div>
				</div>
				<h2>Safe Sleep is Hard. Your Baby is Worth it.</h2>
			</section>	
			</div>
		</article>
	</main>
<?php get_footer(); ?>
