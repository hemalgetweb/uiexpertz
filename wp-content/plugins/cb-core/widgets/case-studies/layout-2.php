<div class="case-study">
    <div class="container">
    <?php if($wp_query->have_posts()) : ?>
        <div class="case-study-wrap">
            <div class="swiper caseStudy-slider">
                <div class="swiper-wrapper">
                <?php while($wp_query->have_posts()) : $wp_query->the_post();
                    $taxonomy = 'category'; // Assuming the taxonomy for categories is 'category', change it if needed
                    $categories = wp_get_post_terms(get_the_ID(), $taxonomy, array('fields' => 'all'));    
                ?>
                    <div class="swiper-slide">
                        <div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">
                            <a href="<?php echo get_the_permalink( get_the_ID()); ?>" class="js-text-cursor d-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png" class="arrow-image" alt="Arrow image">
                            </a>
                            <div>
                                <?php if(has_post_thumbnail()) : ?>
                                <div class="p-1">
                                    <?php the_post_thumbnail(get_the_ID(), 'full'); ?>
                                </div>
                                <?php endif; ?>
                                <?php
                                if (!empty($categories)) {
                                    // Output the HTML markup for the categories
                                    echo '<ul class="list-unstyled d-flex flex-wrap align-items-center gap-1 gap-md-3 p-4 mb-1">';
                                    foreach ($categories as $category) {
                                        $category_link = get_term_link($category->term_id, $taxonomy);
                                        echo '<li class="text-uppercase  bg-clr-lightPink py-1 px-3 ls-1 fs-12 text-clr-darkBlue">';
                                        echo '<a href="' . esc_url($category_link) . '">' . $category->name . '</a>';
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                    <h4 class="text-clr-blue fs-5 fw-bold mb-3"><a href="<?php the_permalink(get_the_ID()); ?>"><?php echo wp_trim_words(get_the_title(), 7); ?></a></h4>
                                    <p class="fs-6 text-clr-gray mb-3"><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                            <a href="<?php the_permalink( get_the_ID() ); ?>"
                                class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                <span>
                                    <h4 class="fs-14 fw-semi-bold text-clr-gray"><?php echo esc_html__('Read more', 'cb-core'); ?></h4>
                                </span>
                                <span>
                                    <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                    </svg>

                                </span>
                            </a>

                        </div>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
                </div>

            </div>
            <div class="casestudy-swiper-pagination text-center"></div>

        </div>
        <?php endif; ?>
    </div>

    <div class="swipper-button position-relative">
        <div class="swiper-button-prev-unique position-absolute d-flex justify-content-center align-items-center">
            <svg width="64" height="127" viewBox="0 0 64 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="btn-swiper" d="M64 63.5L0.5 0V127L64 63.5Z" />
                <path d="M25.9998 72L27.4165 70.5833L20.8332 64L27.4165 57.4167L25.9998 56L17.9998 64L25.9998 72Z"
                    fill="white" />
            </svg>

        </div>
        <div class="swiper-button-next-unique position-absolute d-flex justify-content-center align-items-center">
            <svg width="64" height="127" viewBox="0 0 64 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="btn-swiper" d="M0 63.5L63.5 0V127L0 63.5Z" fill="#97A3C1" />
                <path d="M38.0002 72L36.5835 70.5833L43.1668 64L36.5835 57.4167L38.0002 56L46.0002 64L38.0002 72Z"
                    fill="white" />
            </svg>

        </div>
    </div>
</div>
<!--/ case study end -->