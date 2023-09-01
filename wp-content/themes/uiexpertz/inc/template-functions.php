<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package uiexpertz
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function uiexpertz_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'uiexpertz_pingback_header');

// uiexpertz_classes_sidebar
function uiexpertz_classes_sidebar_func()
{
    if (is_active_sidebar('classes-sidebar')) {

        dynamic_sidebar('classes-sidebar');
    }
}
add_action('uiexpertz_classes_sidebar', 'uiexpertz_classes_sidebar_func', 20);

function uiexpertz_get_tag()
{
    $html = '';
    if (has_tag()) {
        $html .= '<span class="uiexpertz-fz-tagcloud-label-448 mr-25">' . esc_html__('Tags:', 'uiexpertz') . '</span><div class="tagcloud d-inline-block">';
        $html .= get_the_tag_list('', ' ', '');
        $html .= '</div>';
    }
    return $html;
}
function reveral_is_elementor_editor()
{

    if (did_action('admin_action_elementor')) {
        return \Elementor\Plugin::$instance->editor->is_edit_mode();
    }
    return is_admin() && isset($_REQUEST['action']) && in_array(sanitize_text_field(wp_unslash($_REQUEST['action'])), array('elementor', 'elementor_ajax'), true);
}
