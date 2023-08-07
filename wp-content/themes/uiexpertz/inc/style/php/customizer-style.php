<?php

/*************************************************
## uiexpertz Typography
 *************************************************/
function uiexpertz_customizer_styling()
{
	$uiexpertz_header_style = function_exists('get_field') ? get_field('header_style') : NULL;
	$uiexpertz_header_theme_color = function_exists('get_field') ? get_field('header_theme_color') : '';
?>
	<style type="text/css">
		/**
		* header style 1
	*/
		<?php if (get_theme_mod('choose_default_header') == 'header-style-1') : ?><?php if (get_theme_mod('cbtoolkit_header_right_phone_text_color')) { ?>.uiexpertz-header-inner .uiexpertz-header-topbar.uiexpertz-bg-primary,
		.uiexpertz-header-right-phone-114 {
			color: <?php echo esc_attr(get_theme_mod('cbtoolkit_header_right_phone_text_color')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('cbtoolkit_header_right_phone_text_hover_color')) { ?>
			.uiexpertz-header-right-phone-114:hover {
			color: <?php echo esc_attr(get_theme_mod('cbtoolkit_header_right_phone_text_hover_color')); ?>;
		}
		<?php } ?>
		<?php if (get_theme_mod('cbtoolkit_header_right_button_text_color')) { ?>
			.uiexpertz-header-right-btn-114 {
				color: <?php echo esc_attr(get_theme_mod('cbtoolkit_header_right_button_text_color')); ?>;
			}
		<?php } ?>
		<?php if (get_theme_mod('cbtoolkit_header_right_button_bg_color')) { ?>
			.uiexpertz-header-right-btn-114 {
				background-color: <?php echo esc_attr(get_theme_mod('cbtoolkit_header_right_button_bg_color')); ?>;
			}
		<?php } ?>
		<?php if (get_theme_mod('cbtoolkit_header_right_button_text_hover_color')) { ?>
			.uiexpertz-header-right-btn-114:hover {
				color: <?php echo esc_attr(get_theme_mod('cbtoolkit_header_right_button_text_hover_color')); ?>;
			}
		<?php } ?>
		<?php if (get_theme_mod('cbtoolkit_header_right_button_bg_hover_color')) { ?>
			.uiexpertz-header-right-btn-114:hover {
				background-color: <?php echo esc_attr(get_theme_mod('cbtoolkit_header_right_button_bg_hover_color')); ?>;
			}
		<?php } ?>
		
		<?php endif; ?>
		/* Breadcrum Style */
		<?php if (get_theme_mod('breadcrumb_text_color')) { ?>.banner.banner-inner .breadcrumb-txt,
		.banner.banner-inner .breadcrumb-txt h1,
		.breadcrumb-trail.breadcrumbs>span a,
		nav.breadcrumb-trail.breadcrumbs>span span {
			color: <?php echo esc_attr(get_theme_mod('breadcrumb_text_color')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('breadcrumb_text_hover_color')) { ?>.breadcrumb-trail.breadcrumbs>span a:hover span {
			color: <?php echo esc_attr(get_theme_mod('breadcrumb_text_hover_color')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('breadcrumb_bg_img_ovelay_color')) { ?>.banner.banner-inner::after {
			background-color: <?php echo esc_attr(get_theme_mod('breadcrumb_bg_img_ovelay_color')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('breadcrumb_bg_img_ovelay_color_opacity')) { ?>.banner.banner-inner::after {
			opacity: <?php echo esc_attr(get_theme_mod('breadcrumb_bg_img_ovelay_color_opacity')); ?>;
		}

		<?php } else { ?>.banner.banner-inner::after {
			opacity: 0;
		}

		<?php } ?><?php if (get_theme_mod('breadcrumb_background_position_select')) { ?>.banner.banner-inner {
			background-position: <?php echo esc_attr(get_theme_mod('breadcrumb_background_position_select')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('breadcrumb_background_size_select')) { ?>.banner.banner-inner {
			background-size: <?php echo esc_attr(get_theme_mod('breadcrumb_background_size_select')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('breadcrumb_background_blendmode_select')) { ?>.banner.banner-inner {
			background-blend-mode: <?php echo esc_attr(get_theme_mod('breadcrumb_background_blendmode_select')); ?>;
		}

		<?php } ?>
	</style>
<?php }

add_action('wp_head', 'uiexpertz_customizer_styling');

function uiexpertz_footer_style()
{ ?>
	<style>
		<?php
		/***
		 * Footer Style 01
		 */
		if (get_theme_mod('footer_background_size_1')) { ?>.uiexpertz-footer-114 {
			background-size: <?php echo esc_attr(get_theme_mod('footer_background_size_1')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_bg_image_1')) { ?>.uiexpertz-footer-114 {
			background-image: url(<?php echo esc_url(get_theme_mod('footer_bg_image_1')); ?>);
		}

		<?php } ?><?php if (get_theme_mod('cbtoolkit_footer_bg_color_1')) { ?>.uiexpertz-footer-114 {
			background-color: <?php echo esc_attr(get_theme_mod('cbtoolkit_footer_bg_color_1')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_background_position_select_1')) { ?>.uiexpertz-footer-114 {
			background-position: <?php echo esc_attr(get_theme_mod('footer_background_position_select_1')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_background_blendmode_select_1')) { ?>.uiexpertz-footer-114 {
			background-blend-mode: <?php echo esc_attr(get_theme_mod('footer_background_blendmode_select_1')); ?>;
		}

		<?php } ?><?php
					/***
					 * Footer Style 02
					 */
					if (get_theme_mod('footer_background_size_2')) { ?>.footer-area.uiexpertz-footer-114-update {
			background-size: <?php echo esc_attr(get_theme_mod('footer_background_size_2')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_bg_image_2')) { ?>.footer-area.uiexpertz-footer-114-update {
			background-image: <?php echo esc_url(get_theme_mod('footer_bg_image_2')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('cbtoolkit_footer_bg_color_2')) { ?>.footer-area.uiexpertz-footer-114-update {
			background-color: <?php echo esc_attr(get_theme_mod('cbtoolkit_footer_bg_color_2')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_background_position_select_2')) { ?>.footer-area.uiexpertz-footer-114-update {
			background-position: <?php echo esc_attr(get_theme_mod('footer_background_position_select_2')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_background_blendmode_select_2')) { ?>.footer-area.uiexpertz-footer-114-update {
			background-blend-mode: <?php echo esc_attr(get_theme_mod('footer_background_blendmode_select_2')); ?>;
		}

		<?php } ?><?php
					/***
					 * Footer Style 03
					 */
					if (get_theme_mod('footer_background_size_3')) { ?>.uiexpertz-fz-footer-3-area {
			background-size: <?php echo esc_attr(get_theme_mod('footer_background_size_3')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_bg_image_3')) { ?>.uiexpertz-fz-footer-3-area {
			background-image: <?php echo esc_url(get_theme_mod('footer_bg_image_3')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('cbtoolkit_footer_bg_color_3')) { ?>.uiexpertz-fz-footer-3-area {
			background-color: <?php echo esc_attr(get_theme_mod('cbtoolkit_footer_bg_color_3')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_background_position_select_3')) { ?>.uiexpertz-fz-footer-3-area {
			background-position: <?php echo esc_attr(get_theme_mod('footer_background_position_select_3')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_background_blendmode_select_3')) { ?>.uiexpertz-fz-footer-3-area {
			background-blend-mode: <?php echo esc_attr(get_theme_mod('footer_background_blendmode_select_3')); ?>;
		}

		<?php } ?><?php
					/***
					 * Footer Style 04
					 */
					if (get_theme_mod('footer_background_size_4')) { ?>.uiexpertz-fz-footer-style-4 {
			background-size: <?php echo esc_attr(get_theme_mod('footer_background_size_4')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_bg_image_4')) { ?>.uiexpertz-fz-footer-style-4 {
			background-image: <?php echo esc_url(get_theme_mod('footer_bg_image_4')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('cbtoolkit_footer_bg_color_4')) { ?>.uiexpertz-fz-footer-style-4 {
			background-color: <?php echo esc_attr(get_theme_mod('cbtoolkit_footer_bg_color_4')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_background_position_select_4')) { ?>.uiexpertz-fz-footer-style-4 {
			background-position: <?php echo esc_attr(get_theme_mod('footer_background_position_select_4')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_background_blendmode_select_4')) { ?>.uiexpertz-fz-footer-style-4 {
			background-blend-mode: <?php echo esc_attr(get_theme_mod('footer_background_blendmode_select_4')); ?>;
		}

		<?php } ?><?php
					/***
					 * Footer Style 05
					 */
					if (get_theme_mod('footer_background_size_5')) { ?>.uiexpertz-fz-footer5-top-wrapper {
			background-size: <?php echo esc_attr(get_theme_mod('footer_background_size_5')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_bg_image_5')) { ?>.uiexpertz-fz-footer5-top-wrapper {
			background-image: <?php echo esc_url(get_theme_mod('footer_bg_image_5')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('cbtoolkit_footer_bg_color_5')) { ?>.uiexpertz-fz-footer5-top-wrapper {
			background-color: <?php echo esc_attr(get_theme_mod('cbtoolkit_footer_bg_color_5')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_background_position_select_5')) { ?>.uiexpertz-fz-footer5-top-wrapper {
			background-position: <?php echo esc_attr(get_theme_mod('footer_background_position_select_5')); ?>;
		}

		<?php } ?><?php if (get_theme_mod('footer_background_blendmode_select_5')) { ?>.uiexpertz-fz-footer5-top-wrapper {
			background-blend-mode: <?php echo esc_attr(get_theme_mod('footer_background_blendmode_select_5')); ?>;
		}

		<?php } ?>
	</style>
<?php }
add_action('wp_head', 'uiexpertz_footer_style');

