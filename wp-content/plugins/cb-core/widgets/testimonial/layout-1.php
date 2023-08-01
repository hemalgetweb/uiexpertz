<!-- testimonial start -->
<div class="testimonial bg-clr-blue section-padding">
    <div class="section-heading text-center mb-5 px-3">
        <?php if(!empty($settings['subtitle'])) : ?>
        <div class="section-hints d-flex justify-content-center align-items-center gap-2">
            <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/happyClient.svg" class="img-fluid" alt="section-heading">
            <p class="fs-14 mb-0 fw-bold text-clr-sky"><?php echo wp_kses_post($settings['subtitle']); ?></p>
        </div>
        <?php endif; ?>
        <?php if(!empty($settings['title'])) : ?>
            <h1 class="fs-40 text-white py-2"><?php echo wp_kses_post($settings['title']); ?></h1>
        <?php endif; ?>
        <?php if(!empty($settings['content'])) : ?>
            <p class="text-clr-skyBlue"><?php echo wp_kses_post($settings['content']); ?></p>
        <?php endif; ?>
    </div>
    <div class="container">
        <?php if(!empty($settings['slides'])) : ?>
        <div class="swiper testi-slider">
            <div class="testimonial-slider swiper-wrapper pt-5">
                <div class="slider-item swiper-slide">
                    <?php if(!empty($slide['testimonial_rating'])) : ?>
                    <div class="rating d-flex align-items-center gap-1">
                        <?php if($slide['testimonial_rating'] == 1) : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <?php endif; ?>
                        <?php if($slide['testimonial_rating'] == 2) : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <?php endif; ?>
                        <?php if($slide['testimonial_rating'] == 3) : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <?php endif; ?>
                        <?php if($slide['testimonial_rating'] == 4) : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <?php endif; ?>
                        <?php if($slide['testimonial_rating'] == 5) : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($slide['testimonial_text'])) : ?>
                    <p class="text-clr-sky fs-22 py-3 mt-3"><?php echo wp_kses_post($slide['testimonial_text']); ?></p>
                    <?php endif; ?>
                    <div class="d-flex align-items-center gap-2">
                        <?php if(!empty($slide['author_image']['url'])) : ?>
                            <?php echo wp_get_attachment_image( $slide['author_image']['id'], 'thumbnail' ); ?>
                        <?php endif; ?>
                        <?php if(!empty($slide['author_name_designation'])) : ?>
                            <p class="fs-12 fw-medium text-clr-skyBlue mb-0"><?php echo wp_kses_post($slide['author_name_designation']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="slider-item swiper-slide">
                    <div class="rating d-flex align-items-center gap-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                    </div>
                    <p class="text-clr-sky fs-22 py-3 mt-3">The product's speed of delivering an answer to a user
                        decreased from 30
                        seconds to 10. Neuron was easy to work with and
                        made the engagement seamless.</p>
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/writer1.png" class="img-fluid" alt="">
                        <p class="fs-12 fw-medium text-clr-skyBlue mb-0">Halász Emese / CEO / Gemetric Agency</p>
                    </div>
                </div>
                <div class="slider-item swiper-slide">
                    <div class="rating d-flex align-items-center gap-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                    </div>
                    <p class="text-clr-sky fs-22 py-3 mt-3">The product's speed of delivering an answer to a user
                        decreased from 30
                        seconds to 10. Neuron was easy to work with and
                        made the engagement seamless.</p>
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/writer1.png" class="img-fluid" alt="">
                        <p class="fs-12 fw-medium text-clr-skyBlue mb-0">Halász Emese / CEO / Gemetric Agency</p>
                    </div>
                </div>
                <div class="slider-item swiper-slide">
                    <div class="rating d-flex align-items-center gap-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                    </div>
                    <p class="text-clr-sky fs-22 py-3 mt-3">The product's speed of delivering an answer to a user
                        decreased from 30
                        seconds to 10. Neuron was easy to work with and
                        made the engagement seamless.</p>
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/writer1.png" class="img-fluid" alt="">
                        <p class="fs-12 fw-medium text-clr-skyBlue mb-0">Halász Emese / CEO / Gemetric Agency</p>
                    </div>
                </div>
                <div class="slider-item swiper-slide">
                    <div class="rating d-flex align-items-center gap-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" class="img-fluid" alt="">
                    </div>
                    <p class="text-clr-sky fs-22 py-3 mt-3">The product's speed of delivering an answer to a user
                        decreased from 30
                        seconds to 10. Neuron was easy to work with and
                        made the engagement seamless.</p>
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/writer1.png" class="img-fluid" alt="">
                        <p class="fs-12 fw-medium text-clr-skyBlue mb-0">Halász Emese / CEO / Gemetric Agency</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <?php endif; ?>
    </div>
        <div class="swipper-button position-relative">
            <div class="swiper-button-prev-unique position-absolute d-flex justify-content-center align-items-center">
            <svg width="64" height="127" viewBox="0 0 64 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="btn-swiper" d="M64 63.5L0.5 0V127L64 63.5Z"  />
                <path d="M25.9998 72L27.4165 70.5833L20.8332 64L27.4165 57.4167L25.9998 56L17.9998 64L25.9998 72Z" fill="white" />
            </svg>

            </div>
            <div class="swiper-button-next-unique position-absolute d-flex justify-content-center align-items-center">
            <svg width="64" height="127" viewBox="0 0 64 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path  class="btn-swiper" d="M0 63.5L63.5 0V127L0 63.5Z" fill="#97A3C1" />
                <path d="M38.0002 72L36.5835 70.5833L43.1668 64L36.5835 57.4167L38.0002 56L46.0002 64L38.0002 72Z" fill="white" />
            </svg>

            </div>
        </div>
</div>
<!--/ testimonial end -->
