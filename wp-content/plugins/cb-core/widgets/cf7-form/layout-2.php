
<!-- contact /-start -->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h1 class="fs-40 fw-normal text-clr-blue py-2">
                
                <?php if(!empty($settings['section_title'])) : ?>
                        <?php echo wp_kses_post($settings['section_title']); ?>
                    <?php endif; ?>
                    <?php if(!empty($settings['contact_mail_text'])) : ?>
                        <span>
                            <a class="fw-extraBold text-clr-darkBlue text-decoration-underline" href="mailto:<?php echo $settings['contact_mail_link'] ? esc_attr($settings['contact_mail_link']): ''; ?>"><?php echo esc_html($settings['contact_mail_text']); ?></a>
                        </span>
                <?php endif; ?>
            </h1>

            <?php if(!empty($settings['section_content'])) : ?>
                <p class="text-clr-gray"><?php echo wp_kses_post($settings['section_content']); ?></p>
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
</section>
<!-- contact /-end -->