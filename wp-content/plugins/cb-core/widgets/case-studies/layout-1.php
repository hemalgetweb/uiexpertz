
<!--case study start -->
<div class="case-study">
    <div class="container">
        <?php if($wp_query->have_posts()) :
            $max_num_pages = $wp_query->max_num_pages;
            ?>
        <div class="case-study-wrap">
            <div class="row uiexperts-case-study-wrap-row">
                <?php while($wp_query->have_posts()) : $wp_query->the_post();
                $taxonomy = 'category'; // Assuming the taxonomy for categories is 'category', change it if needed
                $categories = wp_get_post_terms(get_the_ID(), $taxonomy, array('fields' => 'all'));    
            ?>
                <div class="col-md-4  col-sm-6  mb-4">
                    <div class="service-item d-flex flex-column justify-content-between h-100 bg-white">
                        <div class="uiexpertz-service-item">
                            <div class="p-1">
                               <?php the_post_thumbnail(get_the_ID(), 'full'); ?>
                            </div>
                            <?php
                           if (!empty($categories)) {
                                // Output the HTML markup for the categories
                                echo '<ul class="list-unstyled d-flex flex-wrap align-items-center gap-1 gap-md-3 p-4 mb-1">';
                                foreach ($categories as $category) {
                                    $category_link = get_term_link($category->term_id, $taxonomy);
                                    echo '<li class="bg-clr-lightPink py-1 px-3 ls-1 fs-12 text-clr-darkBlue">';
                                    echo '<a href="' . esc_url($category_link) . '">' . $category->name . '</a>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                            <div class="service-content px-4 text-decoration-none d-block ">
                                <h4 class="text-clr-blue fs-5 fw-bold mb-3 lh-base"><a href="<?php the_permalink(get_the_ID()); ?>"><?php echo wp_trim_words(get_the_title(), 7); ?></a></h4>
                                <p class="fs-6 text-clr-gray mb-0"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <a href="<?php the_permalink( get_the_ID() ); ?>"
                            class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between py-3 mt-3">
                            <span>
                                <h4 class="fs-14 fw-semi-bold text-clr-gray">View details</h4>
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
            <div class="d-flex align-items-center  mt-5 pt-3 justify-content-center">
                <button data-posts_per_page="<?php echo $per_page; ?>" data-max_num_pages="<?php echo esc_attr($max_num_pages); ?>" class="uiexperts-more-works-portfolio text-decoration-none position-relative bg-btn banner-btn  text-uppercase border-0 bg-clr-darkBlue text-white fs-14 fw-extraBold d-flex gap-2 align-items-center "
                    href="#0">
                    More works
                    <svg class="btn-icon position-absolute" width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 12L4.9375 10.9375L9.125 6.75H0V5.25H9.125L4.9375 1.0625L6 0L12 6L6 12Z"
                            fill="white" />
                    </svg>

                </button>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<!--/ case study end -->