<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php echo wp_get_document_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="<?php the_field('favicon', 'options'); ?>" type="image/x-icon">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="x-rim-auto-match" content="none">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
		<defs>
			<filter id="round">
				<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
				<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
				<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
			</filter>
		</defs>
	</svg>

	<div class="wrapper">

		<?php if(is_front_page()): ?>
			<div class="preloader">
				<div class="preloader__circle preloader__circle_1"></div>
				<div class="preloader__wrapper">
					<div class="preloader__logo"><img src="/wp-content/themes/inspot/img/preloader-logo-1.png" alt=""></div>
					<div class="preloader__sublogo"><img src="/wp-content/themes/inspot/img/preloader-logo-2.svg" alt=""></div>
				</div>
				<div class="preloader__circle preloader__circle_2"></div>
			</div>
		<?php endif; ?>

		<header class="header">
			<div class="container">

				<div class="header__logo">
					<a href="/">
						<picture>
							<source media="(min-width:565px)" srcset="<?php echo esc_url(get_field('logo', 'options')['url']); ?>">
							<img src="<?php echo esc_url(get_field('logo_mobile', 'options')['url']); ?>" alt="<?php echo get_field('logo_mobile', 'options')['alt']; ?>">
						</picture>
					</a>
				</div>
				<nav class="header__nav">
				<?php 
						wp_nav_menu([
							'menu'            => 'menu',
							'container'       => '',
							'menu_class'      => 'header__nav-list'
						]);
					?>
				</nav>
				<button class="header__btn"><img src="/wp-content/themes/inspot/img/menu.svg" alt=""></button>

			</div>
		</header>

		<main class="main">
			<div class="main__circle"></div>