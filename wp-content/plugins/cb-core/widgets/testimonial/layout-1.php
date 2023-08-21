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
    <!-- <div class="testimonial-container">
        <?php if (!empty($settings['slides'])): ?>
            <div class="swiper testi-slider">
                <div class="testimonial-slider swiper-wrapper pt-5">
                    <?php foreach ($settings['slides'] as $slide): ?>
                        <div class="slider-item swiper-slide">
                            <?php if (!empty($slide['testimonial_rating'])): ?>
                                <div class="rating d-flex align-items-center gap-1">
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
                            <?php endif; ?>
                            <?php if (!empty($slide['testimonial_text'])): ?>
                                <p class="text-clr-sky fs-22 py-3 mt-3">
                                    <?php echo wp_kses_post($slide['testimonial_text']); ?>
                                </p>
                            <?php endif; ?>
                            <div class="d-flex align-items-center gap-2">
                                <?php if (!empty($slide['author_image']['url'])): ?>
                                    <?php echo wp_get_attachment_image($slide['author_image']['id'], 'thumbnail'); ?>
                                <?php endif; ?>
                                <?php if (!empty($slide['author_name_designation'])): ?>
                                    <p class="fs-12 fw-medium text-clr-skyBlue mb-0">
                                        <?php echo wp_kses_post($slide['author_name_designation']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
              
                </div>
                <div class="swiper-pagination"></div>

                <div class="swipper-button ">
                    <div
                        class="swiper-button-prev-unique position-absolute d-flex justify-content-center align-items-center">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" transform="matrix(-1 0 0 1 50 0)" fill="#97A3C1" />
                            <path d="M29.0013 33L30.418 31.5833L23.8346 25L30.418 18.4167L29.0013 17L21.0013 25L29.0013 33Z"
                                fill="white" />
                        </svg>


                    </div>
                    <div
                        class="swiper-button-next-unique position-absolute d-flex justify-content-center align-items-center">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" fill="#97A3C1" />
                            <path d="M20.9987 33L19.582 31.5833L26.1654 25L19.582 18.4167L20.9987 17L28.9987 25L20.9987 33Z"
                                fill="white" />
                        </svg>


                    </div>
                </div>
           
            </div>
        <?php endif; ?>
    </div> -->

    <div class="testimonial-container">
        <div id="splide" class="splide testimonial">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div>
                            <div class="mb-4">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                            </div>
                            <div>
                                <h3 class="fs-22 fw-normal text-clr-sky mb-4">
                                    The product's speed of delivering an answer to a user decreased from 30 seconds to
                                    10.
                                    Neuron was easy to work with and made the engagement seamless.
                                </h3>

                                <div class="d-flex align-items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-writter.png"
                                        class="img-fluid flex-shrink-0" alt="">
                                    <p class="text-clr-skyBlue fs-12 fw-medium mb-0">Halász Emese / CEO / Gemetric
                                        Agency </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                    <div>
                            <div class="mb-4">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                            </div>
                            <div>
                                <h3 class="fs-22 fw-normal text-clr-sky mb-4">
                                    The product's speed of delivering an answer to a user decreased from 30 seconds to
                                    10.
                                    Neuron was easy to work with and made the engagement seamless.
                                </h3>

                                <div class="d-flex align-items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-writter.png"
                                        class="img-fluid flex-shrink-0" alt="">
                                    <p class="text-clr-skyBlue fs-12 fw-medium mb-0">Halász Emese / CEO / Gemetric
                                        Agency </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                    <div>
                            <div class="mb-4">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                            </div>
                            <div>
                                <h3 class="fs-22 fw-normal text-clr-sky mb-4">
                                    The product's speed of delivering an answer to a user decreased from 30 seconds to
                                    10.
                                    Neuron was easy to work with and made the engagement seamless.
                                </h3>

                                <div class="d-flex align-items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-writter.png"
                                        class="img-fluid flex-shrink-0" alt="">
                                    <p class="text-clr-skyBlue fs-12 fw-medium mb-0">Halász Emese / CEO / Gemetric
                                        Agency </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                    <div>
                            <div class="mb-4">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                                <img width="16" height="15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                    class="img-fluid" alt="">
                            </div>
                            <div>
                                <h3 class="fs-22 fw-normal text-clr-sky mb-4">
                                    The product's speed of delivering an answer to a user decreased from 30 seconds to
                                    10.
                                    Neuron was easy to work with and made the engagement seamless.
                                </h3>

                                <div class="d-flex align-items-center gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-writter.png"
                                        class="img-fluid flex-shrink-0" alt="">
                                    <p class="text-clr-skyBlue fs-12 fw-medium mb-0">Halász Emese / CEO / Gemetric
                                        Agency </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!--/ testimonial end -->