<?php get_header(); ?>
<main>
	<?php get_template_part('template-parts/hero'); ?>
	<div class="front-page__mission">
	<?php
		if( have_posts() ){

			while( have_posts() ){

				the_post();
				the_content();

			}

		}
	?>	
	</div>
	<div class="front-page__video-wrapper">
		<div class="front-page__video">
			<div class="front-page__video-iframe-wrapper">
				<div class="front-page__video-iframe">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/CmzKQ3PSrow"></iframe>
				</div>
			</div>
				<div class="front-page__video-cta">
					<h4>One Infant Loss is Too Many.</h4>
					<p>Since 1999, more than 80,000 babies have died from sleep-related infant death (SUID) in the United States.</p>
					<h5>Nearly all of these deaths were preventable.</h5>
					<button class="button--icon button--large">
						Learn More
						<img width="32px" height="32px" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.png" alt="Hero Image" />	
					</button>
				</div>
		</div>
	</div>
	<div class="front-page__featured">
		<h2>Featured Updates & Events</h2>
		<?php 
			if( have_posts() ){

				while( have_posts() ){

					the_post();
					// get_template_part( 'template-parts/content', 'archive' );
					the_content();

				}

			}
		?>
	</div>
	<div class="front-page__tools">
		<h2>Safe Sleep is Hard. We are Here to Help.</h2>
		<div class="front-page__tools-ctas">
			<div class="front-page__tools-cta">
				<div>
					<!-- Families Icon -->
					<svg width="111" height="112" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="url(#pattern0)" d="M33.653 0h48.391v44.621H33.653z"/><path d="M59.023 7.13c2.912-1.123 5.213-2.635 7.657-2.86 9.47-.899 14.99 5.966 12.342 15.078-1.242 4.25-3.93 7.784-7.189 10.91-3.462 3.33-7.169 6.436-10.896 9.541-.489.409-1.955.572-2.383.225-5.967-4.76-11.996-9.48-16.049-15.834-2.709-4.27-3.87-8.724-1.914-13.586C43.32 3.84 52.3 1.716 58.228 6.497c.428.327.856.674.794.633z" fill="#54327E"/><path d="M110 107.22c-1.344-21.922-8.432-21.023-19.145-24.987 4.888-3.248 8.127-8.826 8.127-15.139 0-10.01-8.127-18.163-18.106-18.163-9.98 0-18.106 8.152-18.106 18.163 0 6.313 3.238 11.891 8.126 15.14-11.059 4.086-18.982 14.75-18.982 27.254h56.192c-.02 0 1.996-.552 1.894-2.268z" fill="#A37DBF"/><path d="M61.366 109.488h5.52c0-14.301-9.064-26.498-21.732-31.177a20.758 20.758 0 009.287-17.325c0-11.462-9.287-20.778-20.712-20.778-11.426 0-20.713 9.316-20.713 20.778 0 7.232 3.707 13.607 9.287 17.325-.815-.552-6.986 2.636-8.045 3.126-2.403 1.083-4.704 2.39-6.64 4.209-5.132 4.8-6.476 12.156-6.904 18.878-.142 2.247.795 5.005 2.933 5.005 1.263 0 3.524-.02 5.153-.02H61.366v-.021z" fill="#A37DBF"/><path fill="url(#pattern1)" d="M38.238 65.401h45.947v45.601H38.238z"/><path d="M74.766 109.202c0-8.703-1.976-16.1-9.674-18.96 3.4-2.267 5.641-6.129 5.641-10.521 0-6.967-5.641-12.627-12.586-12.627S45.56 72.754 45.56 79.721c0 4.392 2.24 8.254 5.642 10.522-7.699 2.84-9.47 10.256-9.47 18.959h33.034z" fill="#54327E"/><defs><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#image0"/></pattern><pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#image1"/></pattern><image id="image0" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABgCAYAAADrc9dCAAAACXBIWXMAAC4jAAAuIwF4pT92AAAA"/><image id="image1" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAC4jAAAuIwF4pT92AAAA"/></defs></svg>
				</div>
				<button class="button">Tools for Families</button>
				<p>Non recusandae et facereuia numquam itaque aut. </p>
			</div>
			<div class="front-page__tools-cta">
				<div>
					<!-- Hearts Icon -->
					<svg width="91" height="75" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M38.474 6.678C44.26 4.328 48.81 1.23 53.647.768c18.795-1.867 29.727 12.325 24.493 31.13C75.689 40.685 70.344 48 63.895 54.459c-6.87 6.854-14.224 13.291-21.578 19.684-.972.857-3.887 1.164-4.727.483-11.838-9.82-23.808-19.596-31.825-32.71C.375 33.105-1.9 23.878 1.988 13.84 7.398-.132 25.178-4.504 36.972 5.36c.795.68 1.612 1.406 1.502 1.318z" fill="#A37DBF"/><path fill="url(#pattern0)" d="M34.883 19.252h55.126v52.197H34.883z"/><path d="M63.121 26.67c3.512-1.428 6.273-3.318 9.232-3.603 11.419-1.12 18.067 7.513 14.886 18.937-1.48 5.338-4.748 9.797-8.657 13.708-4.175 4.174-8.658 8.084-13.12 11.973-.596.527-2.363.703-2.87.285-7.2-5.975-14.467-11.929-19.348-19.903-3.269-5.36-4.66-10.962-2.297-17.07 3.291-8.501 14.113-11.16 21.269-5.162.464.44.972.879.905.835z" fill="#54327E"/><defs><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#image0"/></pattern><image id="image0" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGwAAABoCAYAAAAU9xXbAAAACXBIWXMAAC4jAAAuIwF4pT92AAAA"/></defs></svg>
				</div>
				<button class="button">Tools for Partners</button>
				<p>Non recusandae et facereuia numquam itaque aut. </p>
			</div>
		</div>
	</div>
	<?php get_template_part( 'template-parts/newsletter', 'signup' ); ?>
</main>
<?php get_footer(); ?>
