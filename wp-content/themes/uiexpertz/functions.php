<?php

/**
 * uiexpertz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uiexpertz
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

function uiexpertz_setup()
{
	load_theme_textdomain('uiexpertz', get_template_directory() . '/languages');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('editor-styles');
	add_theme_support("wp-block-styles");
	add_theme_support("responsive-embeds");
	add_theme_support("align-wide");
	add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
	$defaults = array(
		'height' => 100,
		'width' => 400,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array('site-title', 'site-description'),
		'unlink-homepage-logo' => true,
	);
	$args = array(
		'default-text-color' => '000',
		'width' => 1000,
		'height' => 250,
		'flex-width' => true,
		'flex-height' => true,
	);
	add_theme_support('custom-header', $args);
	add_theme_support('custom-background');
	add_theme_support('custom-logo', $defaults);
	if (function_exists('register_block_style')) {
		register_block_style(
			'core/quote',
			array(
				'name' => 'blue-quote',
				'label' => __('Blue Quote', 'uiexpertz'),
				'is_default' => true,
				'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
			)
		);
	}
	register_block_pattern(
		'uiexpertz-pattern',
		array(
			'title' => __('UIExpertz Pattern', 'uiexpertz'),
			'description' => __('UIExpertz Pattern', 'uiexpertz'),
			'content' => __('UIExpertz Pattern Content', 'uiexpertz')
		)
	);
	register_nav_menus(
		array(
			'main-menu' => esc_html__('Main Menu', 'uiexpertz'),
			'copyright_menu' => esc_html__('Copyright Menu', 'uiexpertz')
		)
	);
	register_nav_menus(
		array(
			'footer-menu' => esc_html__('Footer Menu', 'uiexpertz')
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'uiexpertz_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support('post-formats', [
		'image',
		'audio',
		'video',
		'gallery',
		'quote',
	]);
	add_theme_support('customize-selective-refresh-widgets');
	add_theme_support(
		'custom-logo',
		array(
			'height' => 30,
			'width' => 130,
			'flex-width' => true,
			'flex-height' => true,
			'unlink-homepage-logo' => true,
		)
	);
}
add_action('after_setup_theme', 'uiexpertz_setup');

function uiexpertz_content_width()
{
	$GLOBALS['content_width'] = apply_filters('uiexpertz_content_width', 640);
}
add_action('after_setup_theme', 'uiexpertz_content_width', 0);

/*
 * Register widget area.
 */
function uiexpertz_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Blog Sidebar', 'uiexpertz'),
			'id' => 'blog-sidebar',
			'description' => esc_html__('Add Blog Sidebar.', 'uiexpertz'),
			'before_widget' => '<section id="%1$s" class="footer-widget mb-4 mb-xl-0 %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title text-clr-darkBlue fs-13 fw-bold mb-4 pb-1 ls-1 text-uppercase">',
			'after_title' => '</h3>',
		)
	);
	// footer default
	for ($num = 1; $num <= 4; $num++) {
		register_sidebar([
			'name' => sprintf(esc_html__('Footer %1$s', 'uiexpertz'), $num),
			'id' => 'footer-' . $num,
			'description' => sprintf(esc_html__('Footer %1$s', 'uiexpertz'), $num),
			'before_widget' => '<div><div id="%1$s" class="footer-widget mb-40 footer-col-' . esc_attr($num) . ' %2$s ">',
			'after_widget' => '</div></div>',
			'before_title' => '<h3 class="widget-title text-clr-darkBlue fs-13 fw-bold mb-4 pb-1 ls-1 text-uppercase">',
			'after_title' => '</h3>',
		]);
	}
}
add_action('widgets_init', 'uiexpertz_widgets_init');

define('UI_EXPERTZ_THEME_DIR', get_template_directory());
define('UI_EXPERTZ_THEME_URI', get_template_directory_uri());
define('UIEXPERTZ_THEME_CSS_DIR', UI_EXPERTZ_THEME_URI . '/assets/css/');
define('UI_EXPERTZ_THEME_JS_DIR', UI_EXPERTZ_THEME_URI . '/assets/js/');
define('UI_EXPERTZ_THEME_INC', UI_EXPERTZ_THEME_DIR . '/inc/');
define('UI_EXPERTZ_THEME_HOOK', UI_EXPERTZ_THEME_INC . 'hooks/');
define('UI_EXPERTZ_THEME_CLASS', UI_EXPERTZ_THEME_INC . 'classes/');

/*
 * Enqueue Admin scripts and styles.
 */
function uiexpertz_admin_custom_scripts()
{
	wp_enqueue_media();
	wp_enqueue_style('customizer-style', get_template_directory_uri() . '/inc/style/css/customizer-style.css', array());
	wp_register_script('uiexpertz-admin-custom', get_template_directory_uri() . '/inc/js/admin_custom.js', ['jquery'], '', true);
	wp_enqueue_script('uiexpertz-admin-custom');
}
add_action('admin_enqueue_scripts', 'uiexpertz_admin_custom_scripts');
/**
 * Registers an editor stylesheet for the theme.
 */
function uiexpertz_theme_add_editor_styles()
{
	add_editor_style('assets/css/custom-editor-style.css');
}
add_action('admin_init', 'uiexpertz_theme_add_editor_styles');

/*
 * Enqueue Theme scripts and styles.
 */

function uiexpertz_scripts()
{
	// all CSS
	wp_enqueue_style('uiexpertz-fonts', uiexpertz_fonts_url(), array(), '1.0.0');
	wp_enqueue_style('swiper-bundle', UIEXPERTZ_THEME_CSS_DIR . 'swiper-bundle.min.css');
	wp_enqueue_style('bootstrap', UIEXPERTZ_THEME_CSS_DIR . 'bootstrap.min.css');

	wp_enqueue_style('uiexpertz-core', UIEXPERTZ_THEME_CSS_DIR . 'uiexpertz-core.css', null, time());
	wp_enqueue_style('uiexpertz-custom', UIEXPERTZ_THEME_CSS_DIR . 'uiexpertz-custom.css', null, time());
	wp_enqueue_style('uiexpertz-ashik', UIEXPERTZ_THEME_CSS_DIR . 'ashik-vai.css', null, time());
	wp_enqueue_style('uiexpertz-emon', UIEXPERTZ_THEME_CSS_DIR . 'emon-vai.css', null, time());
	wp_enqueue_style('splide-min', UIEXPERTZ_THEME_CSS_DIR . 'splide.min.css', null, time());

	// all js
	wp_enqueue_script('bootstrap', UI_EXPERTZ_THEME_JS_DIR . 'bootstrap.bundle.min.js', ['jquery'], time(), true);
	wp_enqueue_script('swiper', UI_EXPERTZ_THEME_JS_DIR . 'swiper-bundle.min.js', ['jquery'], '', true);
	wp_enqueue_script('gsap', UI_EXPERTZ_THEME_JS_DIR . 'gsap.min.js', ['jquery'], '', true);
	wp_enqueue_script('splide-js', UI_EXPERTZ_THEME_JS_DIR . 'splide.min.js', ['jquery'], time(), true);
	wp_enqueue_script('splide-auto-slide', UI_EXPERTZ_THEME_JS_DIR . 'splide-auto-slide.js', ['jquery'], time(), true);
	wp_enqueue_script('uiexpertz-script', UI_EXPERTZ_THEME_JS_DIR . 'script.js', ['jquery'], time(), true);
	wp_enqueue_script('uiexpertz-ajax-script', UI_EXPERTZ_THEME_JS_DIR . 'ajax-script.js', ['jquery'], time(), true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	$data = array(
		'ajax_url' => admin_url('admin-ajax.php'),
	);
	wp_localize_script( 'uiexpertz-ajax-script', 'ajax', $data );
}
add_action('wp_enqueue_scripts', 'uiexpertz_scripts');


/**
 * Enqueue ajax for only case_studies archive
 */
function uiexpertz_enqueue_load_more_scripts_for_case_studies() {
    if (is_post_type_archive('project')) {
		$count_posts = wp_count_posts('project');
		$total_published_posts = $count_posts->publish;
		$blog_posts_per_page = get_option('posts_per_page');
		$number_of_pagination = floor($total_published_posts / $blog_posts_per_page);
		wp_enqueue_script('uiexpertz-case-studies', UI_EXPERTZ_THEME_JS_DIR . 'ajax/case-studies/case-studies.js', ['jquery'], time(), true);
        wp_localize_script('uiexpertz-case-studies', 'loadmore_params', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('loadmore_nonce'),
			'number_of_pagination' => $number_of_pagination
        ));
    }
}
add_action('wp_enqueue_scripts', 'uiexpertz_enqueue_load_more_scripts_for_case_studies');
/*
Register Fonts
 */
function uiexpertz_fonts_url()
{
	if ('off' !== _x('on', 'Google font: on or off', 'uiexpertz')) {
		$font_url = 'https://fonts.googleapis.com/css2?' . urlencode('family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&display=swap');
	}
	return $font_url;
}

require UI_EXPERTZ_THEME_INC . 'template-helper.php';
require UI_EXPERTZ_THEME_INC . 'post-type/register-post-type.php';
require UI_EXPERTZ_THEME_INC . 'custom-header.php';
require UI_EXPERTZ_THEME_INC . 'template-tags.php';
require UI_EXPERTZ_THEME_INC . 'template-functions.php';
include_once UI_EXPERTZ_THEME_INC . '/style/php/customizer-style.php';
include_once UI_EXPERTZ_THEME_INC . 'class-wp-bootstrap-navwalker.php';
require_once UI_EXPERTZ_THEME_INC . 'class-tgm-plugin-activation.php';
require_once UI_EXPERTZ_THEME_INC . 'classes/class-uiexpertz-comment.php';
if (defined('JETPACK__VERSION')) {
	require UI_EXPERTZ_THEME_INC . 'jetpack.php';
}
/***
 * Add extra info on menu item
 */
function add_extra_menu_item($item_output, $item, $depth, $args)
{
	// Get the custom field value for the current menu item
	$extra_info = function_exists('get_field') ? get_field('menu_info', $item->ID) : '';
	// If the custom field value exists, wrap the menu title and extra info in a single <div>
	if ($extra_info) {
		$extra_info_markup = '<span class="extra-info">' . $extra_info . '</span>';
		$item_output = preg_replace('/(<a.*?>)([^<]*)(<\/a>)/', '<div class="menu-item-content">$1$2' . $extra_info_markup . '$3</div>', $item_output);
	}

	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_extra_menu_item', 10, 4);




/**
 * Filter blog post by search
 */

function uiexpertz_perform_fetch_all_post()
{
	$paged = $_POST['paged'];

	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'ignore_sticky_posts' => true,
		'paged' => $paged
	);

	$query = new WP_Query($args);

	// Start output buffer to store the HTML content
	ob_start();

	// Check if there are search results to display
	if ($query->have_posts()) {
		echo '<div class="row">';
		while ($query->have_posts()) {
			$query->the_post();
		?>
			<div class="col-lg-4 col-md-6">
				<div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">
					<a  class="uiexpertz-theme-accourdion-btn-114 js-text-cursor bg-clr-darkBlue px-2 py-2 text-nowrap text-white d-none"
						href="<?php echo esc_url(get_the_permalink( get_the_ID() )); ?>"
						class="js-text-cursor d-none">
						<?php echo esc_html__('Get inspired', 'cb-core'); ?>
						<span class="pb-1">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M10 16L8.9375 14.9375L13.125 10.75H4V9.25H13.125L8.9375 5.0625L10 4L16 10L10 16Z"
									fill="white" />
							</svg>
						</span>
					</a>
					<div>
						<div class="p-1">
							<?php the_post_thumbnail( get_the_ID(), 'full' ); ?>
						</div>
						<ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
							<?php
							$categories = get_the_category();
							
							foreach ($categories as $category) {
								echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
							}
							?>
						</ul>
						<div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
							<h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
							<p class="fs-6 text-clr-gray mb-3"><?php echo wp_trim_words(get_the_excerpt(), 16); ?></p>
						</div>
					</div>
					<div
						class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
						<span>
							<h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
						</span>
						<span>
							<svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
								fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
							</svg>

						</span>
					</div>
				</div>
			</div>
		<?php }
		wp_reset_postdata();
		echo '</div>';
	} else {
		// No search results found
		echo '0';
	}

	// End the output buffer and return the content
	$output = ob_get_clean();
	echo $output;
	exit;
}
add_action('wp_ajax_uiexpertz_perform_fetch_all_post', 'uiexpertz_perform_fetch_all_post');
add_action('wp_ajax_nopriv_uiexpertz_perform_fetch_all_post', 'uiexpertz_perform_fetch_all_post');




/**
 * add class to dropdown
 */

 function custom_child_menu_class( $classes, $item, $args, $depth ) {
    // Specify the menu ID or name you want to target (change 'primary' to your menu's name).
    $menu_name = 'main-menu';

    // Check if the menu item belongs to the specified menu and is a child item.
    if ($args->theme_location == $menu_name && $depth > 0) {
        // Add your custom class to the child menu item (dropdown menu item).
        $classes[] = 'custom-dorpdown-item';
    }

    return $classes;
}
add_filter( 'nav_menu_css_class', 'custom_child_menu_class', 10, 4 );

/**
 * custom time
 */
function custom_time_diff($post_date) {
    $current_date = current_time('timestamp');
    $post_timestamp = strtotime($post_date);
    $time_diff = $current_date - $post_timestamp;

    if ($time_diff < 43200) {
        // Less than 12 hours
        $result = sprintf(_n('%d hour', '%d hours', (int)($time_diff / 3600)), (int)($time_diff / 3600));
    } elseif ($time_diff < 2592000) {
        // Less than 30 days
        $result = sprintf(_n('%d day', '%d days', (int)($time_diff / 86400)), (int)($time_diff / 86400));
    } elseif ($time_diff < 31536000) {
        // Less than 12 months
        $result = sprintf(_n('%d month', '%d months', (int)($time_diff / 2592000)), (int)($time_diff / 2592000));
    } else {
        // More than 12 months, show in years
        $result = sprintf(_n('%d year', '%d years', (int)($time_diff / 31536000)), (int)($time_diff / 31536000));
    }

    return $result . ' ago';
}



/**
 * Load more posts for click button
 */
function uiexpertz_case_studies_load_more() {
    check_ajax_referer('loadmore_nonce', 'nonce');
    $page = $_POST['page'];
    $post_type = $_POST['post_type'];
    $loaded_posts = isset($_POST['loaded_posts']) ? $_POST['loaded_posts'] : array();
	$blog_posts_per_page = get_option('posts_per_page');
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $blog_posts_per_page,
        'paged' => $page,
        'post__not_in' => $loaded_posts // Exclude loaded posts
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();?>
			<div class="col-lg-4 col-md-6">
				<div class="service-item service-item-wrap bg-white mb-4 pb-3">
					<div>
						<?php if(has_post_thumbnail( )) : ?>
						<div class="p-1">
							<?php the_post_thumbnail(get_the_ID(), 'full'); ?>
						</div>
						<?php endif; ?>
						<ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
						<?php
						$post_categories = get_the_terms(get_the_ID(), 'category');
						if ($post_categories && !is_wp_error($post_categories)) {
							foreach ($post_categories as $category) {
								echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
							}
						}
						?>
					</ul>
						<div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
							<h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
							<p class="fs-6 text-clr-gray mb-3"><?php the_excerpt(); ?></p>
						</div>
					</div>
					<a href="<?php the_permalink(); ?>"
						class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
						<span>
							<h4 class="fs-14 fw-semi-bold text-clr-gray"><?php echo esc_html__('Read more', 'uiexpertz'); ?></h4>
						</span>
						<span>
							<svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
							</svg>

						</span>
					</a>
				</div>
			</div>
        <?php endwhile;
    endif;

    wp_reset_postdata();
    die();
}
add_action('wp_ajax_uiexpertz_case_studies_load_more', 'uiexpertz_case_studies_load_more');
add_action('wp_ajax_nopriv_uiexpertz_case_studies_load_more', 'uiexpertz_case_studies_load_more');


/***
 * Service based filter on case study archive
 */
function uiexpertz_service_based_filter_posts() {
    check_ajax_referer('loadmore_nonce', 'nonce');

    $service_id = intval($_POST['service']);
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'project_service',
                'field' => 'id',
                'terms' => $service_id
            )
        )
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();?>
				<div class="col-lg-4 col-md-6">
					<div class="service-item service-item-wrap bg-white mb-4 pb-3">
						<div>
							<?php if(has_post_thumbnail( )) : ?>
							<div class="p-1">
								<?php the_post_thumbnail(get_the_ID(), 'full'); ?>
							</div>
							<?php endif; ?>
							<ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
							<?php
							$post_categories = get_the_terms(get_the_ID(), 'category');
							if ($post_categories && !is_wp_error($post_categories)) {
								foreach ($post_categories as $category) {
									echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
								}
							}
							?>
						</ul>
							<div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
								<h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
								<p class="fs-6 text-clr-gray mb-3"><?php the_excerpt(); ?></p>
							</div>
						</div>
						<a href="<?php the_permalink(); ?>"
							class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
							<span>
								<h4 class="fs-14 fw-semi-bold text-clr-gray"><?php echo esc_html__('Read more', 'uiexpertz'); ?></h4>
							</span>
							<span>
								<svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
								</svg>

							</span>
						</a>
					</div>
				</div>
        <?php }
    }

    wp_reset_postdata();
    die();
}
add_action('wp_ajax_uiexpertz_service_based_filter_posts', 'uiexpertz_service_based_filter_posts');
add_action('wp_ajax_nopriv_uiexpertz_service_based_filter_posts', 'uiexpertz_service_based_filter_posts');




/***
 * Category based filter on case study archive
 */
function uiexpertz_category_based_filter_posts() {
    check_ajax_referer('loadmore_nonce', 'nonce');

    $category_id = intval($_POST['category']);
	if(empty($category_id)) {
		return;
	}
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'project_category',
                'field' => 'id',
                'terms' => $category_id
            )
        )
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();?>
				<div class="col-lg-4 col-md-6">
					<div class="service-item service-item-wrap bg-white mb-4 pb-3">
						<div>
							<?php if(has_post_thumbnail( )) : ?>
							<div class="p-1">
								<?php the_post_thumbnail(get_the_ID(), 'full'); ?>
							</div>
							<?php endif; ?>
							<ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
							<?php
							$post_categories = get_the_terms(get_the_ID(), 'category');
							if ($post_categories && !is_wp_error($post_categories)) {
								foreach ($post_categories as $category) {
									echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
								}
							}
							?>
						</ul>
							<div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
								<h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
								<p class="fs-6 text-clr-gray mb-3"><?php the_excerpt(); ?></p>
							</div>
						</div>
						<a href="<?php the_permalink(); ?>"
							class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
							<span>
								<h4 class="fs-14 fw-semi-bold text-clr-gray"><?php echo esc_html__('Read more', 'uiexpertz'); ?></h4>
							</span>
							<span>
								<svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
								</svg>

							</span>
						</a>
					</div>
				</div>
        <?php }
    }

    wp_reset_postdata();
    die();
}
add_action('wp_ajax_uiexpertz_category_based_filter_posts', 'uiexpertz_category_based_filter_posts');
add_action('wp_ajax_nopriv_uiexpertz_category_based_filter_posts', 'uiexpertz_category_based_filter_posts');

/***
 * Category and service based filter on case study archive
 */
function uiexpertz_service_category_based_filter_posts() {
    check_ajax_referer('loadmore_nonce', 'nonce');

    $service_id = intval($_POST['service']);
    $category_id = intval($_POST['category']);
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1,
        'tax_query' => array(
			'relation' => 'AND',
            array(
                'taxonomy' => 'project_category',
                'field' => 'id',
                'terms' => $category_id
			),
            array(
                'taxonomy' => 'project_service',
                'field' => 'id',
                'terms' => $service_id
            )
        )
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();?>
				<div class="col-lg-4 col-md-6">
					<div class="service-item service-item-wrap bg-white mb-4 pb-3">
						<div>
							<?php if(has_post_thumbnail( )) : ?>
							<div class="p-1">
								<?php the_post_thumbnail(get_the_ID(), 'full'); ?>
							</div>
							<?php endif; ?>
							<ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
							<?php
							$post_categories = get_the_terms(get_the_ID(), 'category');
							if ($post_categories && !is_wp_error($post_categories)) {
								foreach ($post_categories as $category) {
									echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
								}
							}
							?>
						</ul>
							<div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
								<h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
								<p class="fs-6 text-clr-gray mb-3"><?php the_excerpt(); ?></p>
							</div>
						</div>
						<a href="<?php the_permalink(); ?>"
							class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
							<span>
								<h4 class="fs-14 fw-semi-bold text-clr-gray"><?php echo esc_html__('Read more', 'uiexpertz'); ?></h4>
							</span>
							<span>
								<svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
								</svg>

							</span>
						</a>
					</div>
				</div>
        <?php }
    }

    wp_reset_postdata();
    die();
}
add_action('wp_ajax_uiexpertz_service_category_based_filter_posts', 'uiexpertz_service_category_based_filter_posts');
add_action('wp_ajax_nopriv_uiexpertz_service_category_based_filter_posts', 'uiexpertz_service_category_based_filter_posts');
add_filter( 'wp_lazy_loading_enabled', '__return_false' );
/**
 * Add content to submenu
 */
function add_content_at_submenu_end($items, $args) {
    // Check if this is a submenu
    if (in_array('menu-item-has-children', $args->menu_class)) {
        // Add your content at the end of the submenu list
        $additional_content = '<li class="menu-item">Your md hemal akhand End Content</li>';
        $items .= $additional_content;
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_content_at_submenu_end', 10, 2);