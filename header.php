<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soundandstage
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'soundandstage'); ?></a>

		<header id="masthead" class="relative site-header flex flex-row items-center justify-between w-full space-x-5 h-16 px-16">
			<div class="site-branding min-w-fit">

				<?php
				the_custom_logo();
				?>
				<h1 class="site-title">
					<a class="text-xl font-bold uppercase" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php bloginfo('name'); ?>
					</a>
				</h1>

				<?php
				$soundandstage_description = get_bloginfo('description', 'display');
				if ($soundandstage_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $soundandstage_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>

			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation flex flex-row w-full items-center">
				<!-- toggle sidebar button -->
				<button id="menu-toggle" class="menu-toggle sm:block md:hidden" aria-controls="primary-menu" aria-expanded="false">
					<i class="fa-solid fa-bars text-white text-4xl"></i>
				</button>

				<div class="hidden md:block">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->