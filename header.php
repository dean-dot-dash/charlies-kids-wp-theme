<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <title>Charlie's Kids</title> -->
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<?php
		if(function_exists('the_custom_logo')){
			the_custom_logo();
		}
		?>
		<nav class="header__nav">
			<?php
				wp_nav_menu(
					array(
						'menu' => 'primary',
						'conatiner' => '',
						'theme_location' => 'primary'
					)
				);
			?>
			<!-- <ul>
				<li>Our Story</li>
				<li>Professional Resources</li>
				<li>The Problem</li>
				<li>The Solution</li>
				<li>Support Us</li>
			</ul> -->
		</nav>
	</header>
