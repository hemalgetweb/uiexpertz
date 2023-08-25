<!-- testimonial start -->
<div class="testimonial bg-clr-blue section-padding">
    <div class="section-heading text-center mb-5 px-3">
        <?php if (!empty($settings['subtitle'])): ?>
            <div class="section-hints d-flex justify-content-center align-items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/happyClient.svg"
                    class="img-fluid" alt="section-heading">
                <p class="fs-14 mb-0 fw-bold text-clr-sky">
                    <?php echo wp_kses_post($settings['subtitle']); ?>
                </p>
            </div>
        <?php endif; ?>
        <?php if (!empty($settings['title'])): ?>
            <h1 class="fs-40 text-white py-2">
                <?php echo wp_kses_post($settings['title']); ?>
            </h1>
        <?php endif; ?>
        <?php if (!empty($settings['content'])): ?>
            <p class="text-clr-skyBlue">
                <?php echo wp_kses_post($settings['content']); ?>
            </p>
        <?php endif; ?>
    </div>

    <?php if (!empty($settings['slides'])): ?>
    <div class="testimonial-container">
        <div id="splide" class="splide testimonial">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($settings['slides'] as $slide): ?>
                    <li class="splide__slide">
                        <div>
                            <div class="mb-4">
                            <?php if ($slide['testimonial_rating'] == 1): ?>
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                            <?php endif; ?>
                            <?php if ($slide['testimonial_rating'] == 2): ?>
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                            <?php endif; ?>
                            <?php if ($slide['testimonial_rating'] == 3): ?>
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                            <?php endif; ?>
                            <?php if ($slide['testimonial_rating'] == 4): ?>
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                            <?php endif; ?>
                            <?php if ($slide['testimonial_rating'] == 5): ?>
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid"
                                    alt="">
                            <?php endif; ?>
                            </div>
                            <div>
                                <?php if (!empty($slide['testimonial_text'])): ?>
                                <h3 class="fs-22 fw-normal text-clr-sky mb-4">
                                    <?php echo wp_get_attachment_image($slide['author_image']['id'], 'thumbnail'); ?>
                                </h3>
                                <?php endif; ?>
                                <?php if (!empty($slide['author_name_designation'])): ?>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-writter.png"
                                        class="img-fluid flex-shrink-0" alt="">
                                    <p class="text-clr-skyBlue fs-12 fw-medium mb-0"><?php echo wp_kses_post($slide['author_name_designation']); ?></p>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<!--/ testimonial end -->