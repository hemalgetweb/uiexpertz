<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uiexpertz
 */
$cbtoolkit_preloader = get_theme_mod('cbtoolkit_preloader', false);
$body_background_color = function_exists( 'get_field' ) ? get_field( 'body_background_color' ) : '';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="google-site-verification" content="n6pNPuNT56SNrH6FZ2N0aXjGpPoBeFZspVVJ-6Hbc8w" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('inner'); ?> data-bg-color="<?php echo esc_attr($body_background_color); ?>">
<?php wp_body_open(); ?>
		<!-- preloader and scroll up added based on customizer -->
		<?php if($cbtoolkit_preloader) : ?>
			<!-- preloader begin -->
			<!-- preloader code here -->
			<!-- preloader end -->
		<?php endif; ?>

<!-- header start -->
<?php do_action( 'uiexpertz_header_style' );?>
<!-- header end -->
<!-- before main content start -->
<?php do_action( 'uiexpertz_before_main_content' );?>
<!-- before main content end -->

