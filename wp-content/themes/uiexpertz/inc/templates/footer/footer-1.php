<?php
$uiexpertz_footer_logo_2 = get_theme_mod('uiexpertz_footer_logo_2');
$footer_bg_image_1 = get_theme_mod('footer_bg_image_1', '');
$footer_background_size_1 = get_theme_mod("footer_background_size_1", "cover");
$cbtoolkit_footer_bg_color_1 = get_theme_mod('cbtoolkit_footer_bg_color_1', '#fff');
$footer_background_position_select_1 = get_theme_mod('footer_background_position_select_1', 'center center');
$footer_background_blendmode_select_1 = get_theme_mod('footer_background_blendmode_select_1', 'normal');
$cbtoolkit_copyright_1 = get_theme_mod('cbtoolkit_copyright_1', __('Copyright © 2023 I UiExpertz I All Rights Reserved', 'uiexpertz'));
$cbtoolkit_footer_top_repeater = get_theme_mod('cbtoolkit_footer_top_repeater', array());
$contact_page_id = '1802';
$current_page_id = get_the_ID();
$contact_space_top = $contact_page_id == $current_page_id ? 'pt-100' : 'pt-300';
/*
cmt_section_footer_2: start section Footer 1
*/
$footer_class_2[1] = 'col-xl-3 col-md-6 col-6';
$footer_class_2[2] = 'col-xl-3 col-md-6 col-6';
$footer_class_2[3] = 'col-xl-3 col-md-6 col-6';
$footer_class_2[4] = 'col-xl-3 col-md-6 col-6';

?>
<!-- footer start -->
<footer class="uiexpertz-footer-114" data-background="<?php echo esc_url($footer_bg_image_1); ?>" data-bgcolor="<?php echo esc_attr($cbtoolkit_footer_bg_color_1); ?>">
    <div class="footer">
        <div class="container">
            <div class="footer-wrap">
            <?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')): ?>
                <div class="footer-wrapper mb-2 pb-4">
                    <div class="row">
                        <?php
                        for ($num = 1; $num <= 4; $num++) {
                            if (!is_active_sidebar('footer-' . $num)) {
                                continue;
                            }
                            print '<div class="' . esc_attr($footer_class_2[$num]) . '">';
                            dynamic_sidebar('footer-' . $num);
                            print '</div>';
                        }
                        ?>
                    </div>
                </div>
            <?php endif; ?>
                <div class="footer-bottom py-4 "  style="border-top: 1px solid #AAB4CF;">
                    <div class="row">
                        <div class="col-md-6">
                            <?php if (!empty($cbtoolkit_copyright_1)): ?>
                            <p class="copyright fs-14 text-center text-lg-start text-clr-gray mb-xl-0 ">
                                <?php echo esc_html($cbtoolkit_copyright_1); ?>
                            </p>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php uiexpertz_copyright_menu(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
