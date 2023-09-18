    <!-- contact start -->
    <div class="contact bg-clr-blue section-padding">
        <div class="container">
            <div class="section-heading text-center mb-5">
                <?php if(!empty($settings['section_subtitle'])) : ?>
                <div class="section-hints d-flex justify-content-center align-items-center gap-2">
                    <img width="15" height="17" src="<?php echo get_template_directory_uri(); ?>/assets/img/contacttitle.svg" class="img-fluid" alt="section-heading">
                    <p class="fs-14 mb-0 fw-bold text-clr-sky"><?php echo wp_kses_post($settings['section_subtitle']); ?></p>
                </div>
                <?php endif; ?>
                <h1 class="fs-40 text-white py-2">
                    <?php if(!empty($settings['section_title'])) : ?>
                        <?php echo wp_kses_post($settings['section_title']); ?>
                    <?php endif; ?>
                    <?php if(!empty($settings['contact_mail_text'])) : ?>
                        <span><a class="fw-extraBold text-white text-decoration-underline" href="mailto:<?php echo $settings['contact_mail_link'] ? esc_attr($settings['contact_mail_link']): ''; ?>"><?php echo esc_html($settings['contact_mail_text']); ?></a></span>
                    <?php endif; ?>
                </h1>
                <?php if(!empty($settings['section_content'])) : ?>
                    <p class="text-clr-skyBlue"><?php echo wp_kses_post($settings['section_content']); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer-bg">

            <div class="container">
                <div class="contact-wrap bg-white pt-3 pt-md-5 pb-4 pb-lg-5">
                    <div class="row my-0 my-xl-3 align-items-center">
                        <div class="col-lg-5 offset-lg-1">
                            <div class="contactImg mb-5 mb-lg-0 px-4 px-md-0">
                                <?php echo wp_get_attachment_image( $settings['cf7_image']['id'], 'full' ); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-info mb-4">
                                
                                <?php if(!empty($settings['section_title_form'])) : ?>
                                    <h3 class="fs-4 fw-bold">
                                        <?php echo cb_core_kses_basic($settings['section_title_form']); ?>
                                    </h3>
                                <?php endif; ?>
                            </div>
                            <div class="contact-form">
                                <div class="form-wrapper">
                                <?php
                                    if(class_exists('WPCF7')) :
                                        if (!empty($settings['form_id'])) {
                                            echo cb_core_do_shortcode('contact-form-7', [
                                                'id' => $settings['form_id'],
                                                'html_class' => 'cb-cf7-form ' . cb_core_sanitize_html_class_param($settings['html_class']),
                                            ]);
                                        }
                                    endif;
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->