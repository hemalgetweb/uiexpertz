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
$footer_class_2[1] = 'col-xl-3 col-md-6 col-8';
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
                            <p class="copyright fs-14 text-center text-lg-start text-clr-gray mb-md-0 mb-3 mb-xl-0 ">
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

























<!-- footer -->
<footer class="footer bg-clr-deepDark d-none <?php echo esc_attr($contact_space_top); ?>"
    style="<?PHP echo $bg_properties; ?>">
    <div class="container">
        <div
            class="footer-top pb-5 d-flex justify-content-md-center justify-content-xl-between flex-wrap gap-4 align-items-center">
            <div class="footer-logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo"
                        class="img-fluid">
                </a>
            </div>
            <?php if (!empty($cbtoolkit_footer_top_repeater)): ?>
                <div
                    class="footer-top-right d-flex justify-content-md-center justify-content-xl-start flex-wrap gap-4 align-items-center">
                    <?php foreach ($cbtoolkit_footer_top_repeater as $index => $repeater): ?>
                        <?php if ($index == 0): ?>
                            <div class="contact-element d-flex gap-4 align-items-center">
                                <?php if (!empty($repeater['repeater_image'])): ?>
                                    <img src="<?php echo esc_url($repeater['repeater_image']); ?>" alt="icon" class="img-fluid">
                                <?php endif; ?>
                                <?php if (!empty($repeater['repeater_label'])): ?>
                                    <a href="mailto:<?php echo $repeater['repeater_url'] ? $repeater['repeater_url'] : ''; ?>"
                                        class="fs-14 fw-bold text-clr-dark5 text-decoration-none text-uppercase"
                                        target="<?php echo $repeater['repeater_url_target'] ? $repeater['repeater_url_target'] : ''; ?>">
                                        <?php echo esc_html($repeater['repeater_label']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="divider d-none d-lg-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.svg" alt="divider"
                                    class="img-fluid">
                            </div>
                        <?php endif; ?>
                        <?php if ($index == 1): ?>
                            <div class="contact-element d-flex gap-4 align-items-center">
                                <?php if (!empty($repeater['repeater_image'])): ?>
                                    <img src="<?php echo esc_url($repeater['repeater_image']); ?>" alt="icon" class="img-fluid">
                                <?php endif; ?>
                                <?php if (!empty($repeater['repeater_label'])): ?>
                                    <a href="tel:<?php echo $repeater['repeater_url'] ? $repeater['repeater_url'] : ''; ?>"
                                        class="fs-14 fw-bold text-clr-dark5 text-decoration-none text-uppercase"
                                        target="<?php echo $repeater['repeater_url_target'] ? $repeater['repeater_url_target'] : ''; ?>">
                                        <?php echo esc_html($repeater['repeater_label']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="divider d-none d-lg-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.svg" alt="divider"
                                    class="img-fluid">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php if ($index == 2): ?>
                        <div class="contact-element d-flex gap-4 align-items-center">
                            <?php if (!empty($repeater['repeater_image'])): ?>
                                <img src="<?php echo esc_url($repeater['repeater_image']); ?>" alt="icon" class="img-fluid">
                            <?php endif; ?>
                            <?php if (!empty($repeater['repeater_label'])): ?>
                                <p class="fs-14 fw-bold text-clr-dark5 text-uppercase mb-0">
                                    <?php echo esc_html($repeater['repeater_label']); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')): ?>
            <div class="footer-widget-area">
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
        <?php if (!empty($cbtoolkit_copyright_1)): ?>
            <div class="copyright d-flex flex-column flex-sm-row justify-content-center py-3">
                <p class="m-0 text-clr-dark5 fw-normal fs-6">
                    <?php echo esc_html($cbtoolkit_copyright_1); ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</footer>
<!-- / footer -->