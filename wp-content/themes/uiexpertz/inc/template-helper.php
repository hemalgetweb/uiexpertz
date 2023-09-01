<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package uiexpertz
 */

/** 
 *
 * uiexpertz header
 */

function uiexpertz_check_header()
{
    $uiexpertz_header_style = function_exists('get_field') ? get_field('header_style') : NULL;
    $uiexpertz_default_header_style = get_theme_mod('choose_default_header', 'header-style-1');

    if ($uiexpertz_header_style == 'header-style-1' && empty($_GET['s'])) {
        uiexpertz_header_style_1();
    }  else {
        /** default header style **/
        if ($uiexpertz_default_header_style == 'header-style-1') {
            uiexpertz_header_style_1();
        } else {
            uiexpertz_header_style_1();
        }
    }
}
add_action('uiexpertz_header_style', 'uiexpertz_check_header', 10);


// Header deafult
function uiexpertz_header_style_1()
{
    get_template_part('/inc/templates/header/header', '1'); ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->
<?php
}

/*
header_logo
*/
function uiexpertz_header_logo()
{
?>
    <?php
    $logo_image = get_theme_mod('logo_image', get_template_directory_uri() . '/assets/images/logo/logo.png');
    $logo_text = get_theme_mod('logo_text', __('uiexpertz', 'uiexpertz'));
    $cbtoolkit_header_main_logoset = get_theme_mod('cbtoolkit_header_main_logoset', __('image', 'uiexpertz'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset == 'image') {
            if (!empty($logo_image)) : ?>
                <img src="<?php echo esc_url($logo_image) ?>" alt="<?php echo esc_attr__('Image', 'uiexpertz'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text)) : ?>
                <span><?php echo esc_html($logo_text); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
/**
 * [uiexpertz_header_menu description]
 * @return [type] [description]
 */
function uiexpertz_header_menu()
{
?>
    <?php
    $uiexpertz_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0 py-3 py-xl-0',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children dropdown fw-medium fs-6 custom-dropdown', $uiexpertz_menu);
    ?>
<?php
}
/**
 * Add menu class into link
 */
function uiexpertz_add_specific_menu_location_atts($atts, $item, $args)
{
    // check if the item is in the primary menu
    if ($args->theme_location == 'main-menu') {
        // add the desired attributes:
        $atts['class'] = 'nav-link fs-14 fw-bold text-uppercase text-clr-skyBlue';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'uiexpertz_add_specific_menu_location_atts', 10, 3);
/**
 * Check if wp menu has submenu
 */
function uiexpertz_check_has_menu_in_link($atts, $item, $args)
{
    if (in_array('menu-item-has-children', $item->classes)) {
        if (key_exists('class', $atts)) {
            $atts['class'] .= ' dropdown-toggle';
        }
        $atts['role'] = 'button';
        $atts['data-bs-toggle'] = 'dropdown';
        $atts['aria-expanded'] = 'true';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'uiexpertz_check_has_menu_in_link', 10, 3);
/**
 * Add class into submenu link
 */
function uiexpertz_nav_menu_link_class($atts, $item)
{
    if (!$item->has_children && $item->menu_item_parent > 0) {
        $class         = 'text-decoration-none';
        $atts['class'] = $class;
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'uiexpertz_nav_menu_link_class', 10, 2);
function uiexpertz_copyright_menu()
{
?>
    <?php
    $uiexpertz_copyright_menu = wp_nav_menu([
        'theme_location' => 'copyright_menu',
        'menu_class'     => 'f-bottom-menu mb-md-0 mb-3 list-unstyled uiexpertz-copyright-menu d-flex justify-content-center justify-content-md-end gap-3 gap-xl-4  mb-0',
        'container'      => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
    ]);
    ?>
<?php
}

/**
 * [uiexpertz_footer_menu description]
 * @return [type] [description]
 */
function uiexpertz_footer_menu()
{
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
    ]);
}
/**
 *
 * uiexpertz footer
 */

function uiexpertz_check_footer()
{
    $uiexpertz_footer_style = function_exists('get_field') ? get_field('footer_style') : null;
    $uiexpertz_default_footer_style = get_theme_mod('choose_default_footer', 'footer-style-1');
    if ($uiexpertz_footer_style == 'footer-style-1') {
        uiexpertz_footer_style_1();
    } else {
        /** default footer style **/
        if ($uiexpertz_default_footer_style == 'footer-style-1') {
            uiexpertz_footer_style_1();
        } else {
            uiexpertz_footer_style_1();
        }
    }
}
add_action('uiexpertz_footer_style', 'uiexpertz_check_footer', 10);

/**
 * footer style_defaut
 */
function uiexpertz_footer_style_1()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '1');
    ?>

<?php
}
// uiexpertz_copyright
function uiexpertz_copyright_text()
{
    $uiexpertz_copyright = get_theme_mod('uiexpertz_copyright', __('© 2023 uiexpertz Designed by CodeBasket', 'uiexpertz'));
?>
    <?php if (!empty($uiexpertz_copyright)) : ?>
        <p><?php print esc_html($uiexpertz_copyright); ?></p>
    <?php endif; ?>
<?php }
// uiexpertz_search_form
function uiexpertz_search_form()
{
    ?>
    <!-- modal-search-start -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="<?php echo esc_attr__('Close', 'uiexpertz'); ?>">
            <span aria-hidden="true"><?php echo esc_html__('×', 'uiexpertz'); ?></span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="get" action="<?php print esc_url(home_url('/')); ?>">
                    <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Enter Your Keyword', 'uiexpertz'); ?>">
                    <button>
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- modal-search-end -->
<?php
}

add_action('uiexpertz_before_main_content', 'uiexpertz_search_form');


/**
 *
 * pagination
 */
if (!function_exists('uiexpertz_pagination')) {

    function _uiexpertz_pagi_callback($pagination)
    {
        return $pagination;
    }

    //page navegation
    function uiexpertz_pagination($prev, $next, $pages, $args)
    {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if (!$pages) {
                $pages = 1;
            }
        }
        $pagination = [
            'base'      => add_query_arg('paged', '%#%'),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ($wp_rewrite->using_permalinks()) {
            $pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');
        }

        if (!empty($wp_query->query_vars['s'])) {
            $pagination['add_args'] = ['s' => get_query_var('s')];
        }

        $pagi = '';
        if (paginate_links($pagination) != '') {
            $paginations = paginate_links($pagination);
            $pagi .= '<div class="blog-pagination mb-40">';
            foreach ($paginations as $key => $pg) {
                $pagi .= $pg;
            }
            $pagi .= '</div>';
        }

        print _uiexpertz_pagi_callback($pagi);
    }
}
