<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>
		<header id="masthead" class="site-header" role="banner">
			<div class="header-container">
				<a class="logo-link" href="<?php echo get_home_url(); ?>">
					<img class="site-logo" alt="home logo" src='<?php echo get_template_directory_uri() . '/assets/images/Aurel_Logo-1.png'; ?>'>
				</a>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button> -->
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
				</nav><!-- #site-navigation -->
			</div>
			<input type="checkbox" id="nav-trigger" class="nav-trigger " />
			<label for="nav-trigger"> <img class="hamburger-menu-logo" alt="menu logo" src='<?php echo get_template_directory_uri() . '/assets/icons/menu.svg'; ?>'></label>
		</header><!-- #masthead -->

		<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'mobile-menu')); ?>
		<?php if (is_home()) : ?>
			<div id="content" class="site-content site-home">
			<?php else : ?>
				<div id="content" class="site-content">
				<?php endif ?>