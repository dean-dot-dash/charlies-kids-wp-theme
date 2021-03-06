<?php 
/*
Template Name: Support Us Page
*/
	get_header(); 
?>
	<main>
		<?php get_template_part('template-parts/hero'); ?>
		<article class="centered-content">
			<div class="centered-content__content support-us">
			<!-- <?php
				if( have_posts() ){

					while( have_posts() ){

						the_post();
						the_content();

					}

				}
			?> -->
				
				<div class="icon-link-lockups">
					<div class="icon-link-lockup">
						<div class="icon-link-lockup__icons">
							<!-- Families Icon -->
							<svg width="111" height="112" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="url(#pattern0)" d="M33.653 0h48.391v44.621H33.653z"/><path d="M59.023 7.13c2.912-1.123 5.213-2.635 7.657-2.86 9.47-.899 14.99 5.966 12.342 15.078-1.242 4.25-3.93 7.784-7.189 10.91-3.462 3.33-7.169 6.436-10.896 9.541-.489.409-1.955.572-2.383.225-5.967-4.76-11.996-9.48-16.049-15.834-2.709-4.27-3.87-8.724-1.914-13.586C43.32 3.84 52.3 1.716 58.228 6.497c.428.327.856.674.794.633z" fill="#54327E"/><path d="M110 107.22c-1.344-21.922-8.432-21.023-19.145-24.987 4.888-3.248 8.127-8.826 8.127-15.139 0-10.01-8.127-18.163-18.106-18.163-9.98 0-18.106 8.152-18.106 18.163 0 6.313 3.238 11.891 8.126 15.14-11.059 4.086-18.982 14.75-18.982 27.254h56.192c-.02 0 1.996-.552 1.894-2.268z" fill="#A37DBF"/><path d="M61.366 109.488h5.52c0-14.301-9.064-26.498-21.732-31.177a20.758 20.758 0 009.287-17.325c0-11.462-9.287-20.778-20.712-20.778-11.426 0-20.713 9.316-20.713 20.778 0 7.232 3.707 13.607 9.287 17.325-.815-.552-6.986 2.636-8.045 3.126-2.403 1.083-4.704 2.39-6.64 4.209-5.132 4.8-6.476 12.156-6.904 18.878-.142 2.247.795 5.005 2.933 5.005 1.263 0 3.524-.02 5.153-.02H61.366v-.021z" fill="#A37DBF"/><path fill="url(#pattern1)" d="M38.238 65.401h45.947v45.601H38.238z"/><path d="M74.766 109.202c0-8.703-1.976-16.1-9.674-18.96 3.4-2.267 5.641-6.129 5.641-10.521 0-6.967-5.641-12.627-12.586-12.627S45.56 72.754 45.56 79.721c0 4.392 2.24 8.254 5.642 10.522-7.699 2.84-9.47 10.256-9.47 18.959h33.034z" fill="#54327E"/><defs><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#image0"/></pattern><pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#image1"/></pattern><image id="image0" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABgCAYAAADrc9dCAAAACXBIWXMAAC4jAAAuIwF4pT92AAAA"/><image id="image1" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAC4jAAAuIwF4pT92AAAA"/></defs></svg>
						</div>
						<h3>Donate Direction to help our content reach new families and professionals</h3>
						<div class="icon-link-lockup__link">
						<!-- <a href="#">Donate Now</a> -->
						<button class="button--icon button--large button--alt-color">
							Donate Now
							<?php get_template_part('template-parts/icon', 'arrow'); ?>
						</button>
						</div>
					</div>
					<div class="icon-link-lockup">
						<div class="icon-link-lockup__icons">
							<!-- Share Icon -->
							<svg width="77" height="77" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60.805 45.65a15.212 15.212 0 00-11.7 5.614L29.73 42.348c.91-2.785.91-5.788 0-8.574l19.374-8.915a15.211 15.211 0 0019.263 3.479 15.18 15.18 0 006.711-7.96 15.157 15.157 0 00-.001-10.407 15.18 15.18 0 00-6.712-7.959 15.212 15.212 0 00-19.263 3.482 15.163 15.163 0 00-3.493 9.804c.011.904.1 1.805.266 2.694L25.818 27.21a15.213 15.213 0 00-16.517-3.137 15.19 15.19 0 00-6.764 5.592 15.161 15.161 0 000 16.79 15.19 15.19 0 006.764 5.593 15.214 15.214 0 0016.517-3.137l20.058 9.219a15.8 15.8 0 00-.266 2.694c0 3.001.891 5.935 2.56 8.43a15.191 15.191 0 006.82 5.59 15.214 15.214 0 0016.56-3.29 15.157 15.157 0 003.294-16.538 15.179 15.179 0 00-5.597-6.81 15.209 15.209 0 00-8.442-2.558z" fill="#532B7E"/><circle cx="61" cy="15" r="15" fill="#A37DBF"/><circle cx="61" cy="61" r="16" fill="#A37DBF"/><circle cx="15" cy="38" r="15" fill="#A37DBF"/></svg>
							<!-- Hearts Icon -->
							<svg width="91" height="75" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M38.474 6.678C44.26 4.328 48.81 1.23 53.647.768c18.795-1.867 29.727 12.325 24.493 31.13C75.689 40.685 70.344 48 63.895 54.459c-6.87 6.854-14.224 13.291-21.578 19.684-.972.857-3.887 1.164-4.727.483-11.838-9.82-23.808-19.596-31.825-32.71C.375 33.105-1.9 23.878 1.988 13.84 7.398-.132 25.178-4.504 36.972 5.36c.795.68 1.612 1.406 1.502 1.318z" fill="#A37DBF"/><path fill="url(#pattern0)" d="M34.883 19.252h55.126v52.197H34.883z"/><path d="M63.121 26.67c3.512-1.428 6.273-3.318 9.232-3.603 11.419-1.12 18.067 7.513 14.886 18.937-1.48 5.338-4.748 9.797-8.657 13.708-4.175 4.174-8.658 8.084-13.12 11.973-.596.527-2.363.703-2.87.285-7.2-5.975-14.467-11.929-19.348-19.903-3.269-5.36-4.66-10.962-2.297-17.07 3.291-8.501 14.113-11.16 21.269-5.162.464.44.972.879.905.835z" fill="#54327E"/><defs><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#image0"/></pattern><image id="image0" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGwAAABoCAYAAAAU9xXbAAAACXBIWXMAAC4jAAAuIwF4pT92AAAA"/></defs></svg>
							<!-- Comment Icon -->
							<svg width="85" height="85" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60.208 46.042H24.792a3.542 3.542 0 110-7.084h35.416a3.542 3.542 0 010 7.084z" fill="#532B7E"/><path d="M42.5 7.083a35.42 35.42 0 00-27.424 57.832l-6.955 6.956a3.542 3.542 0 002.504 6.046H42.5a35.417 35.417 0 100-70.834zM31.875 24.792h21.25a3.542 3.542 0 010 7.083h-21.25a3.542 3.542 0 010-7.083zm21.25 35.416h-21.25a3.542 3.542 0 110-7.083h21.25a3.542 3.542 0 110 7.083zm7.083-14.166H24.791a3.542 3.542 0 110-7.084h35.417a3.542 3.542 0 010 7.084z" fill="#A37DBF"/><path d="M53.125 60.208h-21.25a3.542 3.542 0 010-7.083h21.25a3.542 3.542 0 010 7.083zm0-28.333h-21.25a3.542 3.542 0 110-7.083h21.25a3.542 3.542 0 110 7.083z" fill="#532B7E"/></svg>
						</div>
						<h3>Share, Like, Comment on our Videos</h3>
						<div class="icon-link-lockup__link">
						<!-- <a href="#">Watch Videos</a> -->
						<button class="button--icon button--large button--alt-color">
							Watch Videos
							<?php get_template_part('template-parts/icon', 'arrow'); ?>
						</button>
						</div>
					</div>
					<div class="icon-link-lockup">
						<div class="icon-link-lockup__icons">
							<!-- Event Icon -->
							<svg width="105" height="105" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M96.25 43.75H8.75v39.375c0 7.249 5.876 13.125 13.125 13.125h61.252c7.249 0 13.125-5.876 13.125-13.125V43.75zM30.625 35a4.375 4.375 0 01-4.375-4.375v-17.5a4.375 4.375 0 118.75 0v17.5A4.375 4.375 0 0130.625 35zm43.75 0A4.375 4.375 0 0170 30.625v-17.5a4.375 4.375 0 018.75 0v17.5A4.375 4.375 0 0174.375 35z" fill="#A37DBF"/><path d="M83.125 17.5H78.75v13.125a4.375 4.375 0 01-8.75 0V17.5H35v13.125a4.375 4.375 0 01-8.75 0V17.5h-4.377c-7.249 0-13.125 5.876-13.125 13.125V43.75H96.25V30.625c0-7.249-5.876-13.125-13.125-13.125zM52.526 55.575c2.33-.899 4.171-2.108 6.127-2.288 7.576-.72 11.992 4.773 9.873 12.062-.993 3.4-3.144 6.228-5.751 8.729-2.77 2.664-5.736 5.148-8.717 7.633-.391.327-1.565.457-1.907.18-4.774-3.809-9.597-7.585-12.84-12.668-2.166-3.416-3.095-6.98-1.53-10.87 2.183-5.41 9.368-7.11 14.11-3.285.342.262.684.54.635.507z" fill="#54327E"/></svg>
						</div>
						<h3>Participate in/organize a Donor Event</h3>
						<div class="icon-link-lockup__link">
						<!-- <a href="#">Learn More</a> -->
						<button class="button--icon button--large button--alt-color">
							Learn More
							<?php get_template_part('template-parts/icon', 'arrow'); ?>
						</button>
						</div>
					</div>
					<div class="icon-link-lockup">
						<div class="icon-link-lockup__icons">
							<!-- Event Icon -->
							<svg width="105" height="105" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M96.25 43.75H8.75v39.375c0 7.249 5.876 13.125 13.125 13.125h61.252c7.249 0 13.125-5.876 13.125-13.125V43.75zM30.625 35a4.375 4.375 0 01-4.375-4.375v-17.5a4.375 4.375 0 118.75 0v17.5A4.375 4.375 0 0130.625 35zm43.75 0A4.375 4.375 0 0170 30.625v-17.5a4.375 4.375 0 018.75 0v17.5A4.375 4.375 0 0174.375 35z" fill="#A37DBF"/><path d="M83.125 17.5H78.75v13.125a4.375 4.375 0 01-8.75 0V17.5H35v13.125a4.375 4.375 0 01-8.75 0V17.5h-4.377c-7.249 0-13.125 5.876-13.125 13.125V43.75H96.25V30.625c0-7.249-5.876-13.125-13.125-13.125zM52.526 55.575c2.33-.899 4.171-2.108 6.127-2.288 7.576-.72 11.992 4.773 9.873 12.062-.993 3.4-3.144 6.228-5.751 8.729-2.77 2.664-5.736 5.148-8.717 7.633-.391.327-1.565.457-1.907.18-4.774-3.809-9.597-7.585-12.84-12.668-2.166-3.416-3.095-6.98-1.53-10.87 2.183-5.41 9.368-7.11 14.11-3.285.342.262.684.54.635.507z" fill="#54327E"/></svg>
						</div>
						<h3>Purchase/Gift a Book</h3>
						<div class="icon-link-lockup__link">
						<!-- <a href="#">Purchase Now</a> -->
						<button class="button--icon button--large button--alt-color">
							Purchase Now
							<?php get_template_part('template-parts/icon', 'arrow'); ?>
						</button>
						</div>
					</div>
				</div>
			</div>
		</article>
	</main>
<?php get_footer(); ?>
