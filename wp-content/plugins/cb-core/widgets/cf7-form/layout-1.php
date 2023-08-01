    <!-- contact start -->
    <div class="contact bg-clr-blue section-padding">
        <div class="section-heading text-center mb-5">
            <div class="section-hints d-flex justify-content-center align-items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacttitle.svg" class="img-fluid" alt="section-heading">
                <p class="fs-14 mb-0 fw-bold text-clr-sky">Let’s work together</p>
            </div>
            <h1 class="fs-40 text-white py-2">Tell us about your project, or send us an email at <span>
                <a class="fw-extraBold text-white text-decoration-underline" href="mailto:hello@uiexpertz.com">hello@uiexpertz.com</a></span>
            </h1>
            <p class="text-clr-skyBlue">We take pride in delivering exceptional customer satisfaction and are always
                thrilled to hear how we’ve helped our
                clients achieve their goals.</p>
        </div>
        <div class="footer-bg">

            <div class="container">
                <div class="contact-wrap bg-white pt-3 pt-md-5 pb-4 pb-lg-5">
                    <div class="row my-0 my-md-3 align-items-center">
                        <div class="col-lg-5 offset-lg-1">
                            <div class="contactImg text-center mb-5 mb-lg-0 px-4 px-md-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.svg" class="img-fluid" alt="">
                                <?php echo wp_get_attachment_image( $settings['cf7_image']['id'], 'full' ); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-info mb-4">
                                <!-- <h3 class="fs-4 fw-bold">Fill out the form to start the <br class="d-none d-xl-inline">
                                    conversation</h3> -->
                                
                                <?php if(!empty($settings['section_title'])) : ?>
                                    <h3 class="fs-4 fw-bold">
                                        <?php echo cb_core_kses_basic($settings['section_title']); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if(!empty($settings['section_subtitle'])) : ?>
                                    <p class="fs-6 text-clr-dark2">
                                        <?php echo cb_core_kses_basic($settings['section_subtitle']); ?>
                                    </p>
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