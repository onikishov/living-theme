<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package living
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jQueryFormStyler/jquery.formstyler.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jQueryFormStyler/jquery.formstyler.theme.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/OwlCarousel2/assets/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/OwlCarousel2/assets/owl.theme.default.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/lightGallery/css/lightgallery.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.min.css">

	<?php wp_head(); ?>

	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script>window.html5 || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/html5shiv.js"><\/script>')</script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<?php if(is_page_template('template-listing-detail.php')): ?>
	<header id="header" class="header listing-detail-header">
		<div class="container">
			<div class="header-wrap">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sitelogo_b.svg" alt="<?php bloginfo( 'name' ); ?>"></a>
				</div>
				<nav class="menu" role="navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => '',
						'menu_class'      => '',
						'menu_id'         => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s"><li id="mobile-menu-close"><a href="#"></a></li>%3$s</ul>',
					) );
					?>
				</nav>
				<div id="mobile-menu" class="mobile-menu">MENU</div>
			</div>
		</div>
	</header>
<?php else : ?>
	<header id="header" class="header">
		<div class="container">
			<div class="header-wrap">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sitelogo.svg" alt="<?php bloginfo( 'name' ); ?>" class="logo-default">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sitelogo_b.svg" alt="<?php bloginfo( 'name' ); ?>" class="logo-fixed">
					</a>
				</div>
				<nav class="menu" role="navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => '',
						'menu_class'      => '',
						'menu_id'         => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s"><li id="mobile-menu-close"><a href="#"></a></li>%3$s</ul>',
					) );
					?>
				</nav>
				<div id="mobile-menu" class="mobile-menu">MENU</div>
			</div>
		</div>
	</header>
<?php endif; ?>