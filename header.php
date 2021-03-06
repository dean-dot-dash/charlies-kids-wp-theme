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
		<div class="header__left-content">
			<?php
			if(function_exists('the_custom_logo')){
				the_custom_logo();
			}
			?>
			<nav class="header__nav" id="primary-nav">
				<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'conatiner' => '',
							'theme_location' => 'primary'
						)
					);
				?>
			</nav>
		</div>
		<div class="header__right-content">
			<button id="search-icon">
				<!-- Search Icon -->
				<svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.111 15.222A7.111 7.111 0 108.111 1a7.111 7.111 0 000 14.222zM17 17l-3.867-3.867" stroke="#0C0F0A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<div class="header__social-links">
				<a href="https://www.youtube.com/">
					<!-- YouTube Icon -->
					<svg width="34" height="34" fill="none" xmlns="http://www.w3.org/2000/svg"><title>YouTube Mark</title><path d="M31.767 8.24c-.34-1.57-1.341-2.808-2.613-3.227C26.85 4.25 17.61 4.25 17.61 4.25s-9.24 0-11.545.763C4.792 5.433 3.79 6.669 3.45 8.24c-.618 2.846-.618 8.786-.618 8.786s0 5.939.618 8.786c.34 1.57 1.341 2.755 2.613 3.175 2.304.763 11.545.763 11.545.763s9.24 0 11.545-.763c1.271-.42 2.273-1.605 2.613-3.175.617-2.847.617-8.786.617-8.786s0-5.94-.617-8.786zm-17.18 14.178V11.633l7.723 5.393-7.723 5.392z" /></svg>
				</a>
				<a href="https://www.youtube.com/">
					<!-- Twitter Mark -->
					<svg width="34" height="34" fill="none" xmlns="http://www.w3.org/2000/svg"><title>Twitter Mark</title><path d="M28.663 9.44c-.898.387-1.875.665-2.88.774a4.99 4.99 0 002.2-2.758 9.877 9.877 0 01-3.175 1.209 4.99 4.99 0 00-3.656-1.582 5.002 5.002 0 00-5.002 5.006c0 .387.047.774.123 1.147A14.217 14.217 0 015.958 7.999a4.968 4.968 0 00-.681 2.526c0 1.737.883 3.268 2.23 4.169a5.047 5.047 0 01-2.262-.637v.062a5.004 5.004 0 004.01 4.911c-.43.112-.873.17-1.317.17-.326 0-.634-.032-.945-.076a5.012 5.012 0 004.677 3.471 10.027 10.027 0 01-6.211 2.139c-.42 0-.807-.015-1.209-.062a14.166 14.166 0 007.684 2.245c9.2 0 14.235-7.623 14.235-14.239 0-.217 0-.434-.014-.651a10.776 10.776 0 002.508-2.588z" /></svg>
				</a>
				<a href="https://www.youtube.com/">
					<!-- Instagram Mark -->
					<svg width="34" height="34" fill="none" xmlns="http://www.w3.org/2000/svg"><title>Instagram Mark</title><path d="M16.997 11.185A5.807 5.807 0 0011.182 17a5.807 5.807 0 005.815 5.815A5.807 5.807 0 0022.812 17a5.807 5.807 0 00-5.815-5.815zm0 9.594A3.787 3.787 0 0113.217 17a3.787 3.787 0 013.78-3.78 3.787 3.787 0 013.78 3.78 3.787 3.787 0 01-3.78 3.78zM23.05 9.591c-.751 0-1.358.607-1.358 1.359 0 .75.607 1.358 1.358 1.358a1.355 1.355 0 001.255-1.878 1.357 1.357 0 00-1.255-.839zM28.332 17c0-1.565.014-3.116-.073-4.678-.088-1.815-.502-3.425-1.83-4.752-1.329-1.33-2.936-1.74-4.751-1.829-1.565-.088-3.116-.073-4.678-.073-1.565 0-3.116-.015-4.678.073-1.815.088-3.425.502-4.752 1.829-1.33 1.33-1.741 2.937-1.829 4.752-.088 1.565-.074 3.116-.074 4.678 0 1.562-.014 3.116.074 4.678.088 1.815.502 3.425 1.829 4.752 1.33 1.33 2.937 1.74 4.752 1.829 1.565.088 3.116.073 4.678.073 1.565 0 3.116.015 4.678-.073 1.815-.088 3.425-.502 4.752-1.829 1.33-1.33 1.74-2.937 1.829-4.752.09-1.562.073-3.113.073-4.678zm-2.495 6.686a3.604 3.604 0 01-.856 1.298c-.4.4-.783.65-1.299.856-1.49.593-5.032.46-6.685.46-1.653 0-5.197.133-6.688-.457a3.602 3.602 0 01-1.299-.856c-.4-.4-.65-.783-.856-1.299-.59-1.494-.457-5.035-.457-6.688 0-1.653-.133-5.197.457-6.688.207-.516.456-.902.856-1.299.4-.397.783-.65 1.299-.856 1.491-.59 5.035-.457 6.688-.457 1.653 0 5.197-.133 6.688.457.516.207.902.456 1.299.856.4.4.65.783.856 1.299.59 1.491.457 5.035.457 6.688 0 1.653.133 5.194-.46 6.686z" /></svg>
				</a>
				<a href="https://www.youtube.com/">
					<!-- Facebook Mark -->
					<svg width="34" height="34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.972 28.333V18.011h3.482l.518-4.042h-4v-2.574c0-1.166.325-1.965 1.999-1.965h2.12V5.827a28.132 28.132 0 00-3.106-.16c-3.078 0-5.192 1.879-5.192 5.329v2.966h-3.46v4.041h3.468v10.33h4.171z" /></svg>
				</a>
			</div>
			<div class="header__menu-button">
				<button id="menu-button">
				<svg
					xmlns="http://www.w3.org/2000/svg"
					width="32"
					height="32"
					viewBox="0 0 512 512"
					aria-labelledby="title"
				>
					<title id="menu-icon">Menu Icon</title>
					<rect x="32" y="96" width="448" height="64" rx="14.11" />
					<rect x="32" y="224" width="448" height="64" rx="14.11" />
					<rect x="32" y="352" width="448" height="64" rx="14.11" />
				</svg>
				</button>
			</div>
		</div>
	</header>
