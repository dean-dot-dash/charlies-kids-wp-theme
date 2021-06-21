<?php 
/*
Template Name: The Solution Page
*/
	get_header(); 
?>
	<main>
		<article class="centered-content">
			<div class="centered-content__content the-solution">
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
		<?php get_template_part( 'template-parts/cta', 'banner' ); ?>
		<section class="the-solution__how-tos">
				<h1>The How to’s of Safe Sleep</h1>
				<h3>Safe sleep is hard. Here’s some ways to make it a little bit easier.</h3>
				<div class="the-solution__how-to-grid">
					<div class="the-solution__how-to">
						<div class="the-solution__how-to-image"></div>
						<h3>Do’s & Don’ts</h3>
						<p>We love mythbusting.</p>
					</div>
					<div class="the-solution__how-to">
						<div class="the-solution__how-to-image"></div>
						<h3>Stay Awake</h3>
						<p>...so you can put your baby to sleep safely.</p>
					</div>
					<div class="the-solution__how-to">
						<div class="the-solution__how-to-image"></div>
						<h3>Breastfeeding</h3>
						<p>Spoiler alert—set an alarm</p>
					</div>
					<div class="the-solution__how-to">
						<div class="the-solution__how-to-image"></div>
						<h3>Support</h3>
						<p>No one can do it alone!</p>
					</div>
					<div class="the-solution__how-to">
						<div class="the-solution__how-to-image"></div>
						<h3>Room-Sharing</h3>
						<p>Co-sleeping is dangerous, co-rooming is safe.</p>
					</div>
					<div class="the-solution__how-to">
						<div class="the-solution__how-to-image"></div>
						<h3>Safe Sleep Plan</h3>
						<p>A plan makes hard nights a little easier.</p>
					</div>
				</div>
		</section>
		<section class="the-solution__videos">
			<h1>Safe Sleep Videos</h1>
			<h3>Watch, share, and watch again!</h3>
			<div class="the-solution__video-grid">
				<div>
					<div class="the-solution__video-wrapper">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/CmzKQ3PSrow"></iframe>
					</div>
					<h3>Lorem Ipsum</h3>
				</div>
				<div>
					<div class="the-solution__video-wrapper">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/CmzKQ3PSrow"></iframe>
					</div>
					<h3>Lorem Ipsum</h3>
				</div>
				<div>
					<div class="the-solution__video-wrapper">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/CmzKQ3PSrow"></iframe>
					</div>
					<h3>Lorem Ipsum</h3>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
