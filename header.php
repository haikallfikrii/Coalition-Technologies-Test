<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ct-custom' ); ?></a>

	<!-- Top Bar -->
	<div class="top-bar" style="background-color: #f60; color: white; padding: 10px 20px; display: flex; justify-content: space-between;">
		<div class="call-us">CALL US NOW! <strong style="color: white;">385.154.11.28.35</strong></div>
		<div class="auth-links">
			<a href="#" style="color:#ca3c00; margin-right: 10px; text-decoration: none; font-weight: bold;">LOGIN</a>
			<a href="#" style="color:white; font-weight: bold; text-decoration: none;">SIGNUP</a>
		</div>
	</div>

	<header id="masthead" class="site-header" style="padding: 10px 0; background-color:#f7f7f7; display: flex; justify-content: space-between; align-items: center;">
		<div class="container" style="max-width: 1200px; width: 100%; display: flex; justify-content: space-between; align-items: center;">
			<!-- Logo taking 20% of the width -->
			<div class="site-branding" style="flex: 0 0 10%;">
				<?php the_custom_logo(); ?>
			</div>

			<!-- Navbar taking the remaining space -->
			<nav id="site-navigation" class="main-navigation" style="flex: 1;">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'ct-custom' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'main-menu',
					'container'      => false,
				) );
				?>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
